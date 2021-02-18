<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles1.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    </head>
    <body>
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
        <h1>Contactanos</h1>
        <form id="basic-form" action="" method="post">
            <p>
              <label for="name">Nombre <span>(obligatorio)</span></label>
              <input id="name" name="name">
            </p>
            <p>
                <label for="apellido">Apellido<span>(obligatorio)</span></label>
                <input id="apellido" name="apellido">
              </p>
            <p>
              <label for="email">E-Mail <span>(obligatorio)</span></label>
              <input id="email" name="email">
            </p>
          <p>
            <label for="comenta">Comentario<span>(debe poner al menos 10 caracteres)</span></label>
            <input id="comenta" name="comenta">
            </p>
            <p>
              <input class="submit" type="submit" value="Enviar">
            </p>
        </form>
       
          <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" crossorigin="anonymous"></script>
          <script src="js/validar.js"> </script>
          
        </body>
</html>