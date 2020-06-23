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
        <form action="controlVoluntaios.php" method="post" id="adopt_animals">
            <br>
            <label>Nombre: </label>
            <input type="text" name="nombres" placeholder="Nombres" required>
            <br>
            <label>Apellidos: </label>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <br>
            <label>Fecha de nacimiento: </label>
            <input type="date" name="fecha"  required>
            <br>
            <label>Correo: </label>
            <input type="email" name="correo" placeholder="ejemplo@correo.com" required>
            <br>
            <label>Numero de celular: </label>
            <input type="number" name="celular" placeholder="3000000001" required>
            <br>
            <label>Telefono fijo: </label>
            <input type="number" name="celular" placeholder="2000001" >
            <br>
            <label>Direccion: </label>
            <input type="text" name="direccion" placeholder="Barrio Cl xx Cr xx # xx-xx" required>
            <br>
            <label>Ocupación: </label>
            <input type="text" name="direccion" placeholder="Estudiante,veterinari@,etc" required>
            <br>
            
            <br>
            <input type="submit" value="Enviar">
        </form>

</body>
</html>