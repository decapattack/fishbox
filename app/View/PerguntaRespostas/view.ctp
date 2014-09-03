<!-- File: /app/View/PerguntaRespostas/view.ctp -->



<legend>Visualização de Perguntas</legend>
        
        <label>Pergunta</label>
        <div class="input-control text span4" data-role="input-control">
        <?php echo $this->Form->input('nome',array(
            "label"=> false,
            'div' => null,
            "value"=> h($perguntaResposta['PerguntaResposta']['nome'])
        ));?>
        </div>
        
        <label>Selecione a Categoria da Pergunta</label>
        <div class="input-control select span4" data-role="input-control">
        <?php echo $this->Form->input('PerguntaResposta.categoria_perguntas_id', array(
            'options' => $categoriaPerguntas,
            'empty' => '(Escolha uma)',
            "label"=> false,
            'div' => null,
            "selected"=> h($perguntaResposta['PerguntaResposta']['categoria_perguntas_id'])
        ));?>
        </div>
        
        <?php
            $i = 0;
            $checked = "";
            foreach ($respostas as $resposta):
                print('<div class="grid">');
                print('<div class="row">');
                print('<label>Resposta'.$i.'</label>');
                print('<div class="input-control text span4" data-role="input-control">');
                echo $this->Form->input('Resposta.'.($i+1).'.resposta',array(
                            "label"=> false,
                            'div' => null,
                            'type'=>'text',
                            "value"=> $resposta['Resposta']['resposta']
                ));
                print('</div>');
                print('<div class="input-control checkbox" style="margin-left: 10px;">');
                print('<label>');
                if(h($resposta['Resposta']['correta'])==1){
                    $checked = "checked";
                }else{
                    $checked = "";
                }
                echo $this->Form->checkbox('Resposta.'.($i+1).'.correta', array(
                    'hiddenField' => false,
                    'checked'=>$checked
                    ));
                print('<span class="check"></span>');
                print('Correta');
                print('</label></div></div></div>');
                $i++;
            endforeach;
        ?>
        <?php echo $this->Form->input('id', array(
        'type' => 'hidden',
        'value'=>h($perguntaResposta['PerguntaResposta']['id'])
        
        )); ?>
<button>
<?php
    echo $this->Html->link(
        'Voltar', array('action' => 'index')
    );
?>
</button>


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