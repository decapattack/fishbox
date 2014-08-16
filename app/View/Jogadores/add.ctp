<!-- app/View/Jogadores/add.ctp -->

<?php echo $this->Form->create('Jogador'); ?>

<legend>Cadastro de Jogador</legend>
    </label>Nome</label>
    <div class="input-control text span4" data-role="input-control">
    <?php
    echo $this->Form->input('nome', array(
        "label"=> false,
        'div' => null
    ));
    ?>
    </div>
    </label>Nome</label>
    <div class="input-control text span4" data-role="input-control">
    <?php
    echo $this->Form->input('codigo_cupom', array(
        "label"=> false,
        'div' => null
    ));
    ?>
</div>

<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
