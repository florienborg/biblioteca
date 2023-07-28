<?php
include("../components/card.php");
include("../../config/db.php");

if (isset($_GET['titulo'])) {
    $conn = conectar();
    $titulo = mysqli_real_escape_string($conn, $_GET['titulo']);

    $sql = "SELECT * FROM libros WHERE titulo LIKE '%$titulo%'";
    $query = mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Buscar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0;" >
        <div class="container-fluid" style="background: #E0E0E0;">
        <img src="../../assets/logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
        <a class="navbar-brand" style="margin: 20px; margin-right: 60px; color: #581C87; font-weight: 600;" href="#">Reading Innovators</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex w-100 mt-3 d-lg-none" style="margin: 20px;" action="view/logic/buscar_libro.php" method="get">
            <input class="form-control me-2" style="color: #581C87;
            font-style: italic;" type="search" name="titulo" placeholder="Busca aquí el libro" aria-label="Search">
            <button class="btn btn-outline-success" style="background: #C084FC; color: white; border: none;" type="submit">Buscar</button>
        </form>
        <div class="d-lg-flex flex-grow-1">
            <form class="d-none d-lg-flex w-100 mt-3" action="view/logic/buscar_libro.php" method="get">
                <input class="form-control me-2" style="color: #581C87;
                font-style: italic;" type="search" name="titulo" placeholder="Busca aquí el libro" aria-label="Search">
                <button class="btn btn-outline-success" style="background: #C084FC; color: white; border: none; font-weight: 600;" type="submit">Buscar</button>
            </form>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav d-lg-flex mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../index.php" style="color: #C084FC; font-weight: 600;">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="../../introducir_libro.php" style="color: #C084FC; font-weight: 600;">Introducir Libro</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>


                <h2 style="color:#581c87; font-size: 34px;">Resultados de la Búsqueda</h2>
                <div class="row mt-3" style="align-items: center;display: flex; justify-content: center; width:100%">
                <?php 
    if ($query) {
        while ($libro = mysqli_fetch_assoc($query)) {
            generarCard($libro, false); 
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }
    ?>
    </div>
                <a style="background: white; border:none; color:#C084FC; font-size: 20px;" href="../../index.php" class="btn btn-secondary">Volver</a>
         



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
