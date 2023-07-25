<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include('../config/Database.php');
    $conn = conectar();
    $sql = 'SELECT * FROM libros';
    $query = mysqli_query($conn, $sql);
    // echo $query;

?>