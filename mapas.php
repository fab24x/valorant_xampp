<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Mapas de VALORANT</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
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
      
       <header>
            <h1>Mapas</h1>
            <p>Conoce los mapas disponibles</p>
        </header>
        
    


        <!-- Carousel inicio -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4" ></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <!-- tarjeta con la informacion-->
                    <div class="card bg-white text-dark">
                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltde02911a015d7ef9/5f80d2851f5f6d4173b4e49d/Icebox_transparentbg_for_Web.png" class="card-img" alt="Icebox" width="720" height="auto">
                        <div class="card-img-overlay">
                            <h5 class="card-title">ICEBOX</h5>
                            <!--<p class="card-text">Your next battleground is a secret Kingdom excavation site overtaken by the arctic.</p>
                            <p class="card-text"> The two plant sites protected by snow and metal require some horizontal finesse.</p>
                            <p class="card-text"> Take advantage of the ziplines and they’ll never see you coming</p>-->
                            <div>
                                <h2>Trailer del Mapa ICEBOX</h2>
                                
                                <img src="https://cdn.mobalytics.gg/assets/valorant/images/maps/levels/icebox_map.svg" class="topright" alt="Icebox Map" width="360" height="auto">
                                <iframe width="500" height="281" src="https://www.youtube.com/embed/EB4vFzY3MWc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>           
                            </div>
                        </div>
                        

                    </div>
                  <!-- FIN tarjeta con la informacion-->
                </div>

              <!-- segundo elemento carrusel-->
                <div class="carousel-item ">
                <!-- tarjeta con la informacion-->
                    <div class="card bg-white text-dark">
                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8538036a309525ae/5ebc470bfd85ad7411ce6b50/bind-featured.png" class="card-img" alt="Bind" width="720" height="auto">
                        <div class="card-img-overlay">
                            <h5 class="card-title">BIND</h5>
                            <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>-->
                            <div>
                                <h2>Trailer del Mapa BIND</h2>

                                <iframe width="500" height="281" src="https://www.youtube.com/embed/l7iLULZRTQs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img src="https://images.squarespace-cdn.com/content/v1/59af2189c534a58c97bd63b3/1594990774225-FRPDCJBG2N6I1LNOSZO1/ke17ZwdGBToddI8pDm48kKCGUaD5gOA0BMXX8B1yUPBZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpx0h4ZDtskpbINpqZ_zV59fNHCR2X0R5QMW4yd2mDFqMyQgjKwMhAFcUUTS5j1ppq4/Bind+map+callouts+Valorant.png?format=1500w" class="topright" alt="Bind Map" width="360" height="auto">
                                <!--https://static.wikia.nocookie.net/valorant/images/d/d0/Bind_mini-map.png/revision/latest?cb=20200408013124 -->
                                  
                            </div>
                        </div>
                      

                    </div>
                <!-- FIN tarjeta con la informacion-->
                </div>

                <!-- tercer elemento carrusel-->
                <div class="carousel-item ">
                    <!-- tarjeta con la informacion-->
                        <div class="card bg-white text-dark">
                            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta9b912e1a1b59aa4/5ebc471cfa550001f72bcb13/ascent-featured.png" class="card-img" alt="Bind" width="720" height="auto">
                            <div class="card-img-overlay">
                                <h5 class="card-title">ASCENT</h5>
                                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>-->
                                <div>
                                    <h2>Trailer del Mapa ASCENT</h2>
                                    <img src="https://images.squarespace-cdn.com/content/v1/59af2189c534a58c97bd63b3/1595082228780-SFGHRCET0KH29YTOY3PR/ke17ZwdGBToddI8pDm48kKCGUaD5gOA0BMXX8B1yUPBZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpx0h4ZDtskpbINpqZ_zV59fNHCR2X0R5QMW4yd2mDFqMyQgjKwMhAFcUUTS5j1ppq4/Ascent+map+callouts+Valorant.png?format=1500w" class="topright" alt="Bind Map" width="360" height="auto">
                                    <iframe width="500" height="281" src="https://www.youtube.com/embed/mXLw_4nrLI0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!--<iframe width="1080" height="720" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       -->         
                                </div>
                            </div>
                          
    
                        </div>
                    <!-- FIN tarjeta con la informacion-->
                </div>

                <!-- cuarto elemento carrusel-->
                <div class="carousel-item ">
                    <!-- tarjeta con la informacion-->
                        <div class="card bg-white text-dark">
                            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8afb5b8145f5e9b2/5ebc46f7b8c49976b71c0bc5/haven-featured.png" class="card-img" alt="Bind" width="720" height="auto">
                            <div class="card-img-overlay">
                                <h5 class="card-title">HAVEN</h5>
                                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>-->
                                <div>
                                    <h2>Trailer del Mapa HAVEN</h2>
                                    <img src="https://images.squarespace-cdn.com/content/v1/59af2189c534a58c97bd63b3/1594830109821-RJNN4Y36CGJV0PC11Z92/ke17ZwdGBToddI8pDm48kKCGUaD5gOA0BMXX8B1yUPBZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpx0h4ZDtskpbINpqZ_zV59fNHCR2X0R5QMW4yd2mDFqMyQgjKwMhAFcUUTS5j1ppq4/Haven+Map+Callouts+Valorant.png?format=1500w" class="topright" alt="Bind Map" width="360" height="auto">
                                    <!--https://static.wikia.nocookie.net/valorant/images/1/13/Haven_mini-map.png/revision/latest?cb=20200408013354-->
                                    <iframe width="500" height="281" src="https://www.youtube.com/embed/RWYZjUd3DZ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!--<iframe width="1080" height="720" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       -->         
                                </div>
                            </div>
                          
    
                        </div>
                    <!-- FIN tarjeta con la informacion-->
                </div>

                <!-- Quinto elemento carrusel-->
                <div class="carousel-item ">
                    <!-- tarjeta con la informacion-->
                        <div class="card bg-white text-dark">
                            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltd188c023f88f7d91/5ebc46db20f7727335261fcd/split-featured.png" class="card-img" alt="Bind" width="720" height="auto">
                            <div class="card-img-overlay">
                                <h5 class="card-title">SPLIT</h5>
                                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>-->
                                <div>
                                    <h2>Trailer del Mapa SPLIT</h2>
                                    <img src="https://images.squarespace-cdn.com/content/v1/59af2189c534a58c97bd63b3/1594898081106-UW6PL5805JA1PYOPL6WN/ke17ZwdGBToddI8pDm48kKCGUaD5gOA0BMXX8B1yUPBZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpx0h4ZDtskpbINpqZ_zV59fNHCR2X0R5QMW4yd2mDFqMyQgjKwMhAFcUUTS5j1ppq4/Split+map+callouts+Valorant.png" class="topright" alt="Bind Map" width="360" height="auto">
                                    <iframe width="500" height="281" src="https://www.youtube.com/embed/Y8s46XET3X8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                      
                                    <!--<iframe width="1080" height="720" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       -->         
                                </div>
                            </div>
                          
    
                        </div>
                    <!-- FIN tarjeta con la informacion-->
                </div>        

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel final -->













<!--  
        <!-- Primera pestaña colapsable 

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ICEBOX
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card bg-white text-dark">
                            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltde02911a015d7ef9/5f80d2851f5f6d4173b4e49d/Icebox_transparentbg_for_Web.png" class="card-img" alt="Icebox" width="1080" height="720">
                            <div class="card-img-overlay">
                                <h5 class="card-title">ICEBOX</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                            </div>
                            
                                <h2>Triler del Mapa Icebox</h2>
                                <h3>[...]</h3>
                                
                            <iframe width="1080" height="720" src="https://www.youtube.com/embed/EB4vFzY3MWc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                    </div>
                </div>
            </div>
        </div>

        <!--Segunda pestaña colapsable

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        HAVEN
                    </button>
                    </h2>
                </div>
            

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card bg-white text-dark">
                            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8afb5b8145f5e9b2/5ebc46f7b8c49976b71c0bc5/haven-featured.png" class="card-img" alt="Haven" width="1080" height="720">
                            <div class="card-img-overlay">
                                <h5 class="card-title">HAVEN</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                            </div>
                            
                                <h2>Triler del Mapa HAVEN</h2>
                                <h3>[...]</h3>
                                
                            <iframe width="1080" height="720" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                    </div>
                </div>
            </div>
        </div>

        <!--Tercera pestaña colapsable

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        SPLIT
                    </button>
                    </h2>
                </div>
            

                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card bg-white text-dark">
                            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltd188c023f88f7d91/5ebc46db20f7727335261fcd/split-featured.png" class="card-img" alt="Haven" width="1080" height="720">
                            <div class="card-img-overlay">
                                <h5 class="card-title">SPLIT</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                            </div>
                            
                                <h2>Triler del Mapa SPLIT</h2>
                                <h3>[...]</h3>
                                
                            <iframe width="1080" height="720" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                    </div>
                </div>
            </div>
        </div>

        <!--Cuarta pestaña colapsable

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        ASCENT
                    </button>
                    </h2>
                </div>
            

                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card bg-white text-dark">
                            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta9b912e1a1b59aa4/5ebc471cfa550001f72bcb13/ascent-featured.png" class="card-img" alt="Haven" width="1080" height="720">
                            <div class="card-img-overlay">
                                <h5 class="card-title">ASCENT</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                            </div>
                            
                                <h2>Triler del Mapa ASCENT</h2>
                                <h3>[...]</h3>
                                
                            <iframe width="1080" height="720" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                    </div>
                </div>
            </div>
        </div>
-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>