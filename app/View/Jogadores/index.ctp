<!-- File: /app/View/Posts/index.ctp -->

<legend>Consultar Jogadores</legend>
<table class="table striped bordered">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Código do Cupom</th>
        <th>Deletar</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($jogadores as $jogador): ?>
    <tr>
        <td><?php echo $jogador['Jogadore']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $jogador['Jogadore']['nome'],
                    array('action' => 'view', $jogador['Jogadore']['id'])
                );
            ?>
        </td>
        <td><?php echo $jogador['Jogadore']['codigo_cupom']; ?></td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $jogador['Jogadore']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $jogador['Jogadore']['id'])
                );
            ?>
        </td>
        
    </tr>
    <?php endforeach; ?>

</table>
<?php //echo $this->Paginator->numbers(); ?>    
             <?php ///echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
    <?php //echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
    <?php //echo $this->Paginator->counter(); ?>