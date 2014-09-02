<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

    public $validate = array(
        'nome'=>array(
            'rule'=>'notEmpty',
            'message'=>'Campo obrigatório.'
        ),
        'cpfCnpj'=>array(
            'rule'=>'notEmpty'
        ),
        'email' => array(
            'rule'=>'email'
        ),
        'username'=>array(
            'rule'=>'alphaNumeric',
            'required'=>true
        ),
        'password'=>array(
            'rule'=>'alphaNumeric',
            'required'=>true
        )
    );
}
?>