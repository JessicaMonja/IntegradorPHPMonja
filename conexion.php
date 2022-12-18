<?php
function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $pass = "";

   // $servidor = "files.000webhost.com";
    //$usuario = "silvern-soldiers";
    //$pass = "asd12345";
    $baseDatos = "oradores";
    // conectar con el sercidor 
    $conectar = mysqli_connect($servidor, $usuario, $pass);
    //seleccionar la BD
    mysqli_select_db($conectar, $baseDatos);

    /*echo "<pre>";
    print_r($conectar);
    echo "</pre>";*/
    return $conectar;

}



?>