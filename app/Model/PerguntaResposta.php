<?php

class PerguntaResposta extends AppModel {


    public $hasMany = array(
        'Resposta' => array(
            'className' => 'Resposta'
        )
    );

}

?>