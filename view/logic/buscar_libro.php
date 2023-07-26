<?php
include("../../config/db.php");

if (isset($_GET['titulo'])) {
    $conn = conectar();
    $titulo = mysqli_real_escape_string($conn, $_GET['titulo']);

    $sql = "SELECT * FROM libros WHERE titulo LIKE '%$titulo%'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        while ($libro = mysqli_fetch_assoc($query)) {
            echo "Título: " . $libro['titulo'] . "<br>";
            echo "Autor: " . $libro['autor'] . "<br>";
            echo "Descripción: " . $libro['descripcion'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>