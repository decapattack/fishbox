<!-- File: /app/View/Users/view.ctp -->

<div class="users form">
<?php echo $this->Form->create('User',array('onsubmit'=>'return valida()')); ?>
    
        <legend>Edição de Usuário</legend>
        <label>Nome</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null,
            'value'=>h($user['User']['nome'])
        ));?>
        </div>
        
        <label>CPF</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('cpfCnpj',array(
             "label"=> false,
            'div' => null,
            'value'=>h($user['User']['cpfCnpj'])
        ));?>
        </div>
        
        <label>Email</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('email',array(
            "label"=> false,
            'div' => null,
            'value'=>h($user['User']['email'])
        ));?>
        </div>
        
        <label>Tipo de Usuário</label>
        <div class="input-control select span4" data-role="input-control">
        <?php echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'usuario' => 'Usuario'),
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Login</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('username',array(
            "label"=> false,
            'div' => null,
            'value'=>h($user['User']['username'])
        ));?>
        </div>
        
        <label>Senha</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('auxPassword',array(
            "label"=> false,
            'div' => null,
            'value'=>'',
            'placeholder'=>'Deixe em branco para não alterar',
            'type'=>'password'
        ));?>
        </div>
        
        <label>Confirme sua senha</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('confirmeSenha',array(
            "label"=> false,
            'div' => null,
            'placeholder'=>'Deixe em branco para não alterar',
            'type'=>'password'
        ));?>
        </div>
        
    <?php echo $this->Form->input('id', array(
        'type' => 'hidden',
        'value'=>h($user['User']['id'])
        
        )); ?>
<p> <?php echo $this->Form->end(__('Gravar')); ?></p>
</div>
<script type="text/javascript">
function valida(){
    var UserPassword = jQuery.trim(jQuery("#UserAuxPassword").val());
    var UserConfirmeSenha = jQuery.trim(jQuery("#UserConfirmeSenha").val());
    if(UserPassword != "" &&  UserConfirmeSenha != ""){
        if(UserPassword != UserConfirmeSenha){
            alert("Os campos Senha e Confirme Sua Senha devem ser iguais");
            return false;
        }
    }
    return true;
}
</script>