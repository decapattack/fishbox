<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Jogador', array('action' => 'add')); ?></p>
<table class="table striped bordered">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Código do Cupom</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($jogadores as $jogador): ?>
    <tr>
        <td><?php echo $jogador['Jogador']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $jogador['Jogador']['title'],
                    array('action' => 'view', $jogador['Jogador']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $jogador['Jogador']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $jogador['Jogador']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $jogador['Jogador']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php //echo $this->Paginator->numbers(); ?>    
             <?php ///echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
    <?php //echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
    <?php //echo $this->Paginator->counter(); ?>