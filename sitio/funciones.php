<?php 
    
    include('Conexion.php');
    
    $Con = conexion();
    
    function ConsultarCursos()
    {
        $consulta = "SELECT * FROM `Cursos`;";
    
    	$rs = mysql_query($consulta);
    	if($rs == false){
    	    
    	}else{
    	    while($row = mysql_fetch_array($rs)){
    	        $row['nombre']
    	    }
    	}
    	
    	return $rs;
    }