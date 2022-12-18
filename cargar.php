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
        header("location: index.php");
    }
include("header.php");
?>
<h1> Oradores inscriptos </h1>
        <table class="table table-striped" >
       <thead>
            <!--<td> <th>id</th>-->
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Tema</th>
        </thead>
        <tbody>
          
           <?php 
            while($fila = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                   <!--<td>
                        <?php echo $fila["id"]?>
                    </td> -->
                    <td>
                        <?php echo $fila["nombre"]?>
                    </td>
                    <td>
                        <?php echo $fila["apellido"]?>
                    </td>
                    <td>
                        <?php echo $fila["correo"]?>
                    </td>
                    <td>
                        <?php echo $fila["tema"]?>
                    </td>
                    <td> <a href="formEditar.php?id=<?php echo $fila["id"]?>">
                        <button class="btn btn-primary">Modificar</button></a>
                    </td>
                    <td><a href="eliminar.php?id=<?php echo $fila["id"]?>" >
                        <button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                <?php
            } 
        
           /* echo "<pre>";
            print_r($fila);
            echo "</pre>";*/
            
            ?>
            
            
        </body>
    </table>   
     
   
   