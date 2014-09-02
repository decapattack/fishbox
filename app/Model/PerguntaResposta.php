<?php

class PerguntaResposta extends AppModel {
    //public $hasMany = array('Resposta');
        public $hasMany = array(
    'Resposta' => array(
        'className'  => 'Resposta',
        'foreignKey' => 'pergunta_respostas_id',
        'conditions' =>'',
        'order'      => ''
        )
);
}

?>