<?php
    error_reporting(E_ALL ^ E_NOTICE);
    #Contectarse al servidor
    $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
    $conectar->set_charset("utf8");
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

    $target_dir = "../uploads/";
    $file_name = basename($_FILES[$_POST["image_animal"]][$_POST["nombre_animal"]]);
    $target_file = $target_dir .$file_name;
    $uploadOk = 1;
    $fileType = pathinfo( $target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$_POST["image_animal"]][$_POST["nombre_animal"]]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    #sentencia
    $sql = "INSERT INTO dar_adopcion(nombre,correo,tel,tiempo,razón,nombre_animal,especie,nacimiento_animal,sexo,tamaño,peso,vacunado,desparacitado,sano,microchip,img_animal,color,direccion) VALUES('$nombre',
                                        '$correo',
                                        '$tel',
                                        '$tiempo',
                                        '$razon','$nombre_animal','$especie','$fecha_nacimiento','$sex','$tamaño',
                                        '$peso','$vacunado','$desparacitado','$sano','$microchip','".$file_name."','$color','$direccion')";

    $ejecutar = $conectar->query($sql);

    if(!$ejecutar){
        echo "Hubo error al ejectuar la cola";
    }
    else{
        echo "Datos almacenados correctamente <br><a href='index.php'><input type='button' value='volver'></a>";
    }
