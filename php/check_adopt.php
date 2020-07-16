<?php
    $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
    $conectar->set_charset("utf8");
    if($conectar->connect_error){
        echo "No se pudo conectar con el server";
    }
    foreach ($_POST as $key=>$value){
        $sql = "UPDATE adoptar SET revisado='si'WHERE id = $key";
        $ejecutar = $conectar->query($sql);
        if(!$ejecutar){
            echo "Hubo error al ejectuar la cola";
            echo "<br>";
            echo $conectar->error;
        }
    }


    header("Location: adopcion_acept.php");
