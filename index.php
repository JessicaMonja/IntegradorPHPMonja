<?php
    include("conexion.php");
    $conexion = conexion();

   $sql = "SELECT * FROM lista";
//es la consulta cdo se ej comando SQL
    $query = mysqli_query($conexion, $sql);
   /* echo "<pre>";
    print_r($query);
    echo "</pre>";*/
    include("header.php");

    ?>
    
     <div class="card text-bg-dark p-3 rounded-0" >
        <img src="./imagenes/ba1.jpg" class="card-img" alt="Imagen de portada">
         <div class="cardPortada card-img-overlay" id="LaConferencia">
            <div class="texto">
          <h3 class="titulo card-title" >Conf Bs As</h5>
          <p class="card-text"> Quidem sint incidunt a, ab magnam, error obcaecati fugit dolorem molestias eveniet nulla. Facere a molestias, earum tempora distinctio nobis voluptatibus amet!  This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text">
             <small>
             <button type="button" class="btn bg-cuerpo btn-sm  border text-white"><a class="nav-link active text-white"  href="#ConviérteteEnOrador">Quiero ser orador </a></button>
             <button type="button" class="btn btn-success btn-sm"><a class="nav-link active text-white" href="./compra.html">Compar tickets</a></button>
            </small>
          </p>
         </div>
        </div>
        
      </div>
    </header>
  
    <main class="container mt-4 mb4" id="LosOradores">
        <div class="oradores p-1">
            <p> CONOCE A LOS</p>
            <h1>ORADORES</h1> 
         </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">         
             <div class="col">
              <div class="card h-100">
                <img src="./imagenes/steve.jpg" class="card-img-top" alt="Steve">
                <div class="card-body">
                <p> <span class="badge rounded-pill text-bg-warning">JavaScript</span>
                    <span class="badge rounded-pill text-white text-bg-info">React</span>
                </p>
                  <h5 class="card-title">Steve Jobs</h5>
                  <p class="card-text text-dark p-1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="./imagenes/bill.jpg" class="card-img-top" alt="Bill">
                <div class="card-body">
                    <p> <span class="badge rounded-pill text-bg-warning">JavaScript</span>
                        <span class="badge rounded-pill text-white text-bg-info">React</span>
                    </p>
                  <h5 class="card-title">Bill Gates</h5>
                  <p class="card-text text-dark p-1">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>                
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="./imagenes/ada.jpeg" class="card-img-top" alt="Ada">
                <div class="card-body">
                    <p> <span class="badge rounded-pill text-bg-secondary">Negocios</span>
                        <span class="badge rounded-pill text-bg-danger">Startups</span>
                    </p>
                  <h5 class="card-title">Ada Lovelace</h5>
                  <p class="card-text text-dark p-1">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                
              </div>
            </div>
          </div>
      </main>
    <section id="ElLugarYLaFecha">
      <div class="row x-0">
        <div class="col-sm-6 p-0 " id="imagenPlaya">        
          <div class="card">
            <img src="./imagenes/honolulu.jpg" alt="imagenPlaya">      
           </div>
          </div>        
        <div class="col-sm-6 p-0 bg-dark">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <h5 class="card-title">Bs As- Octubre </h5>
              <p class="card-text">Buenos Aires is Argentina’s big, cosmopolitan capital city. Its center is the Plaza de Mayo, lined with stately 19th-century buildings including Casa Rosada, the iconic, balconied presidential palace. Other major attractions include Teatro Colón, a grand 1908 opera house with nearly 2,500 seats, and the modern MALBA museum, displaying Latin American art. With supporting text below as a natural lead-in to additional content.</p>
              <a href="https://www.buenosaires.gob.ar/educacion/fied/envivo" class="btn btn-dark border-white">Conocé más</a>
            </div>
          </div>
        </div>
      </div>  
    </section>   
    <section class="venta col-md-6 col-sm-12 mx-auto my-auto" id="ConviérteteEnOrador">
      <div class=" oradores ">
       <p class=" mb-0">CONVIERTETÉ EN UN </p> 
      <h1> ORADOR </h1>
      <p class="small">Anotaté como orador para dar una charla ignite. Cuéntanos de que quieres hablar!</p>
    </div>
    <form action="cargar.php" method="POST">
      <div class="row mb-3" >
        <div class="col-md-6 col-sm-12 mx-auto mb-3">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" name="nombre" id="nombre" required>
        </div>
        <div class="col-md-6 col-sm-12 mx-auto ">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" name="apellido" id="apellido" required>
        </div>
        <div class="col-12 md-8 lg-6 mx-auto">          
          <input type="email" class="form-control" name="correo" id="inputEmail" placeholder="Correo" required>              
         </div>
      </div>      
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Sobre qué querés hablar?"  style="height: 100px"name="tema" id="tema" required></textarea>
        <label for="floatingTextarea2">Sobre qué querés hablar?</label>
        <p class="text-muted small">Recuerda incluir un título para tu charla.          
        </p>
      </div>
      <div class="d-grid gap-2 mb-3">
        <button class="btn btn-success" type="submit" id="enviar">Enviar</button>        
      </div>
      <span>
      <p id="mensajeNombre"></p>
      <p id="mensajeApellido"></p>
      <p id="mensajeEmail"></p>
      <p id="mensajeTema"></p>
      </span>
    </form>  
    <section>
    <h1> Oradores inscriptos </h1>
        <table class="table table-striped" id="listaOradores">
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
        
            echo "<pre>";
            print_r($fila);
            echo "</pre>";
            ?>
        
            
        </body>
    </table>   
    </section>
    </section>
    <?php include("footer.php")?>
  