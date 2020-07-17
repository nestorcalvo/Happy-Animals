<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/style_admin.css">
</head>
<body>
    <nav>
        <ul>
            <li><a class="active"  href="../php/voluntarios_add.php">Voluntarios</a></li>
            <li><a href="../php/solicitudes_add.php">Solicitudes para dar en adopción</a></li>
            <li><a href="../php/adopcion_acept.php">Solicitudes adopción</a></li>
            <li style="float:right"><a href="index.php" id="close_sesion">Cerrar sesion</a></li>
        </ul>
    </nav>
    <br>
    <table border = '2'>
        <tr>
            <th>Aceptar</th>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha de nacimiento</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Celular</th>
            <th>Telefono</th>
            <th>Ocupacion</th>

        </tr>
        <?php
        #Open database and extract values
        #Contectarse al servidor
        $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
        $conectar->set_charset("utf8");
        if($conectar->connect_error){
            echo "No se pudo conectar con el server";
        }
        $user = 'admin';
        $sql = "SELECT * FROM voluntarios WHERE revisado = 'no'";
        $ejecutar = $conectar->query($sql);

        if(!$ejecutar){
            echo "Hubo error al ejectuar la cola";
            echo "<br>";
            echo $conectar->error;
        }
        else{
        ?>

        <?php
        while($rows = mysqli_fetch_array($ejecutar)){
            echo "<form method='post' name='check_solicitudes_vol' id = 'check_solicitudes_vol' action='check_voluntarios.php'>";



            echo "<tr>";
            echo "<td>";
            ?>
            <input type='checkbox' id =<?php echo $rows['id'] ?>  name=<?php echo $rows['id'] ?>>
            <?php
            echo "</td>";
            echo "<td>" .  $rows['id'] . "</td>" ;
            echo "<td>" .  $rows['nombres'] . "</td>" ;
            echo "<td>" .  $rows['apellidos'] . "</td>" ;
            echo "<td>" .  $rows['fecha'] . "</td>" ;
            echo "<td>" .  $rows['correo'] . "</td>" ;
            echo "<td>" .  $rows['direccion'] . "</td>" ;
            echo "<td>" .  $rows['celular'] . "</td>" ;
            echo "<td>" .  $rows['telefono'] . "</td>" ;
            echo "<td>" .  $rows['ocupacion'] . "</td>" ;

            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <input type="submit" value="Enviar">
    <?php
    }
    ?>
</body>
</html>
<?php
