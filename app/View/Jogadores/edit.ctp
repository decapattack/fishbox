<!-- app/View/Jogadores/edit.ctp -->

<?php echo $this->Form->create('Jogadore'); ?>

<legend>Editar Jogador</legend>
        
        <label>Nome</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null,
            "value"=> h($jogadore['Jogadore']['nome'])
        ));?>
        </div>
        
        <label>Código do Cupom</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('codigo_cupom',array(
             "label"=> false,
            'div' => null,
            "value"=> h($jogadore['Jogadore']['codigo_cupom'])
        ));?>
        </div>
        <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
        
        
    
<p> <?php echo $this->Form->end('Gravar'); ?></p>

