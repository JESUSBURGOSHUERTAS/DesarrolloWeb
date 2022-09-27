<?php
    include('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM autor WHERE id_autor = $id";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Dato Eliminado Correctamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }

    
    

?>