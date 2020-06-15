<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Iniciar sesión</h1>

	<form method="POST" action="ControlSesion.php">
		<?php
		 if(isset($_GET['error']) && $_GET['error']==true ){
		print("<h4>Error:Nombre de uusuario o contraseña invalido</h4><br>");
			}
		?>
		<label>Usuario:</label>
			<input type="text" name="usuario"><br><br>
		<label>Contraseña:</label>
			<input type="password" name="contrasena"><br><br>
        <input type="submit" name="enviar" value="login"><br><br>
        <label>¿No tienes una cuenta?</label><a href="">Registrate</a><br>
        <a href="">¿Olvidaste tu contraseña?</a>

	</form>

</body>
</html>