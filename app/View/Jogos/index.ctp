<!-- File: /app/View/Jogos/index.ctp -->
<?php echo $this->Session->flash(); ?>
<legend>Consultar Jogos</legend>
<p><?php echo $this->Html->link('Adicionar Jogo', array('action' => 'add'),array('class'=>'button')); ?></p>
<table class="table striped bordered">
    <tr>
        
        <th>Nome</th>
        <th>URI</th>
        <th>Ações</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($jogos as $jogo): ?>
    <tr>
        
        <td>
            <?php echo $jogo['Jogo']['nome']; ?>
        </td>
        <td>
            <?php echo $jogo['Jogo']['uri']; ?>
        </td>
        <td style="text-align: center">
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $jogo['Jogo']['id']),
                    array('class'=>'button')
                );
            ?>
            <?php
                echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $jogo['Jogo']['id']),
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