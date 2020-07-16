<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style_admin.css">
</head>
<body>
<ul>
    <li><a href="../php/voluntarios_add.php">Voluntarios</a></li>
    <li><a href="../php/solicitudes_add.php">Solicitudes adopción</a></li>
    <li><a class="active" href="../php/adopcion_acept.php">Solicitudes adopción</a></li>
    <li style="float:right"><a href="index.php" id="close_sesion">Cerrar sesion</a></li>
</ul>
    <table border = '2'>
        <tr>
            <th>Aceptar</th>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Ingresos</th>
            <th>Tiempo en casa</th>
            <th>Familiares</th>
            <th>Tamaño de la casa</th>
            <th>Razón</th>

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
        $sql = "SELECT * FROM adoptar WHERE revisado = 'no'";
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
            echo "<form method='post' name='check_adopt' id = 'check_adopt' action='check_adopt.php'>";



            echo "<tr>";
            echo "<td>";
            ?>
            <input type='checkbox' id =<?php echo $rows['id'] ?>  name=<?php echo $rows['id'] ?>>
            <?php
            echo "</td>";
            echo "<td>" .  $rows['id'] . "</td>" ;
            echo "<td>" .  $rows['nombre'] . "</td>" ;
            echo "<td>" .  $rows['correo'] . "</td>" ;
            echo "<td>" .  $rows['tel'] . "</td>" ;
            echo "<td>" .  $rows['ingresos'] . "</td>" ;
            echo "<td>" .  $rows['tiempo_casa'] . "</td>" ;
            echo "<td>" .  $rows['familiares'] . "</td>" ;
            echo "<td>" .  $rows['tamano_casa'] . "</td>" ;
            echo "<td>" .  $rows['razon'] . "</td>" ;
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
