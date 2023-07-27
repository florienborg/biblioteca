<?php
function conectar(){
    $server = "localhost:8889";
    $user = "root";
    $pass = "root";
    // $pass = "";
    $db = "libreria";
    $conn = mysqli_connect($server, $user, $pass);
    mysqli_select_db($conn, $db); 
    return $conn;
}
?>

<!-- 
-- Base de datos: `libreria`
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `libros`
-- -->

<!-- CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(14) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `portada` text NOT NULL
)  -->
