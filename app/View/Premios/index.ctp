<!-- File: /app/View/Premios/index.ctp -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
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
        <td>
            <?php
                echo $this->Html->link(
                    $premios['Premio']['title'],
                    array('action' => 'view', $premios['Premio']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $premios['Premio']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $premios['Premio']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $premios['Premio']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php //echo $this->Paginator->numbers(); ?>    
             <?php ///echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
    <?php //echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
    <?php //echo $this->Paginator->counter(); ?>