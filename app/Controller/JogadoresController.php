<?php

class JogadoresController extends AppController {

    //public $components = array('Session');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }

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
        $this->set('jogadores', $this->Jogadore->find('all'));
    }

    /*
     * Tela de edição
     * @param id
     */

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Prêmio inválido'));
        }

        $premio = $this->Premio->findById($id);
        if (!$premio) {
            throw new NotFoundException(__('Prêmio inválido'));
        }
        $this->set('premio', $premio);
    }

    /*
     * Adiciona Jogo
     */

    public function add() {
        if ($this->request->is('post')) {
            $this->Jogadore->create();
            $this->Jogadore->save($this->request->data); 
                //$this->Session->setFlash(__('Prêmio gravado com sucesso'));
            return $this->redirect(array('action' => 'index'));

        }        
    }

    /*
     * Edição de prêmio
     * @param id
     */

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Jogo não encontrado'));
        }

        $post = $this->Premio->id = $id;
        if (!premio) {
            throw new NotFoundException("Jogo não Encontrado.");
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Premio->id = $id;
            if ($this->Premio->save($this->request->data)) {
                $this->Session->setFlash("Editado com sucesso!");
                return $this->redirect(array('action' => 'index'));
            }
        }

        if ($this->request->data) {
            $this->request->data = $premio;
        }
    }

}

?>