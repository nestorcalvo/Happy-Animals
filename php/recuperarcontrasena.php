<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['recuperar'])){
    require_once"./conexionBDL.php";
    $mysql = conexionSQL();

    $correo = $mysql -> real_escape_string($_POST['correo']);

    $qr =("SELECT * FROM usuarios WHERE correo='$correo'");
    $Email = $mysql->query($qr);

    if(mysqli_num_rows($Email)!=0){
        $row = $Email->fetch_assoc();
        session_start();
        $_SESSION['correo'] = $row['correo'];

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
       
        $mail = new PHPMailer(true);

        try{
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.live.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'vickypanda22@hotmail.com';                     // SMTP username
            $mail->Password   = 'tamxpsyps1';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('vickypanda22@hotmail.com', 'Happy Animals');
            $mail->addAddress($row['correo'], $row['nombre']);     // Add a recipient
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Recuperacion de contraseña';
            $mail->Body    = 'Tu contraseña es:'.$row['contrasena'];
        
            $mail->send();
            echo 'Mensaje enviado con exito';
        }catch (Exception $e) {
            echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
        }

    }else{
        print("<h4>Error:El email ingresado no existe en nuestros registros</h4><br>");
    }

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Recuperar contraseña</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Recuperar contraseña</h1>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<?php
		 if(isset($_GET['error']) && $_GET['error']==true ){
		print("<h4>Error:Nombre de usuario o contraseña invalido</h4><br>");
			}else{

            }
		?>

		<input type="text" name="correo" placeholder="Email" required><br><br>
        <input type="submit" name="recuperar" value="Recuperar"><br><br>
        <a href="login.php">Iniciar Sesión</a>

	</form>

</body>
</html>