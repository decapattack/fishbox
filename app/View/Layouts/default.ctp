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
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
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
</head>
<?php echo $this->Session->flash(); ?>
<body class="metro">
    <nav class="navigation-bar ">
        <nav class="navigation-bar-content">
            <div class="element">
                <font style="font-size: 16px; font-weight: bold">Sistema Administrativo Big-Black</font>
            </div>
            <div class="element place-right">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-cog"></span>
                </a>
                <ul class="dropdown-menu place-right" data-role="dropdown">
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Buy Now</a></li>
                </ul>
            </div>
            <span class="element-divider place-right"></span>
            <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>
            <span class="element-divider place-right"></span>
            <button class="element image-button image-left place-right">
                Hermann Cavalcante
                <img src="/fishbox/template/img/eu.png"/>
            </button>
        </nav>
    </nav>
    
    
    
    <div id="corpo" class="grid">
        <div class="span4" style="float:left" id="menuLateral">
            <nav class="sidebar light sombraBorda">
                <ul>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#" >Usuários</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="">Cadastro</a></li>
                            <li><a href="">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Grupos</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="">Cadastro</a></li>
                            <li><a href="">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Jogos</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="">Cadastro</a></li>
                            <li><a href="">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Jogador</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="">Cadastro</a></li>
                            <li><a href="">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="stick">
                        <a class="dropdown-toggle" href="#">Prêmios</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="">Cadastro</a></li>
                            <li><a href="">Consulta</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        
        
        <div class="containerComBorda sombraBorda containerForm">
            <?php echo $this->fetch('content'); ?>
            <?php /*echo $this->element('sql_dump');*/ ?>
        </div>
</div>
</body>
</html>
