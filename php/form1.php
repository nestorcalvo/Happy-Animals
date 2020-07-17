<?php

    error_reporting(E_ALL ^ E_NOTICE);
    #Contectarse al servidor
    $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
    $conectar->set_charset("utf8");
    if(!$conectar){
        die('Conection failed:'.mysqli_connect_error());
    }
    if($conectar->connect_error){
        echo "No se pudo conectar con el server";
    }

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];
    $tiempo = $_POST['tiempo'];
    $razon = $_POST['razon'];
    $direccion = $_POST['direccion'];
    $color = $_POST['color'];
    $nombre_animal = $_POST['nombre_animal'];
    $especie = $_POST['especie'];
    $fecha_nacimiento = $_POST['nacimiento_animal'];
    $sex = $_POST['sexo'];
    $tamaño = $_POST['tamaño'];
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
/*
    $name =$_FILES['file']['name'];
    $target_dir = "uploads/";
    #$full_path = $target_dir .'/'. $name;
    if ($name != ''){
        $target_file = $target_dir . basename($_FILES['file']['name']);
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");


        // Check extension
        if( in_array($imageFileType,$extensions_arr) ) {

            // Convert to base64
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
            $image = "data::image/" . $imageFileType . ";base64," . $image_base64;
            #sentencia
        }
    }*/
    $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));

    $sql = "INSERT INTO dar_adopcion(nombre,correo,tel,tiempo,razón,nombre_animal,especie,nacimiento_animal,sexo,tamaño,peso,vacunado,desparacitado,sano,microchip,img_animal,color,direccion) VALUES('$nombre',
                                        '$correo',
                                        '$tel',
                                        '$tiempo',
                                        '$razon','$nombre_animal','$especie','$fecha_nacimiento','$sex','$tamaño',
                                        '$peso','$vacunado','$desparacitado','$sano','$microchip','".$image."','$color','$direccion')";

    $ejecutar = $conectar->query($sql);


    if(!$ejecutar){
        echo "Hubo error al ejectuar la cola";
    }
    else{
        header("Location: index.php");
    }
