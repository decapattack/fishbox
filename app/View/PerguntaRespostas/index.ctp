<!-- File: /app/View/PerguntaRespostas/index.ctp -->
<?php echo $this->Session->flash(); ?>
<legend>Consultar Perguntas</legend>
<p><?php echo $this->Html->link('Adicionar Perguntas e Respostas', array('action' => 'add'),array('class'=>'button')); ?></p>


<div class="row">
    <?php echo $this->Form->create('PerguntaResposta', array('type' => 'GET', 'url' => array('action' => 'search'))); ?>
    <label>Buscar por Pergunta</label>
        <div class="input-control text span4" data-role="input-control">
            <?php echo $this->Form->input('PerguntaResposta.nome',array(
                 "label"=> false,
                'div' => null
            ));?>
    </div>

    <div style="float:left; margin-left: 10px; margin-top: -25px;">
    <label>Categoria</label>
    <div class="input-control select span2" data-role="input-control">
    <?php echo $this->Form->input('PerguntaResposta.categoria_perguntas_id', array(
        'options' => $categoriaPerguntas,
        'empty' => '(Escolha uma)',
        "label"=> false,
        'div' => null,
        'style'=>'height:34px'
    ));?>
    </div>
    <div class="span2">
    <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn', 'style'=>'margin-left:-10px; height:34px;'));
    echo $this->Form->end();?>
        </div>
</div>

</div>

<table class="table striped bordered">
    <tr>
        <th  style="width:700px">Pergunta</th>
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
                echo $this->Html->link(
                    'Ver', array('action' => 'view', $pergunta['PerguntaResposta']['id']),
                    array('class'=>'button')
                );
            ?>
            
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $pergunta['PerguntaResposta']['id']),
                    array('class'=>'button')
                );
            ?>
            
            <?php
                echo $this->Form->postLink(
                    'Deletar',
                    array('action' => 'delete', $pergunta['PerguntaResposta']['id']),
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