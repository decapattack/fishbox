<!-- File: /app/View/Jogadpores/index.ctp -->
<legend>Consultar Jogadores</legend>
<p><?php
echo $this->Html->link('Adicionar Jogador',array('action'=>'add'));
?></p>
<table class="table striped bordered">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Pontuação</th>
    </tr>

<!-- Here's where we loop through our $premioss array, printing out post info -->

    <?php foreach ($jogadores as $jogador): ?>
    <tr>
        <td><?php echo $jogador['Jogadore']['id']; ?></td>
        <td><?php echo $jogador['Jogadore']['nome']; ?></td>
        <td>600</td>
    </tr>
    <?php endforeach; ?>

</table>