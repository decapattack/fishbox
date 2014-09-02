<!-- File: /app/View/Jogadpores/index.ctp -->
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
                    array('action' => 'delete', $jogador['Jogador']['id']),
                    array('confirm' => 'Tem certeza?', 'class'=>'button')
                );
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>