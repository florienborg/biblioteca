<?php
    include("../../config/db.php");
    $conn = conectar();
    $isbn = $_GET['id'];

    $sql = "DELETE from libros WHERE ISBN='$isbn'";
    $query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: ../../index.php");
    }

?>