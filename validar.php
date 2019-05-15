<?php 

	require("connect_db.php");

	$usuario=($_POST['nick']);
	$Contrasena=strip_tags($_POST['pwd']);

	#inicio de sesion
	session_start();
	$pos = strpos($usuario, '@');
	echo $pos;
	if($pos === false) {
		$u_usuario = strtoupper($usuario);
		$sql2=mysql_query("SELECT * FROM padres WHERE nick ='$u_usuario'");
		if ($f2=mysql_fetch_array($sql2)) {
			if (MD5($Contrasena)==$f2['pwd']) {

				#Declaración de sesión
				$_SESSION["u_curp"] = $f2['curp'];	
				
				echo "<script>location.href='tarea.php'</script>";
			} else {
				echo "<script>location.href='index.php'</script>";
			}
		} else {

			echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		
			echo "<script>location.href='index.php'</script>";	
		}		
	}else{
		$sql2=mysql_query("SELECT email, privilegios, pwd FROM usuarios WHERE email ='$usuario'");
		if ($f2=mysql_fetch_array($sql2)) {

			if (MD5($Contrasena)==$f2['pwd']) {

				#Declaración de sesión
				$_SESSION["u_email"] = $usuario;	
				$_SESSION["u_privilegios"] = $f2['privilegios'];
				
				echo "<script>location.href='menu.php'</script>";
			} else {
				echo "<script>location.href='index.html'</script>";
			}
		} else {

			echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		
			echo "<script>location.href='index.html'</script>";	
		}
	}



	

 ?>