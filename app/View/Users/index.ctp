<!-- File: /app/View/Posts/index.ctp -->

<legend>Consultar Usuários</legend>
<p><?php echo $this->Html->link('Adicionar Usuário', array('action' => 'add'),array('class'=>'button')); ?></p>
<table class="table striped bordered">
    <tr>
        <th>Nome</th>
        <th>Login</th>
        <th>Ações</th>
        <th>Criado Em</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?php
                echo $user['User']['nome'];
            ?>
        </td>
        <td>
            <?php
                echo $user['User']['username'];
            ?>
        </td>
        <td style="text-align: center">
            
            <?php
                echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?','class'=>'button')
                );
            ?>
            
            
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $user['User']['id']),
                    array('class'=>'button')
                );
            ?>
            
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php echo $this->Paginator->numbers(); ?>    
<?php echo $this->Paginator->prev('<- Anterior', null, null, array('class' => 'disabled')); ?>
&nbsp;&nbsp;::&nbsp;&nbsp;
<?php echo $this->Paginator->next('Próximo ->', null, null, array('class' => 'disabled')); ?>    
<?php echo $this->Paginator->counter(); ?>