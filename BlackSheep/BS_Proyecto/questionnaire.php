<!DOCTYPE html>
<html>
  <head>
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
    include('conexion.php');
    $id_=$_GET["v"];
    $sql="select * from blacktable where Id=".$id_;
    $result=mysqli_query($connect,$sql);
    $fila=mysqli_fetch_assoc($result);
  ?>
  <div id="container">
    <div class="header">
      <a href="http://blacksheep.citaland.com"><img id="logo" src="./images/logo.png" alt="Logo"></a>
      <h3>¿Cuál es verdad acerca de mi? 🐑🤔</h3>
    </div>
  </div>
  <input type="hidden" value="<?php echo $fila["R1"];?>" id="r1"/>
  <input type="hidden" value="<?php echo $fila["R2"];?>" id="r2"/>
  <input type="hidden" value="<?php echo $fila["R3"];?>" id="r3"/>
  <input type="hidden" value="<?php echo $fila["R4"];?>" id="r4"/>
  <input type="hidden" value="<?php echo $fila["Mentiras"];?>" id="mt"/>
  <input type="hidden" value="<?php echo $fila["Personas"];?>" id="Personas"/>
  <input type="hidden" value="<?php echo $fila["Pr1"];?>" id="Pr1"/>
  <input type="hidden" value="<?php echo $fila["Pr2"];?>" id="Pr2"/>
  <input type="hidden" value="<?php echo $fila["Pr3"];?>" id="Pr3"/>
  <input type="hidden" value="<?php echo $fila["Pr4"];?>" id="Pr4"/>
  <div id="Opciones">
    <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-bottom:4px;white-space: normal;" id="o1" onclick="mostrarResultados(1)">
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-bottom:4px;white-space: normal;" id="o2" onclick="mostrarResultados(2)">
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-bottom:4px;white-space: normal;" id="o3" onclick="mostrarResultados(3)">
    </button>
  </div>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./scriptQuest.js">

    </script>

    <h1 id="return"> <a class="aTag"href="http://blacksheep.citaland.com">¡Crea tu propia pregunta con BlackSheep dando click aquí! 🐑 </a></h1>
    <p id="creators" class="text-muted">Programada con <span>♥</span> por <a target="_blank" class="mail">Emiliano, Omar & Genis.</a></p>

  </body


</html>
