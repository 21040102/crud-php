<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Añadir Producto</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="view.php">Ver Productos</a> | <a href="logout.php">Cerrar sesión</a>

	<?php
	// Incluyendo el archivo de conexión
	include_once("connection.php");

	if (isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];
		$loginId = $_SESSION['id'];

		// Verificar campos vacíos
		if (empty($name) || empty($qty) || empty($price)) {

			if (empty($name)) {
				echo "<p style='color: red;'>El campo 'Nombre' está vacío.</p>";
			}
			if (empty($qty)) {
				echo "<p style='color: red;'>El campo 'Cantidad' está vacío.</p>";
			}
			if (empty($price)) {
				echo "<p style='color: red;'>El campo 'Precio' está vacío.</p>";
			}

			echo "<br/><a href='javascript:self.history.back();'>Volver</a>";

		} else {
			// Insertar en la base de datos
			$result = mysqli_query($conn, "INSERT INTO products(name, qty, price, login_id) 
										   VALUES('$name','$qty','$price', '$loginId')");

			if ($result) {
				echo "<p style='color: #1db954;'>✅ Producto añadido con éxito.</p>";
				echo "<br/><a href='view.php'>Ver productos</a>";
			} else {
				echo "<p style='color: red;'>❌ Error al insertar: " . mysqli_error($conn) . "</p>";
			}
		}
	}
	?>
</body>
</html>
