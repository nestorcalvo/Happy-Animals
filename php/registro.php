<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Nueva cuenta</h1>

	<form method="POST" action="../php/controlSesionRegistro.php">
		<?php
		 if(isset($_GET['error']) && $_GET['error']==true ){
            print("<h4>Error: El nombre de usuario ya existe </h4>");
            }
         if(isset($_GET['error2']) && $_GET['error2']==true ){
                print("<h4>Error: Las contraseñas no coinciden </h4>");
                }
		?>
		
        <input type="text" name="usuario" placeholder="Usuario"  required value="<?php if (isset($_SESSION['usuario'])){ echo $_SESSION['usuario']; } ?>"><br><br>
        <input type="text" name="nombre" placeholder="Nombre" required value="<?php if (isset($_SESSION['nombre'])){ echo $_SESSION['nombre']; } ?>"><br><br>
        <input type="text" name="apellidos" placeholder="Apellidos" required value="<?php if (isset($_SESSION['apellidos'])){ echo $_SESSION['apellidos']; } ?>"><br><br>
        <input type="text" name="email" placeholder="Email" required value="<?php if (isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>"><br><br>
        <input type="password" name="contrasena" placeholder="Contraseña" required><br><br>
        <input type="password" name="recontrasena" placeholder="Confirmar Contraseña" required><br><br>
        <input type="text" name="ciudad" placeholder="Ciudad" required value="<?php if (isset($_SESSION['ciudad'])){ echo $_SESSION['ciudad']; } ?>"><br><br>
        <input type="text" name="direccion" placeholder="Dirección" required value="<?php if (isset($_SESSION['direccion'])){ echo $_SESSION['direccion']; } ?>"><br><br>
        <label>Fecha de nacimiento</label><br>
        <input type="date" name="fecha" placeholder="Fecha de nacimiento" required value="<?php if (isset($_SESSION['fecha'])){ echo $_SESSION['fecha']; } ?>"><br><br>

	    
        <input type="submit" name="registrar" value="Crear cuenta"><br><br>

	</form>

</body>
</html>