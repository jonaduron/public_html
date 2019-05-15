

<?php
    $curso = $_GET['curso'];
?>


<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ARCHIVO BOOTSTRAP 4 CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Estilos personalizados-->

    <link rel="stylesheet" href="css/estilos.css">   

    <!--Iconos-->

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> 

    <title>preview</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


   


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    


    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>       


        

</head>

<body>

      <?php

      require('header.html');
      $Con = mysqli_connect('localhost','id8696744_machine19','diego1604','id8696744_plataforma');
    	
      $consulta = "SELECT * FROM `Cursos` WHERE clave = '$curso'";
        
      //$rs = $Con->query($consulta);
      $rs = $Con->query($consulta);
      if($row = $rs ->fetch_assoc())
      //echo $row['nombre'];
      //else
      //echo "nada";
        
    
      ?>

    <section class="seccion-superior py-4 mt-5 ">
        
        <div class="container">

          <div class="row">

            <div class="col-12 col-md-6">

                <div class="card">

                    <img class="card-img-top h-100"  src="data:image/jpg;base64,<?php echo $row['foto']; ?>" alt="Proyecto 1" style="width: 100%; /*252px; height: 447px;*/">

                    <div class="card-body">

                      <h5 class="card-title  text-center">Este curso contiene</h5>

                      <p class="card-text">

                            <i class='far fa-file-video fa-2x'></i> 10 videos acerca de los temas tratados en las lecciones <br>

                            <i class='far fa-file-audio fa-2x'></i> 10 audios acerca de los temas tratados en las lecciones <br>

                            <i class='far fa-file-pdf fa-2x'></i> 10 documentos pdf acerca de los temas tratados en las lecciones <br>

                            <i class='far fa-check-square fa-2x'></i> una evaluacion por cada una de las lecciones tomadas en el curso <br>

                      </p>

                      <a href="pregunta.php?curso=<?php echo $curso ?>" class="btn btn-primary btn-superior">!Inscribete!</a>

                    </div>

                  </div>

            </div>

            <div class="col-12 col-md-6 text-center text-md-left align-self-md-center text-white ">

              <h1 class="display-4 font-weight-bold text-primary"><?php echo $row['nombre']; ?></h1> 

              <p><?php echo $row['descripcion']; ?></p> 

              <p>Creado por: Autor del curso <br> fecha de ultima actualización dom: 10 de febrero</p>

              <a href="#descripciones" class="btn btn-primary btn-lg btn-superior">Leér más</a> 

            </div>

          </div>

        </div>
      </section>
      


      <div class="container">

          <!--Esta seccion servira para agregar descripciones hacerca del conosimiento que el usuario obtendra-->

            <div class="card py-4 ">

              <div id="descripciones" class="card-body row" >

                  <h4 class="card-title col-12">Lo que aprenderas</h4>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate,</span><br><br>

                  </div>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate,<br><br>

                  </div>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate,</span><br><br>

                  </div>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate, Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam esse odio vitae, soluta repellat voluptas maiores odit corrupti ullam labore accusamus eaque ipsa cumque quasi eveniet error officia aspernatur omnis! <br><br>

                  </div>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate,</span><br><br>

                  </div>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate,<br><br>

                  </div>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate,</span><br><br>

                  </div>

                  <div class="col-md-6">

                        <i class='fas fa-check'></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae saepe dolorem dolorum ratione nobis distinctio, nisi cupiditate,<br><br>

                  </div>

              </div>

            </div>

        <!--Contenido del curso-->

        <br>

        <div class="contenido">

            <h4>Contenido del curso</h4>

            <?php

                include('contenido.html');

            ?>

        </div>



      </div>

          





    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/myjs.js"></script>



    

</body>

</html>