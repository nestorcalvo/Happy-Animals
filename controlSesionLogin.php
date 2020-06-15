<?php 
require_once"./conexionBDL.php";

verificacion();
function verificacion(){
    $mysql = conexionSQL();

    $qa =("SELECT * FROM administradores WHERE usuarioadmin='".$_POST['usuario']."' AND clave ='".$_POST['contrasena']."'");
    $Admins = $mysql->query($qa);

    $qu =("SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND contrasena ='".$_POST['contrasena']."'");
    $Users = $mysql->query($qu);
    if(mysqli_num_rows($Admins)!=0){
    if(mysqli_num_rows($Admins)!=0){
		session_start();
			$_SESSION['userad']= $_POST['usuario'];
			$_SESSION['authadm']= true;
	}else{
		print("no hay usuarios");
    }

    if(isset($_SESSION['authadm']) && ($_SESSION['authadm']==true)){
        print("existe");
        header("Location:home1.php");
        }else{
            print("no existe");
            header("Location:login.php?error=true");
        }
    }else{

    if(mysqli_num_rows($Users)!=0){
		session_start();
			$_SESSION['user']= $_POST['usuario'];
			$_SESSION['authuse']= true;
	}else{
		print("no hay usuarios");
    }
   

    if(isset($_SESSION['authuse']) && ($_SESSION['authuse']==true)){
            print("existe");
            header("Location:home2.php");
            }else{
                print("no existe");
                header("Location:login.php?error=true");
            }
        }

}


?>