<!-- File: /app/View/Premios/view.ctp -->

<div class="users form">
<?php echo $this->Form->create('Premio'); ?>
    <fieldset>
        <legend>Edição de Prêmio</legend>
        <div class="input-control text">
        <?php echo $this->Form->input('nome',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Nome",
            "value"=> h($premio['Premio']['nome'])
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('descricao',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "descricao",
            "value"=> h($premio['Premio']['descricao'])
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('local_retirada',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Local d Retirada",
            "value"=> h($premio['Premio']['local_retirada'])
        ));?>
        </div>
    </fieldset>
    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
</div>