<!-- app/View/Users/add.ctp -->

<?php echo $this->Form->create('User'); ?>
    
        <legend>Cadastro de Usuário</legend>
        <div class="input-control text">
        <?php echo $this->Form->input('nome',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Nome"
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('cpfCnpj',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "CPF - CNPJ"
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('email',array(
            'class'=> 'input-control email span4',
            'data-role' => 'input-control',
            "label"=> "Email"
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('username',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Login"
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('password',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Senha"
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('password',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Confirme sua senha"
        ));?>
        </div>
        
    
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
