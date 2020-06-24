<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <ul>
        <li><a href="voluntarios_add.php">Voluntarios</a></li>
        <li><a class="active" href="solicitudes_add.php">Solicitudes adopción</a></li>
        <li><a href="adopcion_acept.php">Solicitudes adopción</a></li>
        <li style="float:right"><a href="../index.html" id="close_sesion">Cerrar sesion</a></li>
    </ul>
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
        ?>
                    <input type='checkbox' id =<?php echo $rows['id'] ?>  name=<?php echo $rows['id'] ?>>

        <?php
                    echo $rows['id'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['nombre'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['correo'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['tel'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['tiempo'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['razón'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['nombre_animal'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['especie'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['nacimiento_animal'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['sexo'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['tamaño'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['peso'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['vacunado'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['desparacitado'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['sano'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo $rows['microchip'];
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";

                    echo "<br>";
                    echo "<br>";
                }
        ?>
                <br>
                <input type="submit" value="Enviar">
        <?php
            }
        ?>
</body>
</html>
