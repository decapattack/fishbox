<html>
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <link rel="stylesheet" href="<c:url value='/template/css/metro-bootstrap.css'/>">
        
        <link rel="stylesheet" href="<c:url value='/template/css/iconFont.min.css'/>">
        <link rel="stylesheet" type="text/css" href="<c:url value='/template/css/fishbox.css'/>" media="screen"/>
        <script type="text/javascript" src="<c:url value='/template/js/jQuery.js'/>"></script>
        <script type="text/javascript" src="<c:url value='/template/js/jquery.widget.js'/>"></script>
        <script type="text/javascript" src="<c:url value='/template/js/metro.min.js'/>"></script>
        <script type="text/javascript" src="<c:url value='/template/js/estilos.js'/>"></script>
        <script type="text/javascript" src="<c:url value='/template/js/metroLoader.js'/>"></script>
        <script type="text/javascript">
            jQuery(window).load(function() {
                tamanhoLayout.TamanhoContainerForm();
            });
        </script>
    </head>
    <body class="metro">
        
        <tags:menu></tags:menu>
            <div id="corpo" class="grid">
                <div class="span4" style="float:left" id="menuLateral">
                <tags:menuLateral></tags:menuLateral>
                </div>

            ${body}
        </div>
        
    </body>
</html>