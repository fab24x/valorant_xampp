<?php
require('db.php');
$con->set_charset('utf8');
session_start();?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Valorant</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/armas.css">
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



        <div class="container"></div>
        <div class="row">
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt25bf56ede3e3c57c/5eb281c42278aa3e8d0ba7fa/classic.png" class="card-img" alt="Classic" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 1";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
            
            
                <div class="col">
                    <div class="card"><img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt55951cb43513b87d/5eb7c2209c5d3e37e05f27b6/stinger.png" class="card-img" alt="Stringer" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 2";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
            
                
                <div class="col">
                    <div class="card"> <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltd4a396bf5a06e6b4/5eb281c4edfeb076e2050387/bulldog.png" class="card-img" alt="Bulldog" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 3";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?></div>
                </div></div>
            
                    
                <div class="col">
                    <div class="card"><img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt545be89167b88e87/5eb281c4c7007e13a0530dd7/marshal.png" class="card-img" alt="Marshall" width="auto" height="auto">
                
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 4";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        </div>
        <div class="row">
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7b13117b3a4912a7/5eb281ca5e05b51483afd6bc/shorty.png" class="card-img" alt="Shorty" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_AR = 5";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8a6f9eb97f755412/5eb281cae11e6a13a6f613ed/spectre.png" class="card-img" alt="Spectre" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 6";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
            
                
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltd78ee0533f30e0a8/5eb281c4402b8b4d13a566dc/guardian.png" class="card-img" alt="Guardian" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 7";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
            
                
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3e6bf41bd01ca11e/5eb281ca24400043b65016ba/operator.png" class="card-img" alt="Operator" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 8";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        </div>

        <div class="row">
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt97e5c377459c2f3b/5eb281c43b09c042ddca13a1/frenzy.png" class="card-img" alt="Frenzy" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 9";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt2cd5308e8bdfcc8c/5eb281c334a9963e8f9599de/bucky.png" class="card-img" alt="Bucky" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 10";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div></div>
                </div>
            
                
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt04ac3b5158b8466a/5eb281caa44a154c3ef84a82/phantom.png" class="card-img" alt="Phanthom" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 11";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div></div>
                </div>
            
                
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt371bee690082f494/5eb281c3e11e6a13a6f613e9/ares.png" class="card-img" alt="Ares" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 12";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        </div>

        <div class="row">
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc4788d390015fb7c/5eb281c4105ab84c3815e164/ghost.png" class="card-img" alt="Ghost" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 13";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt82404f7b88f8c612/5eb281c45050514d1a507146/judge.png" class="card-img" alt="Judge" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 14";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
            
                
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt323df4a0d8210605/5eb281cb3b09c042ddca13a5/vandal.png" class="card-img" alt="Vandal" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 15";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
            
                
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt0884ed7405d3646c/5eb281c38f7a7c3f6ec725e1/odin.png" class="card-img" alt="Odin" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 16";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        </div>
        <div class="row">
            
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3bbed29a5475c7d4/5eb281ca2278aa3e8d0ba7fe/sheriff.png" class="card-img" alt="Sheriff" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 17";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        
            
                <div class="col">
                </div>
            
                
                <div class="col">
                </div>
            
                
                <div class="col"><div class="card">
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt133c8372261f21a9/5eb281cbedfeb076e205038b/tactical-knife.png" class="card-img" alt="Knife" width="auto" height="auto">
                    <div class="overlay"><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Armas WHERE ID_Ar = 18";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
                        <div class="text-white text-align-top text-align-center"><?php echo $mostrar['N_AR'] ?></div>
                        <div class="text-white text-top-left"><?php echo $mostrar['Precio'] ?></div>
                        <div class="text-white"><?php echo $mostrar['C_AR'] ?></div><?php
} ?>
                    </div>
                </div></div>
        </div>




    </body>
</html>