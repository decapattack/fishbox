<!-- File: /app/View/Premios/index.ctp -->

<legend>Consulta de Prêmios</legend>
<p><?php echo $this->Html->link('Adicionar Prêmio', array('action' => 'add')); ?></p>
<table class="table striped bordered">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Local de Retirada</th>
    </tr>

<!-- Here's where we loop through our $premioss array, printing out post info -->

    <?php foreach ($premios as $premio): ?>
    <tr>
        <td><?php echo $premio['Premio']['id']; ?></td>
        <td><?php echo $premio['Premio']['nome']; ?></td>
        <td><?php echo $premio['Premio']['descricao']; ?></td>
        <td>
            <?php echo $premio['Premio']['localRetirada']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php //echo $this->Paginator->numbers(); ?>    
             <?php ///echo $this->Paginator->prev('� Previous', null, null, array('class' => 'disabled')); ?>
    <?php //echo $this->Paginator->next('Next �', null, null, array('class' => 'disabled')); ?>    
    <?php //echo $this->Paginator->counter(); ?>