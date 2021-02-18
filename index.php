<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Valorant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body background= "https://thetainimtoday.com/wp-content/uploads/2020/03/VALORANT-AGENTE-2.png"> 
  
      <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="index.php">Valorant</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="agentes.php">Agentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mapas.php">Mapas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="armas.php">Armas</a>
          </li>
          <?php if (isset($_SESSION['loggedin'])) {?>
            <li calss="nav-item">
              <a class="nav-link" href="php/profile.php">Profile</a>
            </li>
          <?php } else{ ?>
            <li calss="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          <?php } ?>
          
        </ul>
      </nav>
      
        <div class="titulo">
            <h1 class = "display-1 ">¿Qué es Valorant?</h1>
            <br>
            <p>Valorant es un juego online creado por la compañia Riot Games
            <br>que consiste en el enfrentamiento táctico entre 10 jugadores<br>
            divididos en dos equipos.</p>
        </div>
        </div>
        <div class= "container text-center">
            <div class = "row">
            <div class="caja_texto  col-md-3 "><h5>Agentes</h5>
                <img class="product img-fluid" src="images/agentes.jpg"  alt="agentes" >
                <p>La diversidad de agentes y sus diferentes estilos de juego te permitira seleccionar la forma de jugar que más desees.</p>
                <p>Para más información.<p>
                  <a href="agentes.php" class="btn btn-primary">Pulse aquí</a>
            </div>
            <div class="caja_texto  col-md-3"><h5>Mapas</h5>
                <img class="product img-fluid"  src="images/mapas.jpg"  alt="mapas">
                <p>A parte de los diferentes personajes, contamos con varios mapas a su disposición</p>
                <p>Para más información.</p>
                <a href="mapas.php" class="btn btn-primary">Pulse aquí</a>
            </div>
            <div class="caja_texto  col-md-3"><h5>Armas</h5>
                <img class="product img-fluid"  src="images/armas.jpg"  alt="armas">
                <p>Muchas armas a tu disposición, cada una con sus diferentes manejos.</p>
                <p>Para más información.</p>
                <a href="armas.php" class="btn btn-primary">Pulse aquí</a>
            </div>
            <div class="caja_texto  col-md-3"><h5>Suscripción</h5>
              <img class="product img-fluid"  src="images/info.jpg"  alt="info">
              <p>Si desea recibir algo más de información, puede pulsar en el siguiente botón para solicitarla.</p>
              <a href="login.php" class="btn btn-primary">Pulse aquí</a>
          </div>
        </div>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
