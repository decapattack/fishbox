<?php

class JogadoresController extends AppController {

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
        $this->set('jogadores', $this->Jogador->find('all'));
    }

    /*
     * Tela de edi��o
     * @param id
     */

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Jogador inv�lido'));
        }

        $jogador = $this->Jogador->findById($id);
        if (!$jogador) {
            throw new NotFoundException(__('Jogador inv�lido'));
        }
        $this->set('jogador', $jogador);
    }

    /*
     * Adiciona Jogo
     */

    public function add() {
        if ($this->request->is('post')) {
            $this->Jogador->create();
            if ($this->Jogador->save($this->request->data)) {
                $this->Session->setFlash(__('Jogo gravado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }

    /*
     * Edi��o de pr�mio
     * @param id
     */

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Jogador não encontrado'));
        }

        $jogador = $this->Jogador->id = $id;
        if (!$jogador) {
            throw new NotFoundException("Jogador não Encontrado.");
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Jogador->id = $id;
            if ($this->Jogador->save($this->request->data)) {
                $this->Session->setFlash("Editado com sucesso!");
                return $this->redirect(array('action' => 'index'));
            }
        }

        if ($this->request->data) {
            $this->request->data = $jogador;
        }
    }

}

?>