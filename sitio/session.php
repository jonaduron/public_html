<?php


$username = $_POST['usu']; 

session_start();
$_SESSION['usuario'] = $username;
$varsesion = $_SESSION['usuario'];
//if($varsesion != "" ||$varsesion != null)
//{
header("location:MisCursos.php");
//}else
//header("location:index.php");