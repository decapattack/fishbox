<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Prêmio</h1>
<?php
echo $this->Form->create('Premio');
echo $this->Form->input('nome');
echo $this->Form->input('descricao');
echo $this->Form->input('local_retirada');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>