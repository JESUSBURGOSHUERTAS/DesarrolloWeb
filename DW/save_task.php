<?php

include("db.php");

    if (isset($_POST['guardar_crud1'])){
        
       $nombre = $_POST['autor'];
       $apellido = $_POST['apellido_autor'];
       $fecha_nacimiento = $_POST['fecha'];
       

       $query = " INSERT INTO  autor(nombre, apellido, fecha_nacimiento) 
       VALUES ('$nombre','$apellido','$fecha_nacimiento')";
       $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Task Saved';
        $_SESSION['message_type'] = 'success';
       
        header("Location: index2.php");

    } 

    if (isset($_POST['save_task2'])){
        
       $id_libro = $_POST['id_libro'];
       $nombre_libro = $_POST['titulo_libro'];
       $fecha_publicacion = $_POST['fecha_publicacion'];
       $fecha_ingresoinventario = $_POST['fecha_ingresoinventario'];
       $cantidad = $_POST['cantidad'];
       $precio = $_POST['precio'];
       $editorial = $_POST['editorial'];
       $email = $_POST['email'];

       $query2 = "INSERT INTO libro(id_libro, titulo, fecha_publicacion, fecha_ingresoInventario, cantidad, precio, editorial, email) 
       VALUES('$id_libro','$nombre_libro', '$fecha_publicacion','$fecha_ingresoinventario','$cantidad','$precio','$editorial','$email')";

       $result2= mysqli_query($conn, $query2);

       if(!$result2){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved';
    $_SESSION['message_type'] = 'success';
   
    header("Location: index.php");
 
     } 

?>