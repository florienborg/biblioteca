<?php
include("../../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = conectar();
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $autor = mysqli_real_escape_string($conn, $_POST['autor']);
    $portada = mysqli_real_escape_string($conn, $_POST['portada']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);

    $sql = "INSERT INTO libros (ISBN, titulo, autor, descripcion, portada) 
            VALUES ('$isbn', '$titulo', '$autor', '$descripcion', '$portada')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Error al insertar el libro.";
    }
}
?>


