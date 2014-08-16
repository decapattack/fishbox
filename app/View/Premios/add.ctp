<!-- app/View/Premios/add.ctp -->

<?php echo $this->Form->create('Premio'); ?>
    
        <legend>Cadastro de Prêmio</legend>
        <div class="input-control text">
        <?php echo $this->Form->input('nome',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Nome"
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('descricao',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Descrição"
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('local_retirada',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Local de Retirada"
        ));?>
        </div>
    
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
