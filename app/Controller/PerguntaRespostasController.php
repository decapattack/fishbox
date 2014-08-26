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
        $this->set('perguntasRespostas', $this->PerguntaResposta->find('all'));
    }

    /*
     * Tela de edição
     * @param id
     */

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Pergunta Inválida'));
        }

        $perguntaResposta = $this->PerguntaResposta->findById($id);
        if (!$perguntaResposta) {
            throw new NotFoundException(__('Pergunta Inválida'));
        }
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
        if (!$id) {
            throw new NotFoundException(__('Jogo não encontrado'));
        }

        $post = $this->PerguntaResposta->id = $id;
        if (!premio) {
            throw new NotFoundException("Jogo não Encontrado.");
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->PerguntaResposta->id = $id;
            if ($this->PerguntaResposta->saveAll($this->request->data)) {
                $this->Session->setFlash("Editado com sucesso!");
                return $this->redirect(array('action' => 'add'));
            }
        }

        if ($this->request->data) {
            $this->request->data = $perguntaResposta;
        }
    }

}
?>