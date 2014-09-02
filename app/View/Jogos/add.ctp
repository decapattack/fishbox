<!-- app/View/Jogos/add.ctp -->
<?php echo $this->Form->create('Jogo'); ?>
    
        <legend>Cadastro de Jogo</legend>
        
        <label>Nome</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>URI</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('uri',array(
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
        
        
    
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
