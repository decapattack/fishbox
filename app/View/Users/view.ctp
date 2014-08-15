<!-- File: /app/View/Users/view.ctp -->

<div class="users form">
<?php echo $this->Form->create('Post'); ?>
    <fieldset>
        <legend>Edi��o de Usu�rio</legend>
        <div class="input-control text">
        <?php echo $this->Form->input('username',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Nome",
            "value"=> h($user['User']['username'])
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('email',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Email",
            "value"=> h($user['User']['email'])
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('username',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Login",
            "value"=> h($user['User']['username'])
        ));?>
        </div>
        <div class="input-control text">
        <?php echo $this->Form->input('password',array(
            'class'=> 'input-control text span4',
            'data-role' => 'input-control',
            "label"=> "Senha",
            "value"=> h($user['User']['password'])
        ));?>
        </div>
        
    </fieldset>
    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
</div>