<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username',array(
            "class"=>"input-control text span4"
        ));
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php /*echo $this->Form->end(__('Login'),array("class"=>"inverse")); */
    echo $this->Form->submit(
    'Send', 
    array('class' => 'inverse'));
?>
</div>