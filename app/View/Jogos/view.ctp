<!-- File: /app/View/Jogos/view.ctp -->


<?php echo $this->Form->create('Jogo'); ?>
        <legend>Edição de Jogo</legend>
        <label>Nome</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null,
            'value'=> h($jogo['Jogo']['nome'])
        ));?>
        </div>
        <label>URI</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('uri',array(
            "label"=> false,
            'div' => null,
            'value'=> h($jogo['Jogo']['uri'])
        ));?>
        </div>
        <label>Descrição</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('descricao',array(
            "label"=> false,
            'div' => null,
            'value'=> h($jogo['Jogo']['descricao'])
        ));?>
        </div>
        
    <?php echo $this->Form->input('id', array(
        'type' => 'hidden',
        'value'=>h($jogo['Jogo']['id'])
        
        )); ?>
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
