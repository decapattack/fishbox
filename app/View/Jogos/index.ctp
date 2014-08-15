<!-- File: /app/View/Jogos/index.ctp -->

<legend>Usuários</legend>
<p><?php echo $this->Html->link('Add Jogo', array('action' => 'add')); ?></p>
<table class="table striped bordered">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>URI</th>
        <th>Editar</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($jogos as $jogo): ?>
    <tr>
        <td><?php echo $jogo['Jogo']['id']; ?></td>
        <td>
            <?php $jogo['Jogo']['nome']; ?>
        </td>
        <td>
            <?php $jogo['Jogo']['uri']; ?>
        </td>
        <td><button>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'view', $user['User']['id'])
                );
            ?>
            </button>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php echo $this->Paginator->numbers(); ?>    
             <?php echo $this->Paginator->prev('<- Previous', null, null, array('class' => 'disabled')); ?>
    <?php echo $this->Paginator->next('Next ->', null, null, array('class' => 'disabled')); ?>    
    <?php echo $this->Paginator->counter(); ?>