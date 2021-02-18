<?php
require('db.php');
$con->set_charset('utf8');
session_start();?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Agentes de Valorant</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles1.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm ">
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
<!--
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="parallax-bg"><img src="images/Raze.png"data-swiper-parallax="-23%"></div>
              <div class="swiper-slide">
                <div class="title" data-swiper-parallax="-300">Slide 1</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="text" data-swiper-parallax="-100">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                    felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet
                    magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                    ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros
                    quis feugiat.</p>
                </div>
              </div>
            <div class="swiper-wrapper">
              <div class="parallax-bg"><img src="images/Jett.png" data-swiper-parallax="-23%"></div>
              <div class="swiper-slide">
                <div class="title" data-swiper-parallax="-300">Slide 1</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="text" data-swiper-parallax="-100">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                    felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet
                    magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                    ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros
                    quis feugiat.</p>
                </div>
              </div>
              <div class="swiper-wrapper">
                <div class="parallax-bg"><img src="images/Reyna.png" data-swiper-parallax="-23%"></div>
                <div class="swiper-slide">
                  <div class="title" data-swiper-parallax="-300">Slide 1</div>
                  <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                  <div class="text" data-swiper-parallax="-100">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                      felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet
                      magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                      ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros
                      quis feugiat.</p>
                  </div>
                </div>
                <div class="swiper-wrapper">
                  <div class="parallax-bg"><img src="images/Jett.png" data-swiper-parallax="-23%"></div>
                  <div class="swiper-slide">
                    <div class="title" data-swiper-parallax="-300">Slide 1</div>
                    <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                    <div class="text" data-swiper-parallax="-100">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                        felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet
                        magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                        ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros
                        quis feugiat.</p>
                    </div>
                  </div>
                  <div class="swiper-wrapper">
                    <div class="parallax-bg"><img src="images/Jett.png" data-swiper-parallax="-23%"></div>
                    <div class="swiper-slide">
                      <div class="title" data-swiper-parallax="-300">Slide 1</div>
                      <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                      <div class="text" data-swiper-parallax="-100">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                          felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet
                          magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                          ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros
                          quis feugiat.</p>
                      </div>
                    </div>-->
           <!-- Swiper -->
       <div class="ImgBox">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Jett.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 1";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?>
</div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Raze.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 2";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Breach.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 3";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Omen.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 4";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Brimstone.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 5";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Phoenix.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 6";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Sage.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 7";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Sova.png"><div><?php 
////header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 8";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Viper.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 9";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Cypher.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 10";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Reyna.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 11";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Killjoy.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 12";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
              <div class="swiper-slide"><div class="contenido_swiper"><img src="images/Skye.png"><div><?php 
//header("Content-Type: text/html;charset=utf-8");
$consulta= "SELECT * FROM Agentes WHERE ID_AG = 13";
$ejecutar_consulta = mysqli_query($con,$consulta);

while($mostrar = mysqli_fetch_array($ejecutar_consulta)){
?>
<h2><?php echo $mostrar['N_AG'] ?></h2>
<p><?php echo $mostrar['C_AG'] ?></p>
<h5><?php echo $mostrar['H1'] ?></h5>
<p><?php echo $mostrar['C_H1'] ?></p>
<h5><?php echo $mostrar['H2'] ?></h5>
<p><?php echo $mostrar['C_H2'] ?></p>
<h5><?php echo $mostrar['H3'] ?></h5>
<p><?php echo $mostrar['C_H3'] ?></p>
<h5><?php echo $mostrar['H4'] ?></h5>
<p><?php echo $mostrar['C_H4'] ?></p>
<?php
} ?></div></div></div>
            </div>
        </div>
    </div> 
      
       <!-- <header>
            <h1>Agentes</h1>
            <p>Aquí conoceras a los diferentes agentes que rondan en el juego, con sus biografias y caracteristicas.</p>
        </header>--> 
        <!--<div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-pagination swiper-pagination-white"></div>-->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
      <!--<script>
    var swiper = new Swiper('.swiper-container', {
      speed: 600,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>-->
 <script>
        var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
          },
          pagination: {
            el: '.swiper-pagination',
          },
        });
      </script>
</body>
</html>