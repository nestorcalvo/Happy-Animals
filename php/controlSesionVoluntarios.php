<?php
session_start();

require_once"../php/conexionBDL.php";

infovoluntarios();
function infovoluntarios(){
    $mysql = conexionSQL();
 
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha = $_POST['fecha']; 
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $celular = $_POST['celular'];
    $telefono = $_POST['telefono']; 
    $ocupacion = $_POST['ocupacion']; 
    
    $_SESSION['nombres']=$_POST['nombres'];
    $_SESSION['apellidos']= $_POST['apellidos'];
    $_SESSION['fecha']= $_POST['fecha'];
    $_SESSION['correo']= $_POST['correo'];
    $_SESSION['direccion']= $_POST['direccion'];
    $_SESSION['celular']=$_POST['celular'];
    $_SESSION['telefono']=$_POST['telefono'];
    $_SESSION['ocupacion']=$_POST['ocupacion'];

    $qv ="INSERT INTO voluntarios(nombres,apellidos,fecha,correo,direccion,celular,telefono,ocupacion) VALUES ('$nombres','$apellidos','$fecha','$correo','$direccion','$celular','$telefono','$ocupacion')";
    $insertar = $mysql->query($qv);
    print($insertar);

    if($insertar){
        header("Location:voluntarios.php?error2=true?");
        session_destroy();
        
    }else{
        header("Location:voluntarios.php?error=true?");

    }


    
}

?>