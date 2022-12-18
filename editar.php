<?php
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";  */   
   
    
    include("conexion.php");
    $conexion = conexion();

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $tema = $_POST["tema"];
    $sql = "UPDATE lista SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', tema = '$tema' WHERE id=$id";

    $query = mysqli_query($conexion, $sql);
    
    if($query){
        header("location: index.php");
    }
    
    ?>