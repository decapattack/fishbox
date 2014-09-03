<?php

class PerguntaRespostasController extends AppController {

    public $components = array('Session','Paginator');
    
    var $uses = array('CategoriaPergunta', 'Resposta', 'PerguntaResposta');
    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'PerguntaResposta.nome' => 'asc'
        )
    );

    /*
     * Index
     */

    public function index() {
        $this->loadModel('CategoriaPergunta');
        $options = $this->CategoriaPergunta->find('list', array(
            'fields' => array(
                'id',
                'nome'
            )
        ));
        // similar to findAll(), but fetches paged results
        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate('PerguntaResposta');
        
        
        
        
        
        
        
        
        $this->set('categoriaPerguntas',$options);
        $this->set('perguntas', $data);
    }

    /*
     * Tela de edição
     * @param id
     */

    public function view($id) {
        $perguntaResposta = $this->PerguntaResposta->findById($id);
        $this->loadModel('CategoriaPergunta');
        $options = $this->CategoriaPergunta->find('list', array(
            'fields' => array(
                'id',
                'nome'
            )
        ));
        $this->loadModel('Resposta');
        $respostas = $this->Resposta->find('all',array(
            'conditions' => array('Resposta.pergunta_respostas_id' => $id)
        ));
        
        if (!$id) {
            throw new NotFoundException(__('Pergunta Inválida'));
        }
        if (!$perguntaResposta) {
            throw new NotFoundException(__('Pergunta Inválida'));
        }
        $this->set('categoriaPerguntas',$options);
        $this->set('respostas', $respostas);
        $this->set('perguntaResposta', $perguntaResposta);
    }
    
    /*
     * Adiciona Perguntas e Respostas
     * 
     */
    public function add() {
        $this->loadModel('CategoriaPergunta');
        $options = $this->CategoriaPergunta->find('list', array(
            'fields' => array(
                'id',
                'nome'
            )
        ));
        $this->set('categoriaPerguntas', $options);
        if ($this->request->is('post')) {
            $this->PerguntaResposta->create();
            if($this->PerguntaResposta->saveAll($this->request->data,array("deep"=>true))){
                $this->Session->setFlash(__('Gravado com sucesso.'));
            }else{
                $this->Session->setFlash(__('Erro ao gravar o premio.'));
            }
            return $this->redirect(array('action' => 'add'));
        }
    }

    /*
     * Edicao de premio
     * @param id
     */

    public function edit($id = null) {

        if ($this->request->is(array('post', 'put'))) {
            $this->loadModel('Resposta');
            $this->Resposta->query("DELETE FROM respostas WHERE pergunta_respostas_id = ".$id);
            $this->PerguntaResposta->id = $id;
            if ($this->PerguntaResposta->saveAll($this->request->data)) {
                $this->Session->setFlash("Editado com sucesso!");
                return $this->redirect(array('action' => 'index'));
            }
        }
        
        $perguntaResposta = $this->PerguntaResposta->findById($id);
        $this->loadModel('CategoriaPergunta');
        $options = $this->CategoriaPergunta->find('list', array(
            'fields' => array(
                'id',
                'nome'
            )
        ));
        $this->loadModel('Resposta');
        $respostas = $this->Resposta->find('all',array(
            'conditions' => array('Resposta.pergunta_respostas_id' => $id)
        ));
        $this->set('categoriaPerguntas',$options);
        $this->set('respostas', $respostas);
        $this->set('perguntaResposta', $perguntaResposta);

        /*if ($this->request->data) {
            $this->request->data = $perguntaResposta;
        }*/
    }
    
    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->PerguntaResposta->id = $id;
        if (!$this->PerguntaResposta->exists()) {
            throw new NotFoundException(__('Pergunta não encontrada.'));
        }
        if ($this->PerguntaResposta->delete()) {
            $this->Session->setFlash(__('Pergunta deletada.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Erro ao deletar pergunta.'));
        return $this->redirect(array('action' => 'index'));
    }
    
    public function search() {
        $this->Paginator->settings = $this->paginate;
        $this->loadModel('CategoriaPergunta');
        $options = $this->CategoriaPergunta->find('list', array(
            'fields' => array(
                'id',
                'nome'
            )
        ));
        $nome = $this->request->query['nome'];
        $categoria = $this->request->query['categoria_perguntas_id'];
        
        $conditions = array();
        if($nome != "" && $categoria == ""){
            $conditions = array(array('PerguntaResposta.nome LIKE' => "%$nome%"));
        }else if($nome == "" && $categoria != ""){
            $conditions = array('PerguntaResposta.categoria_perguntas_id =' => $categoria);
        }else if($nome != "" && $categoria != ""){
            $conditions = array('AND' => array(
                array('PerguntaResposta.nome LIKE' => "%$nome%"),
                array('PerguntaResposta.categoria_perguntas_id =' => $categoria)
            ));
        }
        $data = $this->Paginator->paginate('PerguntaResposta', $conditions);
        $this->set('categoriaPerguntas',$options);
        $this->set('perguntas', $data);
    }

}
?>