<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../login.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link rel="stylesheet" href="../css/styles.css" >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	<body class ="loggedin" background= "https://thetainimtoday.com/wp-content/uploads/2020/03/VALORANT-AGENTE-2.png"> 
  
      <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="../index.php">Valorant</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../agentes.php">Agentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../mapas.php">Mapas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../armas.php">Armas</a>
          </li>
          <?php if (isset($_SESSION['loggedin'])) {?>
            <li calss="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php } else{ ?>
            <li calss="nav-item">
              <a class="nav-link" href="login.php">login</a>
            </li>
          <?php } ?>
          
        </ul>
      </nav>

	
		<div class="content">
			<h2 style="text-align:center; font-size:40px;">Profile Page</h2>
			<div>
				<p>Estos son los detalles de tu perfil:</p>
				<table>
					<tr>
						<td style="color: #f74242;">Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td style="color: #f74242;">Password:</td>
						<td><?=$password?></td> <!--codificada en MD5-->
					</tr>
					<tr>
						<td style="color: #f74242;">Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>