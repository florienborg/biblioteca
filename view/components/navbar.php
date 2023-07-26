<?php
// navbar.php
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0;" >
    <div class="container-fluid" style="background: #E0E0E0;">
        <img src="./assets/logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
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
                    <a class="nav-link active" aria-current="page" href="./index.php" style="color: #C084FC; font-weight: 600;">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="./introducir_libro.php" style="color: #C084FC; font-weight: 600;">Introducir Libro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>