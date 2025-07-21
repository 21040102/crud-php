<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>

<a href="index.php">Inicio</a> <br />

<?php
include("connection.php");

if (isset($_POST['submit'])) {
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$user = trim($_POST['username']);
	$pass = trim($_POST['password']);

	if ($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "Todos los campos deben estar llenos. Uno o más están vacíos.";
		echo "<br/>";
		echo "<a href='register.php'>Volver</a>";
	} else {
		$query = "INSERT INTO login (name, email, username, password) 
		          VALUES ('$name', '$email', '$user', md5('$pass'))";

		if (mysqli_query($conn, $query)) {
			echo "✅ Registro exitoso";
			echo "<br/>";
			echo "<a href='login.php'>Ir a iniciar sesión</a>";
		} else {
			echo "❌ Error al registrar: " . mysqli_error($conn);
		}
	}
} else {
?>

	<h2>Registro de nuevo usuario</h2>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Nombre completo</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="email" name="email" required></td>
			</tr>			
			<tr> 
				<td>Usuario</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr> 
				<td>Contraseña</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Registrarse"></td>
			</tr>
		</table>
	</form>

<?php
}
?>

</body>
</html>
