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
    $nombre_animal = $_POST['nombre_A'];
    $especie = $_POST['animals_list'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sex = $_POST['animals_sex'];
    $tamaño = $_POST['tamaño_animal'];
    $peso = $_POST['peso'];
    if(isset($_POST['vacunado'])){
        $vacunado = 'si';
    }
    else{
        $vacunado = 'no';
    }
    if(isset($_POST['desparacitado'])){
        $desparacitado = 'si';
    }
    else{
        $desparacitado = 'no';
    }
    if(isset($_POST['sano'])){
        $sano = 'si';
    }
    else{
        $sano = 'no';
    }
    if(isset($_POST['microchip'])){
        $microchip = 'si';
    }
    else{
        $microchip = 'no';
    }

    #sentencia
    $sql = "INSERT INTO dar_adopcion VALUES('$nombre',
                                        '$correo',
                                        '$tel',
                                        '$tiempo',
                                        '$razon','$nombre_animal','$especie','$fecha_nacimiento','$sex','$tamaño',
                                        '$peso','$vacunado','$desparacitado','$sano','$microchip')";
    $ejecutar = $conectar->query($sql);

    if(!$ejecutar){
        echo "Hubo error al ejectuar la cola";
    }
    else{
        echo "Datos almacenados correctamente <br><a href='../index.html'>Volver</a>";
    }
