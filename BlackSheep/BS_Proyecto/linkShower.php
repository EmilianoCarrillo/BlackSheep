<!DOCTYPE html>
<html>
  <head>
    <script src="https://use.fontawesome.com/63f06bf5cf.js"></script>
    <meta charset="utf-8">
    <title>Black Sheep</title>
    <meta name="description" content="¿Me conoces bien? ¿Cuál de estos enunciados sobre mi es verdadereo? Te reto a votar por uno. ⚫️🐑😉">
    <link rel="stylesheet" href="./stylesheets/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="./logo.ico" />
  </head>
  <body>
    <div id="mobileOnly">
      <div class="header2">
        <div id="logo2">
          <a href="http://blacksheep.citaland.com"><img  src="./images/logo.png" alt="Logo"></a>
          <h1><br>Por favor, abre este sitio desde tu móvil.<br/>⚫️🐑😉📱</h1>
        </div>
      </div>
    </div>

    <?php
        $cad=$_GET["h"];
        $num=0;
        for($i=5;$i<strlen($cad);$i++)
        {
          $num*=10;
          $num+=(int)$cad[$i];
        }
     ?>
     <input type="text" id="linkOculto" value="<?php echo "http://blacksheep.citaland.com/questionnare.php?v=".$num ?>" name="linkOculto"/>
  <div id="container">
    <div class="header">
      <a href="http://blacksheep.citaland.com"><img id="logoSmall" src="./images/logo.png" alt="Logo"></a>
      <h3>Comparte el link en tus redes sociales. ¡Principalmente Snapchat! 👻</h3>
      <img src="./images/instructivo.gif" alt="Instructivo">
    </div>
  </div>

  <div id="socialButtons">

  </div>


  <button id="Crear" type="button" class="btn btn-primary btn-lg btn-block rounded" onclick="copyToClipboard()">👻 COPIAR LINK 📎</button>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./script.js"></script>
    <script type="text/javascript" src="./scriptLink.js"></script>

    <p id="creators" class="text-muted">Programada con <span>♥</span> por <a target="_blank" class="mail">Emiliano, Omar & Genis.</a></p>

  </body


</html>
