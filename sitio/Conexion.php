<?php

    

    function conexion() {
        $Con = mysqli_connect('localhost','id8696744_machine19','diego1604','id8696744_plataforma');
        $Con;
        return $Con;
    }

    /*
    $Con = mysqli_connect('localhost','id8696744_machine19','diego1604','id8696744_plataforma');
    if($Con)
    {
        echo 'Conectado';
    }else
        echo 'Error al conectar';

*/