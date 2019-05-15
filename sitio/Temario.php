<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido del curso</title>
    <!--estilos bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Estilos personalizados-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilosTemario.css">
    <!--iconos-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>       
                        
</head>
<body>
    
      <?php
      require('header.html');
      ?>
    
<section class="seccion-superior"><!--Esta es la parte superior del temario-->
    <div class="row pt-4 py-4 offset-1">
        <div class="panelImagen col-lg-4 ">
                <img class="card-img-top h-100" src="images/wallhaven-6742.jpg" alt="Proyecto 1">
        </div>
        <div class="row col-lg-8 ">
            <div class="offset-1">
                <h2 class="text-white">Este es el titulo del curso</h2>
                <br>
                <h4 class="text-white">has completado: 1 leccion de 5</h4>
                <div class="popup" onclick="myFunction()">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100" style="width:20%">
                          20% de progreso
                        </div>
                      </div>
                    <span class="popuptext" id="myPopup"> Segun el examen diagnostico este es el progreso que tienes del curso</span>
                </div>
                <br>
                <br>
                <a href="video.html"> <button type="button" class="btn btn-success"> <h2>Continuar desde: tema-2.2</h2></button></a>
            </div>
        </div>
    </div>
</section>
          
    <div id="main" class="row">
        <!--Menu desplegable-->
    <div id="accordion" role="tablist" aria-multiselectable="true" class="container t-2 pt-5 col-md-11">
        <!--Leccion uno-->
        <div class="card leccion shadow-sm mb-3 rounded-0">
            <h5 class="card-header"><!--Cabecera del menu desplegable-->
                <a data-toggle="collapse" href="#contenidoUno" aria-expanded="true" aria-controls="contenidoUno" id="leccionUno" class="d-block">
                    
                    <i class="fa fa-chevron-down pull-right"></i>
                    Leccion #1
                    <i class='fas fa-check' style='color:green'></i>
                </a>
            </h5>
            <div id="contenidoUno" class="collapse" aria-labelledby="leccionUno"><!--Contenido del menu desplegable-->
                <div class="card-body">
                    <h6>Este es el contenido de la leccion</h6>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt
                     debitis labore quae vero. Labore deleniti, maiores veritatis sapiente reiciendis
                     possimus.Ratione enim dignissimos facilis. Magnam id molestias aspernatur dolor.</p>
                     
                </div>
                            <!--Tema-->
                <div class="card rounded-0">
                        <h5 class="card-header">
                            <a data-toggle="collapse" href="#contenidoUno-temaUno" aria-expanded="true" aria-controls="contenidoUno-temaUno" id="leccionUno-temaUno" class="d-block">
                                <i class="fa fa-chevron-down pull-right"></i>
                                <i class='fas fa-check-circle' style='color:green'></i>
                                Tema #1
                                
                            </a>
                        </h5>
                        <div id="contenidoUno-temaUno" class="collapse" aria-labelledby="leccionUno-temaUno">
                            <div class="card-body">
                                <h6>Este es el contenido del Tema</h6>
                                <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                            </div>
                        </div>
                </div>
                                 <!--Tema-->
                <div class="card rounded-0">
                        <h5 class="card-header">
                            <a data-toggle="collapse" href="#contenidoUno-temaDos" aria-expanded="true" aria-controls="contenidoUno-temaDos" id="leccionUno-temaDos" class="d-block">
                                <i class="fa fa-chevron-down pull-right"></i>
                                <i class='fas fa-check-circle' style='color:green'></i>
                                Tema #2
                            </a>
                        </h5>
                        <div id="contenidoUno-temaDos" class="collapse" aria-labelledby="leccionUno-temaDos">
                            <div class="card-body">
                                <h6>Este es el contenido del Tema</h6>
                                <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                            </div>
                            
                        </div>
                </div>
                            <!--Tema-->
                <div class="card rounded-0">
                       <h5 class="card-header">
                           <a data-toggle="collapse" href="#contenidoUno-temaTres" aria-expanded="true" aria-controls="contenidoUno-temaTres" id="leccionUno-temaTres" class="d-block">
                               <i class="fa fa-chevron-down pull-right"></i>
                               <i class='fas fa-check-circle' style='color:green'></i>
                               Tema #3
                           </a>
                       </h5>
                       <div id="contenidoUno-temaTres" class="collapse" aria-labelledby="leccionUno-temaTres">
                        <div class="card-body">
                            <h6>Este es el contenido del Tema</h6>
                            <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                            <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                            <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                        </div>
                           
                       </div>
               </div>
            </div>
        </div>
        <!--Leccion Dos-->
        <div class="card leccion shadow-sm mb-3 rounded-0">
                <h5 class="card-header"><!--Cabecera del menu desplegable-->
                    <a data-toggle="collapse" href="#contenidoDos" aria-expanded="true" aria-controls="contenidoDos" id="leccionDos" class="d-block">
                        <i class="fa fa-chevron-down pull-right"></i>
                        
                        Leccion #2
                        
                    </a>
                </h5>
                <div id="contenidoDos" class="collapse show" aria-labelledby="leccionDos"><!--Contenido del menu desplegable-->
                    <div class="card-body">
                        <h6>Este es el contenido de la leccion</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt
                         debitis labore quae vero. Labore deleniti, maiores veritatis sapiente reiciendis
                         possimus.Ratione enim dignissimos facilis. Magnam id molestias aspernatur dolor.</p>
                         
                    </div>
                                <!--Tema-->
                    <div class="card rounded-0">
                            <h5 class="card-header">
                                <a data-toggle="collapse" href="#contenidoDos-temaUno" aria-expanded="true" aria-controls="contenidoDos-temaUno" id="leccionDos-temaUno" class="d-block">
                                    <i class="fa fa-chevron-down pull-right"></i>
                                    <i class='fas fa-check-circle' style='color:green'></i>
                                    Tema #1
                                </a>
                            </h5>
                            <div id="contenidoDos-temaUno" class="collapse" aria-labelledby="leccionDos-temaUno">
                                <div class="card-body">
                                    <h6>Este es el contenido del Tema</h6>
                                    <a href="video.html"><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                    <a href="video.html"><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                    <a href="video.html"><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                                </div>
                                
                            </div>
                    </div>

                    <div class="card rounded-0">
                            <h5 class="card-header">
                                <a data-toggle="collapse" href="#contenidoTres-temaDos" aria-expanded="true" aria-controls="contenidoTres-temaDos" id="leccionTres-temaDos" class="d-block">
                                    <i class="fa fa-chevron-down pull-right"></i>
                                    Tema #2
                                </a>
                            </h5>
                            <div id="contenidoTres-temaDos" class="collapse show" aria-labelledby="leccionTres-temaDos">
                                <div class="card-body">
                                    <h6>Este es el contenido del Tema</h6>
                                    <a href="video.html"><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                    <a href="video.html"><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                    <a href="video.html"><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                                </div>
                                
                            </div>
                    </div>
       
                    <div class="card rounded-0">
                           <h5 class="card-header">
                               <a data-toggle="collapse" href="#contenidoDos-temaTres" aria-expanded="true" aria-controls="contenidoDos-temaTres" id="leccionDos-temaTres" class="d-block">
                                   <i class="fa fa-chevron-down pull-right"></i>
                                   Tema #3
                               </a>
                           </h5>
                           <div id="contenidoDos-temaTres" class="collapse" aria-labelledby="leccionDos-temaTres">
                            <div class="card-body">
                                <h6>Este es el contenido del Tema</h6>
                                <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                            </div>
                               
                           </div>
                   </div>
            </div>
        </div>   
        <!--Leccion tres-->
        <div class="card leccion shadow-lg mb-3 rounded-0">
                <h5 class="card-header"><!--Cabecera del menu desplegable-->
                    <a data-toggle="collapse" href="#contenidoTres" aria-expanded="true" aria-controls="contenidoTres" id="leccionTres" class="d-block">
                        <i class="fa fa-chevron-down pull-right"></i>
                        Leccion #3
                    </a>
                </h5>
                <div id="contenidoTres" class="collapse" aria-labelledby="leccionTres"><!--Contenido del menu desplegable-->
                    <div class="card-body">
                        <h6>Este es el contenido del Tema</h6>
                        <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                        <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                        <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                    </div>
                                <!--Tema-->
                    <div class="card rounded-0">
                            <h5 class="card-header">
                                <a data-toggle="collapse" href="#contenidoTres-temaUno" aria-expanded="true" aria-controls="contenidoTres-temaUno" id="leccionTres-temaUno" class="d-block">
                                    <i class="fa fa-chevron-down pull-right"></i>
                                    Tema #1
                                </a>
                            </h5>
                            <div id="contenidoTres-temaUno" class="collapse" aria-labelledby="leccionTres-temaUno">
                                <div class="card-body">
                                    <h6>Este es el contenido del Tema</h6>
                                    <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                    <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                    <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                                </div>
                                
                            </div>
                    </div>
                                     <!--Tema-->
                    <div class="card rounded-0">
                            <h5 class="card-header">
                                <a data-toggle="collapse" href="#contenidoTres-temaDos" aria-expanded="true" aria-controls="contenidoTres-temaDos" id="leccionTres-temaDos" class="d-block">
                                    <i class="fa fa-chevron-down pull-right"></i>
                                    Tema #2
                                </a>
                            </h5>
                            <div id="contenidoTres-temaDos" class="collapse" aria-labelledby="leccionTres-temaDos">
                                <div class="card-body">
                                    <h6>Este es el contenido del Tema</h6>
                                    <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                    <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                    <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                                </div>
                                
                            </div>
                    </div>
                                <!--Tema-->
                    <div class="card rounded-0">
                           <h5 class="card-header">
                               <a data-toggle="collapse" href="#contenidoTres-temaTres" aria-expanded="true" aria-controls="contenidoTres-temaTres" id="leccionTres-temaTres" class="d-block">
                                   <i class="fa fa-chevron-down pull-right"></i>
                                   Tema #3
                               </a>
                           </h5>
                           <div id="contenidoTres-temaTres" class="collapse" aria-labelledby="leccionTres-temaTres">
                            <div class="card-body">
                                <h6>Este es el contenido del Tema</h6>
                                <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                            </div>
                               
                           </div>
                   </div>
                </div>
        </div>     
        <!--Leccion cuatro-->
        <div class="card leccion shadow-lg mb-3 rounded-0">
            <h5 class="card-header"><!--Cabecera del menu desplegable-->
                <a data-toggle="collapse" href="#contenidoCuatro" aria-expanded="true" aria-controls="contenidoCuatro" id="leccionCuatro" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Leccion #4
                </a>
            </h5>
            <div id="contenidoCuatro" class="collapse" aria-labelledby="leccionCuatro"><!--Contenido del menu desplegable-->
                <div class="card-body">
                    <h6>Este es el contenido de la leccion</h6>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt
                     debitis labore quae vero. Labore deleniti, maiores veritatis sapiente reiciendis
                     possimus.Ratione enim dignissimos facilis. Magnam id molestias aspernatur dolor.</p>
                     
                </div>
                            <!--Tema-->
                <div class="card rounded-0">
                        <h5 class="card-header">
                            <a data-toggle="collapse" href="#contenidoCuatro-temaUno" aria-expanded="true" aria-controls="contenidoCuatro-temaUno" id="leccionCuatro-temaUno" class="d-block">
                                <i class="fa fa-chevron-down pull-right"></i>
                                Tema #1
                            </a>
                        </h5>
                        <div id="contenidoCuatro-temaUno" class="collapse" aria-labelledby="leccionCuatro-temaUno">
                            <div class="card-body">
                                <h6>Este es el contenido del Tema</h6>
                                <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                            </div>
                            
                        </div>
                </div>
                                 <!--Tema-->
                <div class="card rounded-0">
                        <h5 class="card-header">
                            <a data-toggle="collapse" href="#contenidoCuatro-temaDos" aria-expanded="true" aria-controls="contenidoCuatro-temaDos" id="leccionCuatro-temaDos" class="d-block">
                                <i class="fa fa-chevron-down pull-right"></i>
                                Tema #2
                            </a>
                        </h5>
                        <div id="contenidoCuatro-temaDos" class="collapse" aria-labelledby="leccionCuatro-temaDos">
                            <div class="card-body">
                                <h6>Este es el contenido del Tema</h6>
                                <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                            </div>
                            
                        </div>
                </div>
                            <!--Tema-->
                <div class="card rounded-0">
                       <h5 class="card-header">
                           <a data-toggle="collapse" href="#contenidoCuatro-temaTres" aria-expanded="true" aria-controls="contenidoCuatro-temaTres" id="leccionCuatro-temaTres" class="d-block">
                               <i class="fa fa-chevron-down pull-right"></i>
                               Tema #3
                           </a>
                       </h5>
                       <div id="contenidoCuatro-temaTres" class="collapse" aria-labelledby="leccionCuatro-temaTres">
                        <div class="card-body">
                            <h6>Este es el contenido del Tema</h6>
                            <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                            <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                            <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                        </div>
                           
                       </div>
               </div>
            </div>
        </div>     
                <!--Leccion Cinco-->
                <div class="card leccion shadow-lg mb-3 rounded-0">
                    <h5 class="card-header"><!--Cabecera del menu desplegable-->
                        <a data-toggle="collapse" href="#contenidoCinco" aria-expanded="true" aria-controls="contenidoCinco" id="leccionCinco" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i>
                            Leccion #5
                        </a>
                    </h5>
                    <div id="contenidoCinco" class="collapse" aria-labelledby="leccionCinco"><!--Contenido del menu desplegable-->
                        <div class="card-body">
                            <h6>Este es el contenido de la leccion</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt
                             debitis labore quae vero. Labore deleniti, maiores veritatis sapiente reiciendis
                             possimus.Ratione enim dignissimos facilis. Magnam id molestias aspernatur dolor.</p>
                             
                        </div>
                                    <!--Tema-->
                        <div class="card rounded-0">
                                <h5 class="card-header">
                                    <a data-toggle="collapse" href="#contenidoCinco-temaUno" aria-expanded="true" aria-controls="contenidoCinco-temaUno" id="leccionCinco-temaUno" class="d-block">
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        Tema #1
                                    </a>
                                </h5>
                                <div id="contenidoCinco-temaUno" class="collapse" aria-labelledby="leccionCinco-temaUno">
                                    <div class="card-body">
                                        <h6>Este es el contenido del Tema</h6>
                                        <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                        <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                        <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                                    </div>
                                    
                                </div>
                        </div>
                                         <!--Tema-->
                        <div class="card rounded-0">
                                <h5 class="card-header">
                                    <a data-toggle="collapse" href="#contenidoCinco-temaDos" aria-expanded="true" aria-controls="contenidoCinco-temaDos" id="leccionTres-temaDos" class="d-block">
                                        <i class="fa fa-chevron-down pull-right"></i>
                                        Tema #2
                                    </a>
                                </h5>
                                <div id="contenidoCinco-temaDos" class="collapse" aria-labelledby="leccionCinco-temaDos">
                                    <div class="card-body">
                                        <h6>Este es el contenido del Tema</h6>
                                        <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                        <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                        <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                                    </div>
                                    
                                </div>
                        </div>
                                    <!--Tema-->
                        <div class="card rounded-0">
                               <h5 class="card-header">
                                   <a data-toggle="collapse" href="#contenidoCinco-temaTres" aria-expanded="true" aria-controls="contenidoCinco-temaTres" id="leccionCinco-temaTres" class="d-block">
                                       <i class="fa fa-chevron-down pull-right"></i>
                                       Tema #3
                                   </a>
                               </h5>
                               <div id="contenidoCinco-temaTres" class="collapse" aria-labelledby="leccionCinco-temaTres">
                                <div class="card-body">
                                    <h6>Este es el contenido del Tema</h6>
                                    <a href=""><span class="fas fa-play-circle"></span> video sobre algun tema</a><br>
                                    <a href=""><span class="fas as fa-file-audio"></span> video sobre algun tema</a><br>
                                    <a href=""><span class="fas far fa-file-pdf"></span> video sobre algun tema</a><br>
                                </div>
                                   
                               </div>
                       </div>
                    </div>
                </div>     
    </div>
</div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myjs.js"></script>
</body>
</html>