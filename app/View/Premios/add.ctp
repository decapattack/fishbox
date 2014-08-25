<!-- app/View/Premios/add.ctp -->

<?php echo $this->Form->create('Premio'); ?>
    
        <legend>Cadastro de Prêmio</legend>
        
        <label>Nome</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Descrição</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('descricao',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Local de Retirada</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('localRetirada',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
    
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
