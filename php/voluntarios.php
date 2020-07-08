<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voluntario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
            <a href="php/voluntarios.php"><h4 class="d-block1 w-100">Volunteer</h4></a>
          </div>
          <div class="carousel-item">
            <a href="adopt-a-pet.html"><h4 class="d-block1 w-100">Adopt</h4></a>
          </div>
        </div>
    </div>

    <div class="navbar fixed">

        <div class="col-lg-6 col-md-12 logo">
            <a href="index.html" class="navbar-brand"><img class="logo" src="img/completelogo.PNG" alt="HappyAnimals"></a>          
        </div>

        <div class="col-lg-2 col-md-12">
            <h3 class="nav-title">ADOPT : </h3>
        </div>

        <div class="col-lg-4 col-md-12">            
 
            <div class="multi-button">
                <button><img class="icon" src="img/gatos.png" alt="cats"></button>
                <button><img class="icon" src="img/perro.png" alt="dogs"></button>
                <button><img class="icon" src="img/conejo.png" alt="bunnies"></button>
            </div>

        </div>        
    </div>

    <nav class="navigation">
        <ul class="nav-list">
            <input type="button" value="🞬" id="nav-button" onclick="change()">
            <li class="nav-item"><a href="adopt-a-pet.html" class="nav-link">Adopt a pet</a></li>
            <li class="nav-item"><a href="adopcion.html" class="nav-link">Give up for adoption</a></li>
            <li class="nav-item"><a href="mapa.html" class="nav-link">Low-cost vet clinics</a></li>
            <li class="nav-item"><a href="php/voluntarios.php" class="nav-link">Volunteer</a></li>
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
                        <form method="post" action="php/controlSesionLogin.php">
                            <div class="form-group">
                                <label class="label-title">Nickname</label>
                                <input class="form-control form-control-sm" type="text" name="usuario" required>
                            </div>
                            <div class="form-group">
                                <label class="label-title">Password	</label>
                                <input class="form-control form-control-sm" type="password" name="contrasena" size="6" maxlength="10" required>
                            </div>

                            <button class="btn btn-block" id="form-button" type="submit">Sing in</button><br>

                            <a href="php/recuperarcontrasena.php" class="form-title">Forgot your password?</a><br>

                            <a href="php/registro.php" class="form-title">Not registered yet? Sign up!</a>

                            <img src="img/logo.png" alt="logo" class="logo1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="position">
        <p class="position">Home / Adopt a Pet / Adopt me</p>
        <h3 class="position">Adoption</h3>
        <img class="position" src="img/paw.png" alt="">
    </div>


<h2>Formulario de inscripción a voluntario</h2>
    <div class="form">
        <form action="../php/controlSesionVoluntarios.php" method="post" id="adopt_animals">
        <?php
		 if(isset($_GET['error']) && $_GET['error']==true ){
            print("<h4>Error: Verifica tus datos y conexion a internet. </h4>");
            }
        if(isset($_GET['error2']) && $_GET['error2']==true ){
                print("<h4>Sus datos han sido ingresados con exito, muy pronto nos comunicaremos con usted. </h4>");
            }
       
        ?>
            <br>
            <label>Nombres: </label>
            <input type="text" name="nombres" placeholder="Nombres" value="<?php if (isset($_SESSION['nombres'])){ echo $_SESSION['nombres']; } ?>" required>
            <br>
            <label>Apellidos: </label>
            <input type="text" name="apellidos" placeholder="Apellidos" value="<?php if (isset($_SESSION['apellidos'])){ echo $_SESSION['apellidos']; } ?>" required>
            <br>
            <label>Fecha de nacimiento: </label>
            <input type="date" name="fecha" value="<?php if (isset($_SESSION['fecha'])){ echo $_SESSION['fecha']; } ?>" required>
            <br>
            <label>Correo: </label>
            <input type="email" name="correo" placeholder="ejemplo@correo.com" value="<?php if (isset($_SESSION['correo'])){ echo $_SESSION['correo']; } ?>" required>
            <br>
            <label>Numero de celular: </label>
            <input type="number" name="celular" placeholder="3000000001" value="<?php if (isset($_SESSION['celular'])){ echo $_SESSION['celular']; } ?>" required>
            <br>
            <label>Telefono fijo: </label>
            <input type="number" name="telefono" placeholder="2000001" value="<?php if (isset($_SESSION['telefono'])){ echo $_SESSION['telefono']; } ?>" >
            <br>
            <label>Direccion: </label>
            <input type="text" name="direccion" placeholder="Barrio Cl xx Cr xx # xx-xx" value="<?php if (isset($_SESSION['direccion'])){ echo $_SESSION['direccion']; } ?>" required>
            <br>
            <label>Ocupación: </label>
            <input type="text" name="ocupacion" placeholder="Estudiante,veterinari@,etc" value="<?php if (isset($_SESSION['ocupacion'])){ echo $_SESSION['ocupacion']; } ?>" required>
            <br>
            
            <br>
            <input type="submit" value="Enviar"><br><br>
        </form>
        
        <div class="second-menu">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <a href="" class="second-menu"><div class="second-menu-h">
                    <img class="second-menu" src="img/paw.png" alt="HappyAnimals">
                    <h3 class="second-menu">Adopt</h3>
                    <p class="second-menu">Save a life today and add someone special to your family</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="" class="second-menu"><div class="second-menu-h">
                    <img class="second-menu" src="img/paw.png" alt="HappyAnimals">
                    <h3 class="second-menu">Donate</h3>
                    <p class="second-menu">Help give animals the life they deserve</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="mapa.html" class="second-menu"><div class="second-menu-h">
                    <img class="second-menu" src="img/paw.png" alt="HappyAnimals">
                    <h3 class="second-menu">Low-Cost Clinics</h3>
                    <p class="second-menu">Find directions here</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="php/voluntarios.php" class="second-menu"><div class="second-menu-h">
                    <img class="second-menu" src="img/paw.png" alt="HappyAnimals">
                    <h3 class="second-menu">Volunteer</h3>
                    <p class="second-menu">Help at the shelter or foster some furry friends</p>
                </div></a>
            </div>
        </div> 
    </div>

    <footer>
        <div class="row mrg">
            <div class="col-lg-4 col-md-12">
                <h6 class="cu">Contact Us</h6>
                             
                <ul class="cu">
                    <li class="cu"><img class="cu" src="img/telefono.png" alt="phone">+57 123 456 7890</li>
                    <li class="cu"><img class="cu" src="img/correo-electronico.png" alt="email">happyanimals@foundation.com</li>
                    <li class="cu"><img class="cu" src="img/alfiler.png" alt="map">744 Evergreen Terrace - Medellín, Antioquia</li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h3 class="ficon">Follow Us!</h3>
                <div class="social">
                    <a href="#" class="ficon"><img class="icon-footer" src="img/instagram-sketched.png" alt="ig"></a>
                    <a href="#" class="ficon"><img class="icon-footer" src="img/facebook.png" alt="fb"></a>
                    <a href="#" class="ficon"><img class="icon-footer" src="img/twitter.png" alt="tl"></a>
                    <a href="#" class="ficon"><img class="icon-footer" src="img/yt.png" alt="yt"></a>
                </div>

                <img class="img-footer" src="img/logo.png" alt="Happy Animals">
                <img  src="img/logo1.png" alt="Happy Animals">
            </div>

            <div class="col-lg-4 col-md-12">
                <h3 class="table1">Hours of Operation</h3>
                <p class="table1">Adoptions and Spay & Neuter are by appointment only.Volunteering is partially working due to the Covid-19 pandemic . For details, <a href="#" class="table1">click here</a> .</p>

                <table class="egt">
                    <tr>                  
                      <td class="table1">Adoptions</td>                  
                      <td class="table1">Daily</td>                  
                      <td class="table1">11am - 7pm</td>                  
                    </tr>
                  
                    <tr>                  
                      <td class="table1">Spay & Neuter</td>                  
                      <td class="table1">Mon - Fri</td>                  
                      <td class="table1">9am - 4pm</td>                  
                    </tr>

                    <tr>                  
                        <td class="table1">Volunteering</td>                  
                        <td class="table1">Daily</td>                  
                        <td class="table1">10am - 7pm</td>                  
                      </tr>
                  
                  </table>
            </div>
        </div>
    </footer>

    <div class="cright">
        <h3 class="cright"> Copyright © 2020 Happy Animals. All Rights Reserved. Web Application by Victoria, Nestor & Manuela</h3>
    </div>

</body>
</html>