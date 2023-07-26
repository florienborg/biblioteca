<?php 
include("./config/db.php");
$conn = conectar();
$sql = "SELECT * FROM libros";

$query = mysqli_query($conn, $sql);
$libros = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php include("./view/components/navbar.php"); ?>
        <div class="row mt-3">
            <?php
            foreach ($libros as $libro) {
                ?>
                <div class="col-md-3">
                    <div class="card" style="width: 20rem; height: 35rem; margin: 10px;">
                        <img src= "<?php echo $libro['portada']; ?>" class="card-img-top" alt="Portada del libro"  style="width: 100%; height: 18rem; object-fit: cover;">
                        <div class="card-body">
                            <h2 class="card-title">Título: <?php echo $libro['titulo']; ?></h2>
                            <h3 class="card-title">Autor: <?php echo $libro['autor']; ?></h3>
                            <h5 class="card-title">ISBN: <?php echo $libro['ISBN']; ?></h5>
                            <p class="card-text">Descripción: <?php echo $libro['descripcion']; ?></p>
                            <a href="#" class="btn btn-primary">Información</a>
                            <a href="./view/logic/actualizar.php?id=<?php echo $libro['ISBN']?>" class="btn btn-primary">Editar</a>
                            <a href="./view/logic/delete.php?id=<?php echo $libro['ISBN']?>" class="btn btn-danger">Borrar</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
