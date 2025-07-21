<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// incluyendo archivo de conexión
include("connection.php");

// obteniendo id desde la URL
$id = $_GET['id'];

// eliminando el producto con ese id
$result = mysqli_query($conn, "DELETE FROM products WHERE id=$id");

// redirigiendo a la tabla de productos
header("Location: view.php");
?>
