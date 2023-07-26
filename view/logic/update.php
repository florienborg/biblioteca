<?php
    include("../../config/db.php");
    $conn = conectar();
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $portada = $_POST['portada'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE libros SET titulo='$titulo', autor='$autor', descripcion='$descripcion', portada='$portada' WHERE ISBN='$isbn'";
    $query = mysqli_query($conn, $sql);

    if($query){
        Header("Location: ../../index.php");
    }else{
        echo $query;
    }
?>