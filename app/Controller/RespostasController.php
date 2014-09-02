<?php

class RespostasController extends AppController {

    public $components = array('Session');

    /* public $components = array('Paginator');
      public $paginate = array(
      'limit'=>2,
      'order'=>array(
      'Jogo.nome'=>'asc'
      )
      ); */

    /*
     * Index
     */

    public function index() {
        /* $this->Paginator->settings = $this->paginate;
          $data = $this->Paginator->paginate('jogo');
          $this->set('jogo',$data); */
          
        $this->set('respostas', $this->Resposta->find('all'));
    }

    /*
     * Tela de edi��o
     * @param id
     */

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Prmio invlido'));
        }

        $resposta = $this->Resposta->findById($id);
        if (!$resposta) {
            throw new NotFoundException(__('Prmio invlido'));
        }
        $this->set('resposta', $resposta);
    }

    /*
     * Adiciona Jogo
     */

    public function add() {
        if ($this->request->is('post')) {
            $this->Resposta->create();
            if ($this->Resposta->save($this->request->data)) {
                $this->Session->setFlash(__('Prmio gravado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Erro ao gravar o prmio.'));
        }
    }

    /*
     * Edi��o de pr�mio
     * @param id
     */

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Jogo no encontrado'));
        }

        $resposta = $this->Resposta->id = $id;
        if (!$resposta) {
            throw new NotFoundException("Jogo no Encontrado.");
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Resposta->id = $id;
            if ($this->Resposta->save($this->request->data)) {
                $this->Session->setFlash("Editado com sucesso!");
                return $this->redirect(array('action' => 'index'));
            }
        }

        if ($this->request->data) {
            $this->request->data = $resposta;
        }
    }

}

?>