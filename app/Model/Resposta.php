<?php
class Resposta extends AppModel{
    public $belongsTo = array(
        'PerguntaResposta'=>array(
            'className'=>'PerguntaResposta',
            'foreignKey'=>'pergunta_respostas_id'
        )
    );
}
?>