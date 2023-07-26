<?php
include("../../config/db.php");
$conn = conectar();

$id = $_GET['id'];
$sql = "SELECT * FROM libros WHERE  ISBN ='$id'";
$query = mysqli_query($conn, $sql);
$libro = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca php - Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-8 d-flex align-items-center flex-column mt-4" >
        <div class="row mt-4">
            <h2 class="text-center mb-5"> Editar Libro</h2>
        </div>

        <form action="update.php" method="post">
            <input type="text" name="isbn" class="form-control mb-4 form-control-lg" value="<?php echo $libro['ISBN']?>" hidden>
            <h5>Nombre del libro</h5>
            <input type="text" name="titulo" class="form-control mb-4 form-control-lg" value="<?php echo $libro['titulo']?>" style="width: 550px">
            <h5>Nombre del autor</h5>
            <input type="text" name="autor" class="form-control mb-4 form-control-lg" value="<?php echo $libro['autor']?>">
            <h5>Descripción del libro</h5>
            <textarea name="descripcion" class="form-control mb-4 form-control-lg"><?php echo $libro['descripcion']?></textarea>
            <h5>URL de la portada del libro</h5>
            <input type="url" name="portada" id="portada" class="form-control mb-4 form-control-lg" value="<?php echo $libro['portada']?>"/>
            <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
            <button class="btn btn-dark" @onclick="location.redirect('./index.php')">Regresar</button>
        </form>

    </div>
    
</body>
</html>


<!-- @onclick="location.redirect('index.php')" -->
<!-- onclick="window.location.href='index.php'" -->