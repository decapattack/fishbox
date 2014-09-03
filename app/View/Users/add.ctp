<!-- app/View/Users/add.ctp -->

<?php echo $this->Form->create('User', array('onsubmit'=> 'return valida()')); ?>
    
        <legend>Cadastro de Usuário</legend>
        
        <label>Nome</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>CPF</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('cpfCnpj',array(
             "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Email</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('email',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Login</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('username',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Senha</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('password',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Confirme sua senha</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('confirmeSenha',array(
            "label"=> false,
            'div' => null,
            'type'=>'password'
        ));?>
        </div>
        
    
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
<script>
    function valida(){
        var UserPassword = jQuery.trim(jQuery("#UserPassword").val());
        var UserConfirmeSenha = jQuery.trim(jQuery("#UserConfirmeSenha").val());
        if(UserPassword == ""){
            alert("Preencha o campo Senha");
            return false;
        }
        if(UserConfirmeSenha == ""){
            alert("Preencha o campo Confirme Sua Senha");
            return false;
        }
        if(UserPassword != UserConfirmeSenha){
            alert("Os campos Senha e Confirme Sua Senha devem ser iguais");
            return false;
        }
        return true;
    }
</script>