<?php
session_start();

require_once"../php/conexionBDL.php";

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
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['apellidos']= $_POST['apellidos'];
    $_SESSION['email']= $_POST['email'];
    $_SESSION['ciudad']= $_POST['ciudad'];
    $_SESSION['direccion']= $_POST['direccion'];
    $_SESSION['fecha']=$_POST['fecha'];

    if($_POST['contrasena']==$_POST['recontrasena']){
    $qr ="INSERT INTO usuarios(usuario,nombre,apellidos,correo,contrasena,recontrasena,ciudad,direccion,fecha) VALUES ('$usuario','$nombre','$apellidos','$email','$contrasena',' $recontrasena','$ciudad','$direccion','$fecha')";
    $insertar = $mysql->query($qr);
    print($insertar);

    if(!$insertar){
        
        header("Location:registro.php?error=true?");

    }else{
        header("Location:index.php");
        session_destroy();
    }
}else{
    header("Location:registro.php?error2=true?");
}

    
}

?>