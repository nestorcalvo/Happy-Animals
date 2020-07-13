<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/style_admin.css">
</head>
<body>
    <ul>
        <li><a href="../php/voluntarios_add.php">Voluntarios</a></li>
        <li><a href="../php/solicitudes_add.php">Solicitudes para dar en adopción</a></li>
        <li><a href="../php/adopcion_acept.php">Solicitudes adopción</a></li>
        <li style="float:right"><a class="active" href="index.php" id="close_sesion">Cerrar sesion</a></li>
    </ul>
    <br>
    <table border = '2'>
        <tr>
            <th>Aceptar</th>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Tiempo</th>
            <th>Razón</th>
            <th>Nombre del animal</th>
            <th>Especie</th>
            <th>Nacimiento del animal</th>
            <th>Sexo</th>
            <th>Tamaño</th>
            <th>Peso</th>
            <th>Vacunado</th>
            <th>Desparacitado</th>
            <th>Sano</th>
            <th>Microchip</th>
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
        $sql = "SELECT * FROM dar_adopcion WHERE revisado = 'no'";
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
                    echo "<form method='post' name='check_solicitudes' id = 'check_solicitudes' action='check.php'>";



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
                    echo "<td>" .  $rows['tiempo'] . "</td>" ;
                    echo "<td>" .  $rows['razón'] . "</td>" ;
                    echo "<td>" .  $rows['nombre_animal'] . "</td>" ;
                    echo "<td>" .  $rows['especie'] . "</td>" ;
                    echo "<td>" .  $rows['nacimiento_animal'] . "</td>" ;
                    echo "<td>" .  $rows['sexo'] . "</td>" ;
                    echo "<td>" .  $rows['tamaño'] . "</td>" ;
                    echo "<td>" .  $rows['peso'] . "</td>" ;
                    echo "<td>" .  $rows['vacunado'] . "</td>" ;
                    echo "<td>" .  $rows['desparacitado'] . "</td>" ;
                    echo "<td>" .  $rows['sano'] . "</td>" ;
                    echo "<td>" .  $rows['microchip'] . "</td>" ;
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
