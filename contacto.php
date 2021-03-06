<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" 
          content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Agencia Yerro: contacto</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles2.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46725725-1', 'agenciayerro.com');
  ga('send', 'pageview');

</script>
</head>
<body>
    <header>
        <div id="nota">
            <figure>
                <a href="http://www.agenciayerro.com"><img src="img/Logo.png" /></a>
            </figure>
            <nav>
                <ul>
                    <!--<li><a id="blog" href="http://edicionportallas.wordpress.com">Blog</a></li>-->
                    <li><a id="content" href="contacto.php">Contacto</a></li>
                    <li><a id="infografia" href="infografias.html">Infografías</a></li>
                </ul>
            </nav>
        </div>
        <div class="titulo">
            <h1>arquitectura del contenido</p>
            <h3>Edición de mesa de calidad para digital y papel</p>
        </div>
        <div id="social">
                <a id="twitter" href="https://twitter.com/a_yerro" target="_blank"></a>
                <a id="facebook" href="https://www.facebook.com/AgenciaYerro" target="_blank"></a>
                <a id="googleplus" href="https://plus.google.com/+AgenciayerroEd" target="_blank"></a>
                <a id="linkedin" href="http://www.linkedin.com/company/agencia-yerro" target="_blank"></a>
        </div>
    </header>
    <div class='correo'>
        <p>
            Puedes enviarnos un correo a <a href='mailto:info@agenciayerro.com'>info@agenciayerro.com</a> 
            o bien rellenar el formulario de contacto.
        </p>
    </div>
    <form action="validar.php" method="post" class="contacto">
        <fieldset>
            <div class="campos">
                <label for="nombre">Nombre</label>
                <input 
                    type="text" 
                    class="nombre" 
                    name="nombre" 
                    required 
                    placeholder="Tu nombre" />
            </div>
            <div class="campos">
                <label for="email">E-mail</label>
                <input 
                    type="email" 
                    class="email" 
                    name="email" 
                    required 
                    placeholder="tucorreo@gmail.com" />
            </div>
            <div class="campos">
                <label for="mensaje">Mensaje</label>
                <textarea 
                    cols="30" rows="5" 
                    class="mensaje" 
                    name="mensaje" 
                    required>
                </textarea>
            </div>
                <script type="text/javascript">
                    var RecaptchaOptions = {
                    theme : 'clean',
                    };
                </script> 
            <?php
                    require_once('recaptchalib.php');
                    $pubkey = "6Ld8EOsSAAAAAO1uT5eKe_2xNgV8FuKq737E77xj";
                    echo recaptcha_get_html($pubkey);
            ?>           
            <input type="submit" value="enviar mensaje" class="boton_envio" />
        </fieldset>
    </form>
    <footer>
        <div class="social-foot">
                <a id="twitter" href="https://twitter.com/a_yerro" target="_blank"></a>
                <a id="facebook" href="https://www.facebook.com/AgenciaYerro" target="_blank"></a>
                <a id="googleplus" href="https://plus.google.com/+AgenciayerroEd" target="_blank"></a>
                <a id="linkedin" href="http://www.linkedin.com/company/agencia-yerro" target="_blank"></a>
        </div>
        <div class="credito"><p>© Agencia Yerro</p></div>
    </footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>