<!-- File: /app/View/Premios/index.ctp -->

<legend>Consultar Prêmios</legend>
<p><?php echo $this->Html->link('Adicionar Prêmio', array('action' => 'add'),array('class'=>'button')); ?></p>
<table class="table striped bordered">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Local de Retirada</th>
        <th>Deletar</th>
    </tr>

<!-- Here's where we loop through our $premioss array, printing out post info -->

    <?php foreach ($premios as $premio): ?>
    <tr>
        <td><?php echo $premio['Premio']['nome']; ?></td>
        <td><?php echo $premio['Premio']['descricao']; ?></td>
        <td>
            <?php echo $premio['Premio']['localRetirada']; ?>
        </td>
        <td style="text-align: center">
            
                <?php
                echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $premio['Premio']['id']),
                    array('confirm' => 'Tem certeza?', 'class'=>'button')
                );
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->prev('<- Anterior', null, null, array('class' => 'disabled')); ?>
&nbsp;&nbsp;::&nbsp;&nbsp;
<?php echo $this->Paginator->next('Próximo ->', null, null, array('class' => 'disabled')); ?>    
<?php echo $this->Paginator->counter(); ?>