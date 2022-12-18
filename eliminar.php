<?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

   $id= $_GET["id"];   
   
    
    include("conexion.php");
    $conexion = conexion();

    $sql = "DELETE FROM lista WHERE id = $id";

    $query = mysqli_query($conexion, $sql);
    
    if($query){
        header("location: index.php");
    }
    ?>