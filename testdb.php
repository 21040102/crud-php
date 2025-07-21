<?php
$host = 'mysql.railway.internal';
$user = 'root';
$password = 'sJmqBEkdSNzjfzxwxuGwIwjluJmTdSsB';
$db = 'railway';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}
echo "✅ Conectado correctamente a la base de datos.";
?>
