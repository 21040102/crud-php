<?php
$host = 'mysql.railway.internal';
$user = 'root'; // ← Aquí estaba mal, tú pusiste 'raíz'
$password = 'sJmqBEkdSNzjfzxwxuGwIwjLuJmTdSsB';
$db = 'ferrocarril';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>
