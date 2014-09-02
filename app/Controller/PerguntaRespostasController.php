<?php

class PerguntaRespostasController extends AppController {

    public $components = array('Session');
    var $uses = array('CategoriaPergunta', 'Resposta', 'PerguntaResposta');

    /*
     * Index
     */

    public function index() {
        $this->loadModel('CategoriaPergunta');
        $this->set('categoriaPerguntas', $this->CategoriaPergunta->find('list'));
        $this->set('perguntas', $this->PerguntaResposta->find('all'));
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
            $this->PerguntaResposta->id = $id;
            if ($this->PerguntaResposta->saveAssociated($this->request->data)) {
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

}
?>