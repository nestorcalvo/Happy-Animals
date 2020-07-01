<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/style_admin.css">
</head>
<body>
    <ul>
        <li><a href="../php/voluntarios_add.php">Voluntarios</a></li>
        <li><a href="../php/solicitudes_add.php">Solicitudes para dar en adopción</a></li>
        <li><a href="../php/adopcion_acept.php">Solicitudes adopción</a></li>
        <li style="float:right"><a class="active" href="../index.html" id="close_sesion">Cerrar sesion</a></li>

    </ul>
    <h2>Perfil</h2>
        <?php
        #Contectarse al servidor
        $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
        $conectar->set_charset("utf8");
        if($conectar->connect_error){
            echo "No se pudo conectar con el server";
        }
        $user = 'admin';
        $sql = "SELECT * FROM `administradores` WHERE usuarioadmin = '$user'";
        $ejecutar = $conectar->query($sql);

        if(!$ejecutar){
            echo "Hubo error al ejectuar la cola";
            echo "<br>";
            echo $conectar->error;
        }
        else{
            while($rows = mysqli_fetch_assoc($ejecutar)){
                echo "<h2>Usuario:</h2>";
                echo $rows['usuarioadmin'];
                echo "<br>";
                echo "<h2>Correo:</h2>";
                echo $rows['correo'];

            }


        }
    ?>
    <h2>Añadir administrador</h2>
    <form action="add_admin.php" method="post" id="add_admin" target="frame_admin">
        <label for="add_admin">Usuario: </label>
        <input type="text" id="user_admin" name="user_admin" required>
        <br>
        <label for="add_admin">Email: </label>
        <input type="email" id="email_admin" name="email_admin" required>
        <br>
        <label for="add_admin">Password: </label>
        <input type="password" id="pass_admin" name="pass_admin" required>
        <br>
        <br>
        <input type="submit" value="Registrar">
    </form>
    <iframe name="frame_admin" frameborder="0">
    </iframe>

</body>
</html>


