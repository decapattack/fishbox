<?php

class PremiosController extends AppController {

    public $components = array('Session','Paginator');

    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Jogadore.nome' => 'asc'
        )
    );

    /*
     * Index
     */

    public function index() {
        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate('Premio');
        $this->set('premios',$data);
        
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
            $this->Premio->create();
            if ($this->Premio->save($this->request->data)) {
                $this->Session->setFlash(__('Prêmio gravado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Erro ao gravar o prêmio.'));
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
    
    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->Premio->id = $id;
        if (!$this->Premio->exists()) {
            throw new NotFoundException(__('Prêmio inválido.'));
        }
        if ($this->Premio->delete()) {
            $this->Session->setFlash(__('Prêmio deletado.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Erro ao deletar prêmio.'));
        return $this->redirect(array('action' => 'index'));
    }

}

?>