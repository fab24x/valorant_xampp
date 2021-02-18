<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Valorant</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!--<link rel="stylesheet" href="php/login2.css">-->
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

      

  <h2 style="text-align: center; font-size: 45px;">Login Form </h2>
  <!--
  <form action="/action_page.php" method="post" class="form-login">
    <div class="imgcontainer">
      <img src="images/avatar_killjoy.png" heigth=150 width= 150 alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
          
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

  </body>
  -->
  <div class="login">
    <form action="php/authenticate.php" method="post">
      <label for="username">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="username" placeholder="Username" id="username" required>
      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="Login">
    </form>
    <a class="registrate"  href="register.php"> Registrate aqui.</a>
  </div>
  
</body>