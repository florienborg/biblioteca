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
<style>
  body {
    background-color: #F5F5F5;
    color: purple;
  }

  .btn-actualizar, .btn-regresar {
    background-color:#A78BFA;
    color: white;
    border: none;
    transition: box-shadow 0.3s ease;
  }

  .btn-actualizar:hover, .btn-regresar:hover {
    box-shadow: 0 0 13px #A5B4FC;
    background:#10B981;
    color:white;
  }
</style>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="row mt-4">
          <h1 class="text-center mb-5">Editar Libro</h1>
        </div>

        <form action="update.php" method="post">
          <input type="text" name="isbn" class="form-control mb-4 form-control-lg" value="<?php echo $libro['ISBN']?>" hidden>
          <h5>Nombre del libro</h5>
          <input type="text" name="titulo" class="form-control mb-4 form-control-lg" value="<?php echo $libro['titulo']?>">
          <h5>Nombre del autor</h5>
          <input type="text" name="autor" class="form-control mb-4 form-control-lg" value="<?php echo $libro['autor']?>">
          <h5>Descripción del libro</h5>
          <textarea name="descripcion" class="form-control mb-4 form-control-lg"><?php echo $libro['descripcion']?></textarea>
          <h5>URL de la portada del libro</h5>
          <input type="url" name="portada" id="portada" class="form-control mb-4 form-control-lg" value="<?php echo $libro['portada']?>"/>
          <input type="submit" value="Actualizar" class="btn btn-actualizar btn-block">
          <button class="btn btn-regresar" @onclick="location.redirect('./index.php')">Regresar</button>
        </form>
      </div>
   


</html>


<!-- @onclick="location.redirect('index.php')" -->
<!-- onclick="window.location.href='index.php'" -->