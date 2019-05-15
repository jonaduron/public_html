<?php

    error_reporting(0);
    session_start();
    $usuario = $_SESSION['usuario'];
    $Curso = $_GET['curso'];

    $Con = mysqli_connect('localhost','id8696744_machine19','diego1604','id8696744_plataforma');
        
    $consult = "SELECT * FROM `Inscrito` WHERE clave_alumno = $usuario and clave_curso = $Curso";
    
    $resultado = $Con->query($consult);
    if("" != $resultado['clave_curso'])
    {
        $consulta = "INSERT INTO `Inscrito` (`clave_alumno`, `clave_curso`, `avance`) VALUES ('$usuario', '$Curso', '0')";
    
        $rs = $Con->query($consulta);
        
        if($rs)
        echo'<script type="text/javascript">
            window.location.href="video.php?curso='.$Curso.'";
            alert("Se inscribio al curso");
            </script>';
        else
        echo'<script type="text/javascript">
            window.location.href="preview.php?curso='.$Curso.'";
            alert("No se puede inscribir al curso");
            </script>';
          
    }else
    {
        echo'<script type="text/javascript">
        window.location.href="video.php?curso='.$Curso.'";
       </script>';
    }