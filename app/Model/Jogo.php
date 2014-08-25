<?php
class Jogo extends AppModel{
    public $validate = array(
        'nome'=>array(
            'rule'=>'notEmpty'
        ),
        'uri'=>array(
            'rule'=>'notEmpty'
        ),
        'descricao'=>array(
            'rule'=>'notEmpty'
        )
    );
}
?>