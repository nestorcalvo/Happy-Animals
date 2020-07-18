<?php
    #Contectarse al servidor
    $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
    $conectar->set_charset("utf8");
    if($conectar->connect_error){
        echo "No se pudo conectar con el server";
    }
    $user = $_POST['user_admin'];
    $correo = $_POST['email_admin'];
    $pass = $_POST['pass_admin'];

    $sql = "INSERT INTO administradores(usuarioadmin, correo, clave) VALUES ('$user','$correo','$pass')";
    $ejecutar = $conectar->query($sql);

    if(!$ejecutar){
        echo "Hubo error al ejectuar la cola";
        echo "<br>";
        echo $conectar->error;
    }
    else{
        echo "Usuario registrado correctamente";
    }
?>