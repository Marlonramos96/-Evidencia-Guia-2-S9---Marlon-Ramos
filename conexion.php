<?php
$user = "StivenRamos26";
$password = "Stiven2025$$";
$database = "db_comercial";
$host = "localhost";

$conexion = mysqli_connect($host, $user, $password, $database);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
