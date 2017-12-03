<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Black Sheep</title>
    <link rel="stylesheet" href="./stylesheets/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
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
    <div id="header">
      <img id="logo" src="./images/logo.png" alt="Logo">
      <h3>Share it on Snapchat or any of your other social media accounts.</h3>
    </div>
  </div>

  <button id="Crear" type="button" class="btn btn-primary btn-lg btn-block rounded" onclick="copyToClipboard()">GET LINK</button>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./script.js">

    </script>

    <p id="creators" class="text-muted">Coded with <span>♥</span> by <a target="_blank" class="mail">Emiliano, Omar & Genis.</a></p>

  </body


</html>
