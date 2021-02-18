<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="css/register.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	<body background="https://thetainimtoday.com/wp-content/uploads/2020/03/VALORANT-AGENTE-2.png">
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
		<div class="register">
			<h1>Register</h1>
			<form action="register.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				<input type="submit" value="Register">
			</form>
		</div>
		<div class="regerror">
			<a>
						<?php
			// Change this to your connection info.
			$DATABASE_HOST = 'localhost';
			$DATABASE_USER = 'root';
			$DATABASE_PASS = '';
			$DATABASE_NAME = 'phplogin';
			// Try and connect using the info above.
			$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
			if (mysqli_connect_errno()) {
				// If there is an error with the connection, stop the script and display the error.
				exit('Failed to connect to MySQL: ' . mysqli_connect_error());
			}
			// Now we check if the data was submitted, isset() function will check if the data exists.
			if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
				// Could not get the data that should have been sent.
				exit('');
			}
			// Make sure the submitted registration values are not empty.
			if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
				// One or more values are empty.
				exit('Please complete the registration form');
			}
			// We need to check if the account with that username exists.
			if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
				// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					exit('Email is not valid!');
				}
				if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
					exit('Username is not valid!');
				}
				if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
					exit('Password must be between 5 and 20 characters long!');
				}
				
				
				$stmt->bind_param('s', $_POST['username']);
				$stmt->execute();
				$stmt->store_result();
				// Store the result so we can check if the account exists in the database.
				if ($stmt->num_rows > 0) {
					// Username already exists
					echo 'Username exists, please choose another!';
				} else {
					// Username doesnt exists, insert new account
			if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
				// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
				$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
				$stmt->execute();
				echo 'You have successfully registered, you can now login!';
				header('Location: login.php');
				exit;
			} else {
				// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
				echo 'Could not prepare statement!';
			}
				}
				$stmt->close();
			} else {
				// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
				echo 'Could not prepare statement!';
			}
			$con->close();
			?>
			</a>
</div>
	</body>
</html>



