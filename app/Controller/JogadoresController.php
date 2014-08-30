<?php
class JogadoresController extends AppController{
    public $components = array("Session");

    public function index(){
        $this->set('jogadores', $this->Jogadore->find('all'));
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
}

?>