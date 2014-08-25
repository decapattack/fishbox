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
            throw new NotFoundException(__('Pr�mio inv�lido'));
        }
        $this->set('perguntaResposta', $perguntaResposta);
    }

    /*
     * Adiciona Jogo
     */

    public function viewAdd() {
        
    }

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
            $this->PerguntaResposta->saveAll($this->request->data,array("deep"=>true));
            /*if(!empty($perguntaResposta)){
                $this->request->data['Resposta']['pergunta_respostas_id'] = $this->PerguntaResposta->id;
            }
            if ($this->PerguntaResposta->Resposta->saveMany($this->request->data['Resposta'])) {
                
            }*/
            $this->Session->setFlash(__('Erro ao gravar o premio.'));
            return $this->redirect(array('action' => 'add'));
            //
        }
    }

    /*
     * Edicao de premio
     * @param id
     */

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Jogo n�o encontrado'));
        }

        $post = $this->PerguntaResposta->id = $id;
        if (!premio) {
            throw new NotFoundException("Jogo n�o Encontrado.");
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