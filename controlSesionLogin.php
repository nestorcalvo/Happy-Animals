<?php 
require_once"./conexionBDL.php";

verificacion();
function verificacion(){
    $mysql = conexionSQL();

    $qa =("SELECT * FROM administradores WHERE usuarioadmin='".$_POST['usuario']."' AND clave ='".$_POST['contrasena']."'");
    $Admins = $mysql->query($qa);

    $qu =("SELECT * FROM usuarios WHERE usuarioadmin='".$_POST['usuario']."' AND clave ='".$_POST['contrasena']."'");
    $Users = $mysql->query($qu);
    
    if(mysqli_num_rows($Admins)!=0){
		session_start();
			$_SESSION['user']= $_POST['usuario'];
			$_SESSION['auth']= true;
	}else{
		print("no hay usuarios");
    }
   
    if(isset($_SESSION['auth']) && ($_SESSION['auth']==true)){
        print("existe");
        header("Location:home.php");
        }else{
            print("no existe");
            header("Location:login.php?error=true");
        }

}


?>