<?php include("db.php")?>
<?php include("incluides/header.php")?>

<section class="wh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">CRUD PRODUCTO</h3>

            <form action="save_task.php" method="POST">
            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="id_libro" class="form-control form-control-lg" />
              <label class="form-label"  for="typeEmailX-2">Id Libro</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="titulo_libro" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Titulo del Libro</label>
            </div>


          <div class="form-outline mb-4">
            <input type="date" name="fecha_publicacion" class="form-control form-control.lg" />
              <label class="form-label" for="typeEmailX-2">Fecha de publicacion del libro</label>
            </div>

            <div class="form-outline mb-4">
            <input type="datetime-local" name="fecha_ingresoinventario" placeholder="dd-mm-yyyy" class="form-control form-control-lg" value="" min="1997-01-01" max="2030-12-31">           
            <label class="form-label" for="typeEmailX-2"> Fecha de Ingreso al inventario</label>

            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="cantidad" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Cantidad</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="precio" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Precio</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="editorial" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Editorial</label>
            </div>
            

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email editorial</label>
            </div>

        

          </div>
            <input type="submit" class="btn btn-success btn-block" name="save_task2" value="ENVIAR">
            </form>

           


          </div>
        </div>
      </div>
    </div>
  </div>

  
          <div class="card shadow-2-strong">
          <table class="table table-bordered">

            <thead>
              <tr>
                <th>ID LIBRO</th>
                <th>NOMBRE LIBRO</th>
                <th>FECHA DE PUBLICACION</th>
                <th>FECHA HORA INGRESO INVENTARIO</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>EDITORIAL</th>
                <th>EMAIL</th>
                <th>MÁS</th>
              </tr>
            </thead>
              <tbody>
                <?php 
                  $query = "SELECT * FROM libro";
                  $result = mysqli_query($conn, $query);


                  while($row = mysqli_fetch_array($result)){?>
                 
                 <tr>
                  <td><?php echo $row['id_libro'] ?></td>
                  <td><?php echo $row['titulo'] ?></td>
                  <td><?php echo $row['fecha_publicacion'] ?></td>
                  <td><?php echo $row['fecha_ingresoinventario'] ?></td>
                  <td><?php echo $row['cantidad'] ?></td>
                  <td>$<?php echo $row['precio'] ?></td>
                  <td><?php echo $row['editorial'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td>
                    <a href="edit2.php?id=<?php echo $row['id_libro'] ?>" class="btn btn-secondary" name="borrar2"><i class="fas fa-marker"></i></a>
                    <a href="delete_task2.php?id=<?php echo $row['id_libro'] ?>" class="btn btn-danger" name="editar2"><i class="fas fa-trash"></i></a>
                  </td>
                 </tr>

                 <?php } ?>

              </tbody>
          </table>
        </div>
</section>

<?php include("incluides/footer.php")?>   





