<?php 
    include("db.php");
    $nombre_autor = '';
    $apellido_autor = '';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM autor WHERE id_autor= $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
       $row = mysqli_fetch_array($result);
       $nombre_autor = $row['nombre'];
       $apellido_autor = $row['apellido'];
       $fecha_nacimiento = $row['fecha_nacimiento'];
        }
 
    }

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre_act = $_GET['autor'];
        $apellido_act = $_GET['apellido_autor'];
        $fecha_na_act = $_GET['fecha'];
 
         $query = "UPDATE autor SET  nombre='$nombre_act', apellido = '$apellido_act', fecha_nacimiento = '$fecha_na_act' WHERE id = '$id'";
         $_SESSION['message'] = 'Task Updated Successfully';
         $_SESSION['message_type'] = 'warning';
         mysqli_query($conn, $query);
         header("Location:index.php"); 
     }


?>

<?php include("incluides/header.php")?>

<div class="container p-4">
<h1 class="display-1" align="center">ACTUALIZACION DE DATOS</h1>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id'] ?> " method="POST ">


        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Nombre Autor</label>
            <input type="text" name="nombre"  
            class="form-control" placeholder="Ingrese el nombre del autor que desea actualizar" value="<?php echo $nombre_autor ?>">
        </div>

        <div class="form-group">
        <label class="form-label"  for="typeEmailX-2">Apellido Autor</label>
            <input type="text" name="apellido"  
            class="form-control" placeholder="Ingrese el apellido del autor que desea actualizar" value="<?php echo $apellido_autor ?>" >
        </div>

        <div class="form-outline mb-4">
        <input type="date" name="fecha_na" placeholder="dd-mm-yyyy" class="form-control form-control-lg" value="<?php echo $fecha_nacimiento ?>" min="1997-01-01" max="2030-12-31">           
        <label class="form-label" for="typeEmailX-2" >Fecha de Nacimiento</label>
        </div>
        
        
           <button type="submit" class="btn btn-success" name="actualizar">ACTUALIZAR</button>
        </form>
            </div>
        </div>
    </div>
</div>


</div>



<?php  include("incluides/footer.php") ?>