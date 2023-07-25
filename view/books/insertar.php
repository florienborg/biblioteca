<?php
    include('db.php');
    $conn = conectar();
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fecha = $_POST['fecha'];
    $isbn = $_POST['isbn'];
    $imagen = $_POST['imagen'];
    $descipcion = $_POST['descripcion'];
    $sql = "INSERT INTO libros VALUES(null, '$titulo', '$autor', '$fecha', '$isbn', '$imagen', '$descripcion')";
    $query = mysqli_query($conn, $sql);
    if($query){
        HEADER('Location: index.php');
    }else{
        echo $query;
    }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Prueba php</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
</head>
<body>
    <div class='container mt-5'>
        <div class='row'>
            <div class='col-md-3'>
                <h1>Ingresa los datos del libro</h1>
                <form action='insertar.php' method='post'>
                    <input type='text' name='titulo' class='form-control mb-3' placeholder='Título del libro'>
                    <input type='text' name='autor' class='form-control mb-3' placeholder='Autor del libro'>
                    <input type='date' name='fecha' class='form-control mb-3'>
                    <input type='text' name='isbn' class='form-control mb-3' placeholder='isbn del libro'>
                    <input type='file' name='imagen' id='imagen' class='form-control mb-3'/>
                    <textarea type= 'text' name='descripcion' class='form-control mb-3' > </textarea>
                    <input type='submit' value='Insertar' class='btn btn-primary'>
                </form>
            </div>
            <div class='col-md-8'>
                <table class='table'>
                    <thead class='table-success table-striped'>
                        <tr>
                            <th>Id</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Fecha</th>
                            <th>ISBN</th>
                            <th>Imagen</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['titulo'] ?>
                            </td>
                            <td>
                                <?php echo $row['autor'] ?>
                            </td>
                            <td>
                                <?php echo $row['fecha'] ?>
                            </td>
                            <td>
                                <?php echo $row['isbn'] ?>
                            </td>
                            <td>
                                <?php echo $row['imagen'] ?>
                            </td>
                            <td>
                                <?php echo $row['descripcion'] ?>
                            </td>
                            <td>
                                <a href='actualizar.php?id=<?php echo Srow['id']?>' class='btn btn-warning'>Editar</a>
                                |
                                <a href='delete.php?id=<?php echo Srow['id']?>' class='btn btn-danger'>Borrar</a>
                            </td>
                        </tr>
                        <?php
                          }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>