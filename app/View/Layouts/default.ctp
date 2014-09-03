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
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Sistema Administrativo Fishbox
	</title>
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
    <link href="favicon.ico" type="image/x-icon" rel="icon" /><link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
</head>

<body class="metro" id="corposite" style="display:none">
    <nav class="navigation-bar dark">
        <nav class="navigation-bar-content">
            <div class="element">
                <img src="/img/logo-fishbox-menu-topo.png" style="margin-top: -12px;"/>
            </div>
            <div class="element place-right">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-cog"></span>
                </a>
                <ul class="dropdown-menu place-right" data-role="dropdown">
                    <li><?php echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));?> </li>
                </ul>
            </div>
            <a class="element place-right" href="#"><?php
                $user = $this->Session->read('Auth.User');
                    if(!empty($user)) {
                        print ("Olá, ".$user['nome']);
                    }
            ?></a>
            <span class="element-divider place-right"></span>
            <button class="element image-button image-left place-right">
            </button>
        </nav>
    </nav>
    
    
    
    <div id="corpo" class="grid">
        <div class="span4" style="float:left" id="menuLateral">
            <nav class="sidebar dark sombraBorda">
                <ul>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#" >Usuários</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="/users/add">Cadastro</a></li>
                            <li><a href="/users/index">Consulta</a></li>
                        </ul>
                    </li>
                    <!--<li class="stick">
                        <a class="dropdown-toggle" href="#">Grupos</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="/fishbox/grupos/add">Cadastro</a></li>
                            <li><a href="/fishbox/grupos/index">Consulta</a></li>
                        </ul>
                    </li>-->
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Jogos</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="/jogos/add">Cadastro</a></li>
                            <li><a href="/jogos/index">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Jogador</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="/jogadores/add">Cadastro</a></li>
                            <li><a href="/jogadores/index">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Prêmios</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="/premios/add">Cadastro</a></li>
                            <li><a href="/premios/index">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Perguntas e Respostas</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="/perguntaRespostas/add">Cadastro</a></li>
                            <li><a href="/perguntaRespostas/index">Consulta</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        
        
        <div class="containerComBorda sombraBorda containerForm">
            <?php echo $this->fetch('content'); ?>
            <?php echo $this->Session->flash(); ?>
        </div>
</div>
<script type="text/javascript">
    jQuery(window).load(function(){
        jQuery("a,abbr,acronym,address,applet,area,article,aside,audio,b,base,basefont,bdi,bdo,bgsound,big,blink,blockquote,body,br,button,canvas,caption,center,cite,code,col,colgroup,content,data,datalist,dd,decorator,del,details,dfn,dialog,dir,div,dl,dt,element,em,embed,fieldset,figcaption,figure,font,footer,form,frame,frameset,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,i,iframe,img,input,ins,isindex,kbd,keygen,label,legend,li,link,listing,main,map,mark,marquee,menu,menuitem,meta,meter,nav,nobr,noframes,noscript,object,ol,optgroup,option,output,p,param,picture,plaintext,pre,progress,q,rp,rt,ruby,s,samp,script,section,select,shadow,small,source,spacer,span,strike,strong,style,sub,summary,sup,table,tbody,td,template,textarea,tfoot,th,thead,time,title,tr,track,tt,u,ul,var,video,wbr,xmp").css({
            'font-family':'Arial',
            'font-weight':'normal',
            'letter-spacing': '0.00em'
        });
        jQuery('label').css({
            'font-size':'12px'
        });
        
        jQuery('legend').css({
            'font-size':'16px'
        });
        
        jQuery('li').css({
            'font-size':'12px',
            'font-family':'Arial'
        });
        
        jQuery('.dropdown-toggle').css({
            'font-weight':'bold'
        });
        
        jQuery("td").css({
            'font-size':'12px'
        });
        
        jQuery("a").css({
            'font-size':'12px'
        });
        
        jQuery("#corposite").css({
            "display":"block",
            'background-image': "url('/img/bright_squares2.png')"
        });
        mensagemErro();
    });
    function mensagemFlash(){
                if(jQuery("#flashMessage").length > 0){
                    jQuery("#flashMessage").css({
                        'background-color':'#ffffff',
                        'border-radius':'5px',
                        'width':'200px',
                        'margin-left':'40px',
                        '-webkit-box-shadow':'2px 2px 5px 0px rgba(50, 50, 50, 0.75)',
                        '-moz-box-shadow': '2px 2px 5px 0px rgba(50, 50, 50, 0.75)',
                        'box-shadow': '2px 2px 5px 0px rgba(50, 50, 50, 0.75)',
                        'background': 'linear-gradient(to bottom, rgba(242,246,248,1) 0%, rgba(135,137,138,1) 100%)'
                    });
                }
            }
    function mensagemErro(){
        if(jQuery('.error-message').length > 0){
            jQuery('.error-message').css({
                'background-color':'red',
                'color':'#ffffff',
                'font-size':'10px'
            });
        }
    }
</script>
</body>
</html>
