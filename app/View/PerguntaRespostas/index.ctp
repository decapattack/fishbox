<!-- File: /app/View/PerguntaRespostas/index.ctp -->

<legend>Consultar Perguntas</legend>
<p><?php echo $this->Html->link('Adicionar Perguntas e Respostas', array('action' => 'add'),array('class'=>'button')); ?></p>
<table class="table striped bordered">
    <tr>
        <th>Pergunta</th>
        <th>Ações</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($perguntas as $pergunta): ?>
    <tr>
        
        <td>
            <?php
                echo $pergunta['PerguntaResposta']['nome'];
            ?>
        </td>
        <td  style="text-align: center">
            
            <?php
                echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $pergunta['PerguntaResposta']['id']),
                    array('confirm' => 'Tem certeza?', 'class'=>'button')
                );
            ?>
            
            
            <?php
                echo $this->Html->link(
                    'Ver', array('action' => 'view', $pergunta['PerguntaResposta']['id']),
                    array('class'=>'button')
                );
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php //echo $this->Paginator->numbers(); ?>    
             <?php //echo $this->Paginator->prev('<- Previous', null, null, array('class' => 'disabled')); ?>
    <?php //echo $this->Paginator->next('Next ->', null, null, array('class' => 'disabled')); ?>    
    <?php //echo $this->Paginator->counter(); ?>