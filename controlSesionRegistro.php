<?php

require_once"./conexionBDL.php";

ingreso();
function ingreso(){
    $mysql = conexionSQL();

    $usuario = $_POST['usuario']; 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $recontrasena = $_POST['recontrasena'];
    $ciudad = $_POST['ciudad']; 
    $direccion = $_POST['direccion']; 
    $fecha = $_POST['fecha']; 

    $qr ="INSERT INTO usuarios(usuario,nombre,apellidos,correo,contrasena,recontrasena,ciudad,direccion,fecha) VALUES ('$usuario','$nombre','$apellidos','$email','$contrasena',' $recontrasena','$ciudad','$direccion','$fecha')";
    $insertar = $mysql->query($qr);
    print($insertar);

    if(!$insertar){
        
        header("Location:registro.php?error=true?");

    }else{
        header("Location:pagina.php");
    }

    
}

?>