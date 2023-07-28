<?php 
include("./view/components/card.php");
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
    <h1 class= "title" style="color: #581C87;padding: 4rem;text-align: center;">Descubre un mundo infinito entre las páginas: donde cada libro es una puerta hacia el conocimiento y la imaginación.</h1>
    <div class="row mt-3" style="align-items: center;display: flex; justify-content: center; width:100%">
        <?php
        foreach ($libros as $libro) {
            generarCard($libro);
        }
        ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
