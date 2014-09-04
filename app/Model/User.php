<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty'
        ),
        'cpfCnpj' => array(
            'rule' =>'notEmpty'
        ),
        'email'=>array(
            'rule'=>'email'
        )/*,
        'username' => array(
            'alphaNumeric' => array(
                'rule'     => 'alphaNumeric',
                'required' => true,
                'message'  => 'Somente letras e números'
            ),
            'between' => array(
                'rule'    => array('between', 5, 15),
                'message' => 'Entre 5 e 15 caracteres'
            ),'unique' => array(
                'rule' => 'isUnique',
                'required' => 'create',
                'message'=>'Usuário já existe no sistema'
            )
        ),
        'password'=>array(
            'rule'    => array('minLength', 8),
            'message' => 'Mínimo de 8 caracteres'
        )*/
    );

    public function beforeSave($options = array()) {
        if(!empty($this->data[$this->alias]['auxPassword'])) {
                $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['auxPassword']);
        
        }elseif(!isset($this->data[$this->alias]['auxPassword'])){
                $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        
        }else{
                //nothing, leave the password is in database
        }
        return true;
    }

    
}
?>