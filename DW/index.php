<?php include("db.php")?>
<?php include("incluides/header.php")?>

<section class="wh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-2-strong" style="border-radius: 1rem;">
         
      
      <div class="card-body p-5 text-center">

            <h3 class="mb-5">CRUD CLIENTE</h3>

            <form action="save_task.php" method="POST">
            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="autor" class="form-control form-control-lg" />
              <label class="form-label"  for="typeEmailX-2">Nombre Autor</label>
            </div>


            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="apellido_autor" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Apellido del Autor</label>
            </div>

            <div class="form-outline mb-4">
            <input type="date" name="fecha" placeholder="dd-mm-yyyy" class="form-control form-control-lg" value="" min="1997-01-01" max="2030-12-31">           
              <label class="form-label" for="typeEmailX-2">Fecha de Nacimiento</label>
            </div>

            <input type="submit" class="btn btn-success btn-block" name="guardar_crud1" value="ENVIAR">
            
          </form>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <br>
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <table class="table table-bordered">

            <thead>
              <tr>
                <th>ID AUTOR</th>
                <th>NOMBRE AUTOR</th>
                <th>APELLIDO AUTOR</th>
                <th>FECHA NACIMIENTO</th>
                <th>MÁS</th>
              </tr>
            </thead>
              <tbody>
                <?php 
                  $query = "SELECT * FROM autor";
                  $result = mysqli_query($conn, $query);


                  while($row = mysqli_fetch_array($result)){?>
                 
                 <tr>
                  <td><?php echo $row['id_autor'] ?></td>
                  <td><?php echo $row['nombre'] ?></td>
                  <td><?php echo $row['apellido'] ?></td>
                  <td><?php echo $row['fecha_nacimiento'] ?></td>
                  <td>
                    <a href="edit.php?id=<?php echo $row['id_autor'] ?>" class="btn btn-secondary" ><i class="fas fa-marker"></i></a>
                    <a href="delete_task.php?id=<?php echo $row['id_autor'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                
                </tr>

                 <?php } ?>

              </tbody>
          </table>
        </div>


</section>


<?php include("incluides/footer.php")?>   


