<?php
include("./config/db.php");
$conn = conectar();

if (isset($_GET['isbn'])) {
    $isbn = mysqli_real_escape_string($conn, $_GET['isbn']);

    $sql = "SELECT * FROM libros WHERE ISBN = '$isbn'";
    $query = mysqli_query($conn, $sql);
    $libro = mysqli_fetch_assoc($query);
} else {
    header("Location: error.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<?php include("./view/components/navbar.php"); ?> 
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color:#581c87; font-size: 42px;">Más información sobre este libro</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $libro['portada']; ?>" class="img-fluid mb-3" alt="Portada del libro">
            </div>
            <div class="col-md-6" style="padding: 50px;">
                <h2 style="color:#581c87; font-size: 34px;"><?php echo $libro['titulo']; ?></h2>
                <h3 style="color:#581c87; font-size: 28px; "> Escrito por <?php echo $libro['autor']; ?></h3>
                <p style="font-size: 20px;">Descripción: <?php echo $libro['descripcion']; ?></p>
                <a style="background: #C084FC; border:none; font-size: 20px;" href="./view/logic/actualizar.php?id=<?php echo $libro['ISBN']; ?>" class="btn btn-primary">Editar</a>
                <a style="background: white; border:none; color:#C084FC; font-size: 20px;" href="index.php" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

