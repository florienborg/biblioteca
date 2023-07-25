<?php
function conectar(){
    $server = 'localhost:8889';
    $user = 'root';
    $pass = 'root';
    $db = 'readinginnovators';
    $conn = mysqli_connect($server, $user, $pass);
    mysqli_select_db($conn, $db);
    return $conn;
}
?>