<?php
function conexion() {
    $servidor = "localhost";
    $usuario = "id20002975_jpmonja";
    $pass = "jf]f3~_LFA/}m>XX";

   // $servidor = "files.000webhost.com";
    //$usuario = "silvern-soldiers";
    //$pass = "asd12345";
    $baseDatos = "id20002975_oradores";
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
