<!-- File: /app/View/Jogos/edit.ctp -->

<h1>Editar Jogo</h1>
<?php
echo $this->Form->create('Jogos');
echo $this->Form->input('nome');
echo $this->Form->input('uri');
echo $this->Form->input('descricao', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>