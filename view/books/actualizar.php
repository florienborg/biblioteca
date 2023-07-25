<?php
include('db.php');
$id = $_GET['id'];
$sql ="SELECT * FROM libros WHERE id ='$id'";
$query = mysqli_connect_query($conn, $sql);
$titulo = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>prueba php - Update</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM” crossorigin=“anonymous'>
</head>
<body>
    <div class='container mt-2'>
        <div class='row'>
            <h1 class='text-center'> Prueba CRUD</h1>
        </div>
        <form action='' method='post'></form>
    </div>
</body>
</html>