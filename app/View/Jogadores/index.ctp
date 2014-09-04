<!-- File: /app/View/Jogadpores/index.ctp -->
<?php echo $this->Session->flash(); ?>
<legend>Consultar Jogadores</legend>
<p><?php
echo $this->Html->link('Adicionar Jogador',array('action'=>'add'),array('class'=>'button'));
?></p>
<table class="table striped bordered">
    <tr>
        <th>Nome</th>
        <th>Pontuação</th>
        <th>Excluir</th>
    </tr>

<!-- Here's where we loop through our $premioss array, printing out post info -->

    <?php foreach ($jogadores as $jogador): ?>
    <tr>
        
        <td><?php echo $jogador['Jogadore']['nome']; ?></td>
        <td>600</td>
        <td style="text-align: center">
            
                <?php
                echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $jogador['Jogadore']['id']),
                    array('confirm' => 'Tem certeza?', 'class'=>'button ')
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