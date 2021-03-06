<?php
class JogadoresController extends AppController{
    public $components = array('Session','Paginator');
    
    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Jogadore.nome' => 'asc'
        )
    );

    public function index(){
        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate('Jogadore');
        $this->set('jogadores', $data);
    }

    public function add(){
        if($this->request->is('post')){
            $this->Jogadore->create();
            if($this->Jogadore->save($this->request->data)){
                $this->Session->setFlash(__('Jogador gravado com sucesso.'));
                return $this->redirect(array('action'=>'add'));
            }
            $this->Session->setFlash(__('Erro ao gravar Jogador'));
        }
    }
    
    public function delete($id = null) {
        if($this->Auth->user('role')!='admin'){
            $this->Session->setFlash("Sem permissão!");
             return $this->redirect(array('action'=>'index'));
        }
        $this->request->onlyAllow('post');

        $this->Jogadore->id = $id;
        if (!$this->Jogadore->exists()) {
            throw new NotFoundException(__('Jogador inválido.'));
        }
        if ($this->Jogadore->delete()) {
            $this->Session->setFlash(__('Jogador deletado.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Erro ao deletar jogador.'));
        return $this->redirect(array('action' => 'index'));
    }
}

?>