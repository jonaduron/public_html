<?php
include_once "db.php";
$array_cursos = $_POST['miorden'];

$orden = 1;
foreach($array_cursos as $id_curso){
	$resultado_cursos = "UPDATE cursos SET orden = $orden WHERE id = $id_curso";
	$resultado_cursos = mysqli_query($conexion, $resultado_cursos);	
	$orden++;
}
echo "<p><span style='color: green;'>La lista ha sido cambiada.</span></p>";