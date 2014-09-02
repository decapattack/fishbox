<!-- app/View/PerguntasRespostas/add.ctp -->

<?php echo $this->Form->create('PerguntaResposta'); ?>
    
        <legend>Cadastro de Perguntas</legend>
        
        <label>Pergunta</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <label>Selecione a Categoria da Pergunta</label>
        <div class="input-control select span4" data-role="input-control">
        <?php echo $this->Form->input('PerguntaResposta.categoria_perguntas_id', array(
            'options' => $categoriaPerguntas,
            'empty' => '(Escolha uma)',
            "label"=> false,
            'div' => null
        ));?>
        </div>
        
        <div class="grid">
            <div class="row">
                <label>Resposta 1</label>
                <div class="input-control text span4" data-role="input-control">
                <?php echo $this->Form->input('Resposta.0.resposta',array(
                    "label"=> false,
                    'div' => null
                ));?>
                </div>
                <div class="input-control checkbox" style="margin-left: 10px;">
                    <label>
                        <?php echo $this->Form->checkbox('Resposta.0.correta', array('hiddenField' => false));?>
                        <span class="check"></span>
                        Correta
                    </label>
                </div>
            </div>
        </div>
        
        
        <div class="grid">
            <div class="row">
                <label>Resposta 2</label>
                <div class="input-control text span4" data-role="input-control">
                <?php echo $this->Form->input('Resposta.1.resposta',array(
                    "label"=> false,
                    'div' => null
                ));?>
                </div>
                <div class="input-control checkbox" style="margin-left: 10px;">
                    <label>
                        <?php echo $this->Form->checkbox('Resposta.1.correta', array('hiddenField' => false));?>
                        <span class="check"></span>
                        Correta
                    </label>
                </div>
            </div>
        </div>
        
        <div class="grid">
            <div class="row">
                <label>Resposta 3</label>
                <div class="input-control text span4" data-role="input-control">
                <?php echo $this->Form->input('Resposta.2.resposta',array(
                    "label"=> false,
                    'div' => null
                ));?>
                </div>
                <div class="input-control checkbox" style="margin-left: 10px;">
                    <label>
                        <?php echo $this->Form->checkbox('Resposta.2.correta', array('hiddenField' => false));?>
                        <span class="check"></span>
                        Correta
                    </label>
                </div>
            </div>
        </div>
        
        <div class="grid">
            <div class="row">
            <label>Resposta 4</label>
                <div class="input-control text span4" data-role="input-control">
                <?php echo $this->Form->input('Resposta.3.resposta',array(
                    "label"=> false,
                    'div' => null
                ));?>
                </div>
                <div class="input-control checkbox" style="margin-left: 10px;">
                    <label>
                        <?php echo $this->Form->checkbox('Resposta.3.correta', array('hiddenField' => false));?>
                        <span class="check"></span>
                        Correta
                    </label>
                </div>
            </div>
        </div>
<p> <?php echo $this->Form->end('Gravar'); ?></p>
<script type="text/javascript">
            function checkaUm(){
                if (jQuery(":checkbox:checked").length > 1) {
                    jQuery("input:checkbox").each(function(){
                        jQuery(this).attr("checked",false);
                        $.Dialog({
                            overlay: true,
                            shadow: true,
                            flat: true,
                            title: 'Alerta',
                            padding: 10,
                            content: '',
                            onShow: function(_dialog){
                                var content = _dialog.children('.content');
                                content.html('Selecione apenas uma resposta como correta');
                            }
                        });
                    });
                }
            }
            
            function eventoClick(){
                jQuery("input:checkbox").each(function(){
                    jQuery(this).on('click',function(){checkaUm();});
                });
            }
            
            jQuery(window).load(function(){
                eventoClick();
            });
        </script>
