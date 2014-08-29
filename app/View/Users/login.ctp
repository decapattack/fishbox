
<!--app/View/Users/login.ctp -->

<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <legend>Sistema Administrativo</legend>
        
        <div class="input-control text span2" data-role="input-control">
        <?php echo $this->Form->input('username',array(
            "label"=> false,
            'div' => null,
            'placeholder'=>'Login'
        ));?>
        </div>
        
        <div class="input-control password span2" data-role="input-control">
        <?php echo $this->Form->input('password',array(
            "label"=> false,
            'div' => null,
            'placeholder'=>'Senha'
        ));?>
        </div>
        
        <div style="margin-top: 20px">
<?php /*echo $this->Form->end(__('Login'));*/
echo $this->Form->submit(
    'Acessar');?>
        </div>
</div>


