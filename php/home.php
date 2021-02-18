<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<!--<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="login2.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Valorant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body background= "https://thetainimtoday.com/wp-content/uploads/2020/03/VALORANT-AGENTE-2.png"> 
  
      <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="../index.php">Valorant</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../agentes.html">Agentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../mapas.html">Mapas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../armas.html">Armas</a>
          </li>
          <li calss="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
		  </li>
		  <li calss="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
		  </li>
		  
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
                  <a href="agentes.html" class="btn btn-primary">Pulse aquí</a>
            </div>
            <div class="caja_texto  col-md-3"><h5>Mapas</h5>
                <img class="product img-fluid"  src="images/mapas.jpg"  alt="mapas">
                <p>A parte de los diferentes personajes, contamos con varios mapas a su disposición</p>
                <p>Para más información.</p>
                <a href="mapas.html" class="btn btn-primary">Pulse aquí</a>
            </div>
            <div class="caja_texto  col-md-3"><h5>Armas</h5>
                <img class="product img-fluid"  src="images/armas.jpg"  alt="armas">
                <p>Muchas armas a tu disposición, cada una con sus diferentes manejos.</p>
                <p>Para más información.</p>
                <a href="armas.html" class="btn btn-primary">Pulse aquí</a>
            </div>
            <div class="caja_texto  col-md-3"><h5>Información</h5>
              <img class="product img-fluid"  src="images/info.jpg"  alt="info">
              <p>Si desea recibir algo más de información, puede pulsar en el siguiente botóm para solicitarla.</p>
              <a href="info.html" class="btn btn-primary">Pulse aquí</a>
          </div>
        </div>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>