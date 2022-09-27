<?php 
    include("db.php");

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $query = "SELECT * FROM libro WHERE id_libro= $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){

       $row = mysqli_fetch_array($result);
       $id_libro = $row['id_libro'];
       $titulo = $row['titulo'];
       $fecha_publicacion = $row['fecha_publicacion'];
       $fecha_ingresoinventario = $row['fecha_ingresoinventario'];
       $cantidad = $row['cantidad'];
       $precio = $row['precio'];
       $editorial = $row['editorial'];
       $email = $row['email'];
        }

    }



?>

<?php include("incluides/header.php")?>

<div class="container p-4">
<h1 class="display-1" align="center">ACTUALIZACION DE DATOS TABLA 2</h1>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
        <form action="">

        
        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">ID Libro</label>    
        <input type="text" name="id_libro"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $id_libro; ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Titulo</label>
            <input type="text" name="titulo"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $titulo; ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Fecha Publicacion</label>
            <input type="text" name="fecha_publicacion"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $fecha_publicacion; ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Fecha Ingreso Inventario</label>
            <input type="text" name="fecha_ingresoinventario"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $fecha_ingresoinventario; ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Cantidad</label>
            <input type="text" name="cantidad"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $cantidad; ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Precio</label>
            <input type="text" name="fecha_ingresoinventario"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $precio; ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Editorial</label>
            <input type="text" name="fecha_ingresoinventario"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $editorial; ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Email Editorial</label>
            <input type="text" name="fecha_ingresoinventario"  
            class="form-control" placeholder="Ingrese el ID del autor que desea actualizar" value=" <?php echo $email; ?>">
        </div>
           <button type="submit" class="btn btn-success" name="actualizar">ACTUALIZAR</button>
        </form>
            </div>
        </div>
    </div>
</div>


</div>


<?php  include("incluides/footer.php") ?>