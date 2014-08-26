<html>
    <head>
        <style type="text/css">
            .source-image {
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                z-index:-10;
            }
            .caixa-login{
                width:300px;
                height:300px;
                z-index: 10;
                position:absolute;
            }
            .sombra{
                -webkit-box-shadow: 0px 0px 10px 0px #333333;
                box-shadow: 0px 0px 10px 0px #333333;
                border-radius: 5px;
            }
            .gradiente{
                background: rgba(242,246,248,1);
                background: -moz-linear-gradient(top, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 50%, rgba(181,198,208,1) 51%, rgba(224,239,249,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(242,246,248,1)), color-stop(50%, rgba(216,225,231,1)), color-stop(51%, rgba(181,198,208,1)), color-stop(100%, rgba(224,239,249,1)));
                background: -webkit-linear-gradient(top, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 50%, rgba(181,198,208,1) 51%, rgba(224,239,249,1) 100%);
                background: -o-linear-gradient(top, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 50%, rgba(181,198,208,1) 51%, rgba(224,239,249,1) 100%);
                background: -ms-linear-gradient(top, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 50%, rgba(181,198,208,1) 51%, rgba(224,239,249,1) 100%);
                background: linear-gradient(to bottom, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 50%, rgba(181,198,208,1) 51%, rgba(224,239,249,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f6f8', endColorstr='#e0eff9', GradientType=0 );
            }
            .sombra-texto{
                text-shadow: 1px -1px 0 #ffffff;
            }
            
        </style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
            
        </script>
    </head>
    <body id="page-body">
        
        <img src="/fishbox/img/fundo01.jpg" class="source-image">
        
        <div class="caixa-login sombra gradiente sombra-texto" id="caralho">
            <input type="text">
            <input type="text">
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                ajustaLayout();
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