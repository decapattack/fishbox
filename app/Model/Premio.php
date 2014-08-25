<?php
class Premio extends AppModel{
    public $validate = array(
        'nome'=>array(
            'rule'=>'notEmpty'
        ),
        'descricao'=>array(
            'rule'=>'notEmpty'
        )
    );
}
?>