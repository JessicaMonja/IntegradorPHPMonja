<?php
    /*echo "<pre>";
    print_r($_GET);
    echo "</pre>";
*/

    include("conexion.php");
    $conexion = conexion();
    $id = $_GET["id"];  
    
    $sql = "SELECT * FROM lista WHERE id = $id";

    $query = mysqli_query($conexion, $sql);

    $fila = mysqli_fetch_assoc($query);

    include("header.php");
   
    ?>
    <section class="container mt-4 mx-4 p-4">

    
    <form action="editar.php" method="post">
        <input type="text" name="id" id="id" value="<?php echo $fila["id"]?>"hidden>
        <input type="text" name="nombre" id="nombre" placeholder="nombre" value="<?php echo $fila["nombre"]?>">
         <input type="text" name="apellido" id="apellido" value="<?php echo $fila["apellido"]?>">
         <input type="text" name="correo" id="correo" placeholder="correo" value="<?php echo $fila["correo"]?>">
         <input type="text" name="tema" id="tema" placeholder="tema" value="<?php echo $fila["tema"]?>">
         <input type="submit" value="Modificar">
    </form>
   </section>
<?php include("footer.php")?>
