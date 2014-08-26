<!-- File: /app/View/Posts/index.ctp -->

<legend>Consultar Usuários</legend>
<p><?php echo $this->Html->link('Adicionar Uruário', array('action' => 'add')); ?></p>
<table class="table striped bordered">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ações</th>
        <th>Criado Em</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $user['User']['username'],
                    array('action' => 'view', $user['User']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'view', $user['User']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php //echo $this->Paginator->numbers(); ?>    
             <?php //echo $this->Paginator->prev('<- Previous', null, null, array('class' => 'disabled')); ?>
    <?php //echo $this->Paginator->next('Next ->', null, null, array('class' => 'disabled')); ?>    
    <?php //echo $this->Paginator->counter(); ?>