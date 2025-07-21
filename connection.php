<?php
$host = 'mysql.railway.internal';
$user = 'root';
$password = 'sJmqBEkdSNzjzfxwxuGwIwjluJmTdSsB';
$db = 'railway'; // o 'ferrocarril' si cambiaste el nombre

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
