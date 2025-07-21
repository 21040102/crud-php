<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'test2';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
