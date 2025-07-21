<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// incluyendo archivo de conexión
include_once("connection.php");

// obteniendo los productos del usuario actual
$result = mysqli_query($conn, "SELECT * FROM products WHERE login_id=" . $_SESSION['id'] . " ORDER BY id DESC");
?>

<html>
<head>
	<title>Inicio</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="add.html">Agregar producto</a> | <a href="logout.php">Cerrar sesión</a>
	<br/><br/>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Nombre</td>
			<td>Cantidad</td>
			<td>Precio (€)</td>
			<td>Acciones</td>
		</tr>
		<?php
		while ($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['qty']."</td>";
			echo "<td>".$res['price']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Estás seguro de eliminar?')\">Eliminar</a></td>";		
		}
		?>
	</table>	
</body>
</html>
