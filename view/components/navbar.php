<?php
// navbar.php
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="./assets/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        <a class="navbar-brand" style="margin: 10px; margin-right: 60px" href="#">Readding Innovator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex w-100 mt-3 d-lg-none" action="view/logic/buscar_libro.php" method="get">
            <input class="form-control me-2" type="search" name="titulo" placeholder="Buscar por Título" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <div class="d-lg-flex flex-grow-1">
            <form class="d-none d-lg-flex w-100 mt-3" action="view/logic/buscar_libro.php" method="get">
                <input class="form-control me-2" type="search" name="titulo" placeholder="Buscar por Título" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav d-lg-flex mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./introducir_libro.php">Introducir Libro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
