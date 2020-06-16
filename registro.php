<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Nueva cuenta</h1>

	<form method="POST" action="ControlSesionRegistro.php">
		<?php
		 if(isset($_GET['error']) && $_GET['error']==true ){
            print("<h4>Error: El nombre de usuario ya existe</h4>");
			}
		?>
		
        <input type="text" name="usuario" placeholder="Usuario" required><br><br>
        <input type="text" name="nombre" placeholder="Nombre" required><br><br>
        <input type="text" name="apellidos" placeholder="Apellidos" required><br><br>
        <input type="text" name="email" placeholder="Email" required><br><br>
        <input type="password" name="contrasena" placeholder="Contraseña" required><br><br>
        <input type="password" name="recontrasena" placeholder="Confirmar Contraseña" required><br><br>
        <input type="text" name="ciudad" placeholder="Ciudad" required><br><br>
        <input type="text" name="direccion" placeholder="Dirección" required><br><br>
        <label>Fecha de nacimiento</label><br>
        <input type="date" name="fecha" placeholder="Fecha de nacimiento" required><br><br>

	    
        <input type="submit" name="registrar" value="Crear cuenta"><br><br>

	</form>

</body>
</html>