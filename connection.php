<?php
$host = 'mysql.railway.internal';
$user = 'raíz';
$password = 'sJmqBEkdSNzjzfxwxuGwIwjluJmTdSsB';
$db = 'ferrocarril';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
