<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<html>
    <head>
        <?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
        echo $this->Html->css('metro-bootstrap');
        echo $this->Html->css('fishbox');
        echo $this->Html->css('iconFont.min');
        echo $this->Html->script('jQuery');
        echo $this->Html->script('jquery.widget');
        echo $this->Html->script('metro.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
        <style type="text/css">
            .source-image {
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                z-index:-10;
            }
            .caixa-login{
                z-index: 10;
                position:absolute;
                padding: 10px;
                background-image: url('/fishbox/img/caixa-login.png');
                width:300px;
                height:257px;
                text-align: center;
            }
            .sombra{
                -webkit-box-shadow: 0px 0px 10px 0px #333333;
                box-shadow: 0px 0px 10px 0px #333333;
                border-radius: 5px;
            }
            .gradiente{
                background: rgba(255,255,255,1);
background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(196,190,196,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(196,190,196,1)));
background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(196,190,196,1) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(196,190,196,1) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(196,190,196,1) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(196,190,196,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#c4bec4', GradientType=0 );

            }
            .sombra-texto{
                text-shadow: 1px -1px 0 #ffffff;
            }
            
            #page-body{
                background: #ffffff; /* Old browsers */
background: -moz-radial-gradient(center, ellipse cover,  #ffffff 0%, #5b5b5b 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#ffffff), color-stop(100%,#5b5b5b)); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  #ffffff 0%,#5b5b5b 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  #ffffff 0%,#5b5b5b 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  #ffffff 0%,#5b5b5b 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  #ffffff 0%,#5b5b5b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#5b5b5b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */


            }
            
            
            
        </style>
        
    </head>
    
    <body id="page-body" class="metro" style="display:none">
        
       
        
        <div class="caixa-login  sombra-texto" id="caralho">
            
            <?php echo $this->fetch('content'); ?>
            <?php echo $this->Session->flash(); ?>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                ajustaLayout();
                jQuery("#page-body").css("display","block");
            });
            $(window).resize(ajustaLayout);
            function ajustaLayout(){
                jQuery("#caralho").css({
                    left: ($(document).width() - $('#caralho').width())/2,
                    top: (($(document).height() - $('#caralho').height())/2)-50
                });
            }
        </script>
    </body>
</html>