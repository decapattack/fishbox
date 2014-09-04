<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

class UsersController extends AppController {
    
    public $components = array('Session','Paginator');
    
    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'User.nome' => 'asc'
        )
    );
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->authError = __('abcd.');
        $this->Auth->loginError = __('efgh.');
        $this->Auth->allow('logout','login');
    }

    public function index() {
        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate('User');
        $this->set('users', $data);
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Adicionado com sucesso.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                    __('Erro ao salvar usuário. Por favor, tente novamente.')
            );
        }
    }

    public function edit($id = null) {
        /*if($id != $this->Auth->user('id')){
            $this->Session->setFlash(__('Sem permissão de acesso.'));
            return $this->redirect(array('action' => 'index'));
        }*/
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário inválido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Editado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                    __('Erro ao editar usuário.')
            );
        } 
        $this->set('user', $this->User->read(null, $id));
    }

    public function delete($id = null) {
        if($this->Auth->user('role')!='admin'){
            $this->Session->setFlash("Sem permissão!");
             return $this->redirect(array('action'=>'index'));
        }
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário inválido'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('Usuário deletado'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Erro ao deletar usuário'));
        return $this->redirect(array('action' => 'index'));
    }

    public function login() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Login ou senha inválidos.'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
?>