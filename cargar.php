<?php 
/*
echo $_POST["nombre"] . "<br>";
echo $_POST["apellido"] . "<br>";

print_r($_REQUEST);
$sql = "SELECT * FROM lista";
*/
   /* echo "<pre>";
    print_r($_POST);
    echo "</pre>";
*/

   $nombre = $_POST["nombre"];
   $apellido = $_POST["apellido"];
   $correo =  $_POST["correo"];
   $tema =  $_POST["tema"];
    
    include("conexion.php");
    $conexion = conexion();

    $sql = "INSERT INTO lista (id, nombre, apellido, correo, tema) VALUES (NULL, '$nombre', '$apellido', '$correo', '$tema')";
    //es la consulta cdo se ej comando SQL
    $query = mysqli_query($conexion, $sql);
    
    if($query){
       // header("location: index.php"); Cambié por warning cannot modify header
        echo '<script type="text/javascript">';
echo 'window.location.href="index.php";';
echo '</script>';
    }
include("header.php");
?>

     
   
   
