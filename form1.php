<?php
    #Contectarse al servidor
    $conectar = new mysqli('localhost', 'root', '', 'formulario_1');
    $conectar->set_charset("utf8");
    if($conectar->connect_error){
        echo "No se pudo conectar con el server";
    }

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tel = $_POST['celular'];
    $tiempo = $_POST['tiempo'];
    $razon = $_POST['razon'];

    #sentencia
    $sql = "INSERT INTO usuario (nombre,correo, tel,tiempo,razón) VALUES('$nombre',
                                        '$correo',
                                        '$tel',
                                        '$tiempo',
                                        '$razon')";
    $ejecutar = $conectar->query($sql);

    if(!$ejecutar){
        echo "Hubo error al ejectuar la cola";
    }
    else{
        echo "Datos almacenados correctamente <br><a href='index.html'>Volver</a>";
    }
