<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voluntario</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Formulario de inscripción a voluntario</h2>
    <div class="form">
        <form action="controlSesionVoluntarios.php" method="post" id="adopt_animals">
        <?php
		 if(isset($_GET['error']) && $_GET['error']==true ){
            print("<h4>Error: Verifica tus datos y conexion a internet. </h4>");
            }
        if(isset($_GET['error2']) && $_GET['error2']==true ){
                print("<h4>Sus datos han sido ingresados con exito, muy pronto nos comunicaremos con usted. </h4>");
            }
       
        ?>
            <br>
            <label>Nombres: </label>
            <input type="text" name="nombres" placeholder="Nombres" value="<?php if (isset($_SESSION['nombres'])){ echo $_SESSION['nombres']; } ?>" required>
            <br>
            <label>Apellidos: </label>
            <input type="text" name="apellidos" placeholder="Apellidos" value="<?php if (isset($_SESSION['apellidos'])){ echo $_SESSION['apellidos']; } ?>" required>
            <br>
            <label>Fecha de nacimiento: </label>
            <input type="date" name="fecha" value="<?php if (isset($_SESSION['fecha'])){ echo $_SESSION['fecha']; } ?>" required>
            <br>
            <label>Correo: </label>
            <input type="email" name="correo" placeholder="ejemplo@correo.com" value="<?php if (isset($_SESSION['correo'])){ echo $_SESSION['correo']; } ?>" required>
            <br>
            <label>Numero de celular: </label>
            <input type="number" name="celular" placeholder="3000000001" value="<?php if (isset($_SESSION['celular'])){ echo $_SESSION['celular']; } ?>" required>
            <br>
            <label>Telefono fijo: </label>
            <input type="number" name="telefono" placeholder="2000001" value="<?php if (isset($_SESSION['telefono'])){ echo $_SESSION['telefono']; } ?>" >
            <br>
            <label>Direccion: </label>
            <input type="text" name="direccion" placeholder="Barrio Cl xx Cr xx # xx-xx" value="<?php if (isset($_SESSION['direccion'])){ echo $_SESSION['direccion']; } ?>" required>
            <br>
            <label>Ocupación: </label>
            <input type="text" name="ocupacion" placeholder="Estudiante,veterinari@,etc" value="<?php if (isset($_SESSION['ocupacion'])){ echo $_SESSION['ocupacion']; } ?>" required>
            <br>
            
            <br>
            <input type="submit" value="Enviar"><br><br>
        </form>
        

</body>
</html>