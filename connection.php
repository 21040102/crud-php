<?php
$host = 'mysql.railway.internal';
$user = 'root';
$password = 'sJmqBEkdSNzjfzxwxuGwIwjluJmTdSsB';
$db = 'railway';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
