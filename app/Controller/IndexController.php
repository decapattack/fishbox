<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author Hermann
 */
class IndexController extends AppController{
    //put your code here
    public $layout = 'login';
    public $components = array('Session');

    public function beforeFilter() {
        parent::beforeFilter(); //call parent before filter
        $this->layout = $this->layout;
    }
    public function login(){
        $this->layout = 'login';
    }
}
