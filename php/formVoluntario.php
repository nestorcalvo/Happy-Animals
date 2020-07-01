<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Voluntario</title>
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#"><h4 class="d-block1 w-100">Donate now</h4></a>                        
          </div>
          <div class="carousel-item">
            <a href="#"><h4 class="d-block1 w-100">Volunteer</h4></a>
          </div>
          <div class="carousel-item">
            <a href="#"><h4 class="d-block1 w-100">Adopt</h4></a>
          </div>
        </div>
    </div>

    <div class="navbar fixed">

        <div class="col-lg-6 col-md-12 logo">
            <a href="../html/inicio.html" class="navbar-brand"><img class="logo" src="../img/completelogo.PNG" alt="HappyAnimals"></a>          
        </div>

        <div class="col-lg-2 col-md-12">
            <h3 class="nav-title">ADOPT : </h3>
        </div>

        <div class="col-lg-4 col-md-12">            
 
            <div class="multi-button">
                <button><img class="icon" src="../img/gatos.png" alt="cats"></button>
                <button><img class="icon" src="../img/perro.png" alt="dogs"></button>
                <button><img class="icon" src="../img/conejo.png" alt="bunnies"></button>
            </div>

        </div>        
    </div>

    <nav>
        <ul class="nav-list">
            <input type="button" value="🞬" id="nav-button" onclick="change()">
            <li class="nav-item"><a href="#" class="nav-link">Adopt a pet</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Give up for adoption</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Low-cost vet clinics</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Volunteer</a></li>
            <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#modal_info1">Sign in</a></li>
        </ul>

        <div class="modal fade" id="modal_info1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title w-100">Sign in</h4>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
    
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="label-title">Nickname</label>
                                <input class="form-control form-control-sm" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label class="label-title">Password	</label><input class="form-control form-control-sm" type="password" name="password" size="6" maxlength="10" required>
                            </div>
    
                            <button class="btn btn-block" id="form-button" type="submit" data-dismiss="modal">Sing in</button><br>


                            <a href="#" class="form-title">Forgot your password?</a><br>                        
    
                            <a href="#" class="form-title">Not registered yet? Sign up!</a>

                            <img src="../img/logo.png" alt="logo" class="logo1">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img src="../img/dog5.jpg" alt="dog" class="bg1">

        </div>
    </nav>

   
    </div>
    <br><br>
    <h2 class="text-center">Formulario de inscripción a voluntario</h2>
    

    <div class="container" >
        
        <form  action="controlSesionVoluntarios.php" method="post" id="adopt_animals" >
        <?php
		 if(isset($_GET['error']) && $_GET['error']==true ){
            print("<h4>Error: Verifica tus datos y conexion a internet. </h4>");
            }
        ?>
            <br>
        
            <div class="form-group row">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="nombre">Nombres: </label>
            <input type="text" class="form-control col-5 col-sm-5 col-md-6 col-lg-7  " id="nombre"   name="nombres" placeholder="Nombres" value="<?php if (isset($_SESSION['nombres'])){ echo $_SESSION['nombres']; } ?>" required>
            </div>

            <div class="form-group row">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="apellido" >Apellidos: </label>
            <input type="text" class="form-control col-5 col-sm-5 col-md-6 col-lg-7" id="apellido"  name="apellidos" placeholder="Apellidos" value="<?php if (isset($_SESSION['apellidos'])){ echo $_SESSION['apellidos']; } ?>" required>
            </div>

            <div class="form-group row">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="fecha" >Fecha de nacimiento: </label>
            <input type="date" class="form-control col-5 col-sm-5 col-md-6 col-lg-7"  id="fecha" name="fecha" value="<?php if (isset($_SESSION['fecha'])){ echo $_SESSION['fecha']; } ?>" required>
           
            </div>

            <div class="form-group row ">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="correo">Correo electrónico: </label>
            <input type="email" class="form-control col-5 col-sm-5 col-md-6 col-lg-7"  id="correo" name="correo" placeholder="ejemplo@correo.com" value="<?php if (isset($_SESSION['correo'])){ echo $_SESSION['correo']; } ?>" required>
            
            </div>

            <div class="form-group row">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="celular" >Numero de celular: </label>
            <input type="number" class="form-control col-5 col-sm-5 col-md-6 col-lg-7"  id="celular" name="celular" placeholder="3000000001" value="<?php if (isset($_SESSION['celular'])){ echo $_SESSION['celular']; } ?>" required>
            
            </div>

            <div class="form-group row">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="fijo">Telefono fijo: </label>
            <input type="number" class="form-control col-5 col-sm-5 col-md-6 col-lg-7"  id="fijo" name="telefono" placeholder="2000001" value="<?php if (isset($_SESSION['telefono'])){ echo $_SESSION['telefono']; } ?>" >
        
            </div>

            <div class="form-group row">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="direccion" >Direccion: </label>
            <input type="text" class="form-control col-5 col-sm-5 col-md-6 col-lg-7" id="direccion"  name="direccion" placeholder="Barrio Cl 00 Cr 00 # 00-00" value="<?php if (isset($_SESSION['direccion'])){ echo $_SESSION['direccion']; } ?>" required>
            </div>

            <div class="form-group row">
            <label class="col-5 col-sm-3 col-md-2 col-form-label text-right ml-5" for="ocupacion">Ocupación: </label>
            <input type="text" class="form-control col-5 col-sm-5 col-md-6 col-lg-7" id="ocupacion" name="ocupacion" placeholder="Ejemplo: Estudiante" value="<?php if (isset($_SESSION['ocupacion'])){ echo $_SESSION['ocupacion']; } ?>" required>
            </div>
            
            <br>
            <input  type="submit" class="card-btn2" value="Enviar"><br>
            <br>
            <a href="../index.html"><input type="button" class="card-btn2" value="Volver"></a>
            
        </form>
        
        </div>
       
        

</body>
<script src="jquery-3.4.0.min.js"></script>


<script type="text/javascript">

function change() {
   
   if(document.getElementById("nav-button").value === "☰"){
       document.getElementById("nav-button").value = "🞬";
   }

   else{
       document.getElementById("nav-button").value = "☰";
   }

   $("li").toggle("slow");


</body>
</html>