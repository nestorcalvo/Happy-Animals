<?php
    #Contectarse al servidor
    $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
    $conectar->set_charset("utf8");
    if($conectar->connect_error){
        echo "No se pudo conectar con el server";
    }
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tel = $_POST['celular'];
    $ingresos = $_POST['ingresos'];
    $tiempo_casa = $_POST['tiempo'];
    $familia = $_POST['familia'];
    $hogar = $_POST['size'];
    $razon = $_POST['razon'];

    #sentencia
    $sql = "INSERT INTO adoptar(nombre,correo,tel,ingresos,tiempo_casa,familiares,tamano_casa,razon) VALUES('$nombre',
                                            '$correo',
                                            '$tel',
                                            '$ingresos',
                                            '$tiempo_casa',
                                            '$familia',
                                            '$hogar',
                                            '$razon')";
    $ejecutar = $conectar->query($sql);
    if(!$ejecutar){
        echo "Hubo error al ejectuar la cola";
    }
    else{
        echo "Datos almacenados correctamente <br><a href='../index.html'><input type='button' value='volver'></a>";
    }
