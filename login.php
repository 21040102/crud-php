<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if ($username == "" || $password == "") {
		echo "Campos vacíos.<br/>";
		echo "<a href='login.php'>Volver</a>";
	} else {
		$result = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password=md5('$password')")
		          or die("Consulta fallida.");

		$row = mysqli_fetch_assoc($result);

		if (is_array($row) && !empty($row)) {
			$valid_user = $row['username'];
			$_SESSION['valid'] = $valid_user;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Usuario o contraseña incorrectos.<br/>";
			echo "<a href='login.php'>Volver</a>";
		}

		if (isset($_SESSION['valid'])) {
			header("Location: view.php");
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Login</h2>
	<p><a href="index.php">Inicio</a></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Usuario</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr> 
				<td>Contraseña</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Iniciar sesión"></td>
			</tr>
		</table>
	</form>
</body>
</html>
