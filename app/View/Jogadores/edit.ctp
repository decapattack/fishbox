<!-- File: /app/View/Jogadores/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $this->Form->create('Jogador');
echo $this->Form->input('nome');
echo $this->Form->input('codigo_cupom');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>