<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Voluntario</title>
    
    <link rel="stylesheet" type="text/css" href="../css/style5.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>


    <div id="carousel" class="carousel slide" data-ride="carousel">

        <?php
        if((isset($_GET['sign_in']) && $_GET['sign_in'] == true)){
            $id = $_GET['id'];
            ?>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><h4 class="d-block1 w-100">Donate now</h4></a>
                </div>
                <div class="carousel-item">
                    <a href="formVoluntario.php?sign_in=true&id=<?php echo $id?>"><h4 class="d-block1 w-100">Volunteer</h4></a>

                </div>
                <div class="carousel-item">
                    <a href="adopt-a-pet.php?sign_in=true&id=<?php echo $id?>"><h4 class="d-block1 w-100">Adopt</h4></a>
                </div>
            </div>

            <?php
        }else{
            ?>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><h4 class="d-block1 w-100">Donate now</h4></a>
                </div>
                <div class="carousel-item">
                    <a href="formVoluntario.php"><h4 class="d-block1 w-100">Volunteer</h4></a>
                </div>
                <div class="carousel-item">
                    <a href="adopt-a-pet.php"><h4 class="d-block1 w-100">Adopt</h4></a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <div class="navbar fixed">
        <?php
        if((isset($_GET['sign_in']) && $_GET['sign_in'] == true)){
            $id = $_GET['id'];
            ?>
            <div class="col-lg-6 col-md-12 logo">
                <a href="index.php?sign_in=true&id=<?php echo $id?>" class="navbar-brand"><img class="logo" src="../img/completelogo.PNG" alt="HappyAnimals"></a>
            </div>
            <?php
        }else{
            ?>
            <div class="col-lg-6 col-md-12 logo">
                <a href="index.php" class="navbar-brand"><img class="logo" src="../img/completelogo.PNG" alt="HappyAnimals"></a>
            </div>
            <?php
        }
        ?>
        <div class="col-lg-2 col-md-12">
            <h3 class="nav-title">ADOPT : </h3>
        </div>

        <div class="col-lg-4 col-md-12">

            <div class="multi-button">
                <a href="adopt-a-pet.php?search=cats" ><button><img class="icon" src="../img/gatos.png" alt="cats"></button></a>
                <a href="adopt-a-pet.php?search=dogs" ><button><img class="icon" src="../img/perro.png" alt="dogs"></button></a>
                <a href="adopt-a-pet.php?search=bunny" ><button><img class="icon" src="../img/conejo.png" alt="bunnies"></button></a>
            </div>

        </div>
    </div>
    <nav>
        <ul class="nav-list">
            <?php
            if((isset($_GET['sign_in']) && $_GET['sign_in'] == true)){
                $id = $_GET['id'];
                ?>
                <li class="nav-item"><a href="adopt-a-pet.php?sign_in=true&id=<?php echo $id?>" class="nav-link">Adopt a pet</a></li>
                <li class="nav-item"><a href="adopcion.php?sign_in=true&id=<?php echo $id?>" class="nav-link">Give up for adoption</a></li>
                <li class="nav-item"><a href="mapa.php?sign_in=true&id=<?php echo $id?>" class="nav-link">Low-cost vet clinics</a></li>
                <li class="nav-item"><a href="formVoluntario.php?sign_in=true&id=<?php echo $id?>" class="nav-link">Volunteer</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link" ><?php echo $_GET['id'] ?></a></li>
                <?php
            }else{
                ?>
                <li class="nav-item"><a href="adopt-a-pet.php" class="nav-link">Adopt a pet</a></li>
                <li class="nav-item"><a href="adopcion.php" class="nav-link">Give up for adoption</a></li>
                <li class="nav-item"><a href="mapa.php" class="nav-link">Low-cost vet clinics</a></li>
                <li class="nav-item"><a href="formVoluntario.php" class="nav-link">Volunteer</a></li>
                <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#modal_info1">Sign in</a></li>
                <?php
            }
            ?>
        </ul>


        <?php

        if (isset($_GET['error']) && $_GET['error'] == true) {

            ?>
            <div class="modal fade" id="modal_info1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title w-100">Sign in</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form  method="post" action="controlSesionLogin.php">
                                <div class="form-group">
                                    <h2>Usuario o contraseña incorrectos</h2>
                                </div>
                                <div class="form-group">
                                    <label class="label-title">Nickname</label>
                                    <input class="form-control form-control-sm" type="text" name="usuario" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-title">Password	</label><input class="form-control form-control-sm" type="password" name="contrasena" size="6" maxlength="10" required>
                                </div>

                                <button class="btn btn-block" id="form-button" name="index" type="submit">Sing in</button><br>

                                <a href="recuperarcontrasena.php" class="form-title">Forgot your password?</a><br>

                                <a href="registro.php" class="form-title">Not registered yet? Sign up!</a>

                                <img src="../img/logo.png" alt="logo" class="logo1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }else{

            ?>
            <div class="modal fade" id="modal_info1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title w-100">Sign in</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form  method="post" action="controlSesionLogin.php">

                                <div class="form-group">
                                    <label class="label-title">Nickname</label>
                                    <input class="form-control form-control-sm" type="text" name="usuario" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-title">Password	</label><input class="form-control form-control-sm" type="password" name="contrasena" size="6" maxlength="10" required>
                                </div>

                                <button class="btn btn-block" id="form-button" name="index" type="submit">Sing in</button><br>

                                <a href="recuperarcontrasena.php" class="form-title">Forgot your password?</a><br>

                                <a href="registro.php" class="form-title">Not registered yet? Sign up!</a>

                                <img src="../img/logo.png" alt="logo" class="logo1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </nav>

    <div class="position">
        <p class="position">Home / Volunteer</p>
        <h3 class="position">Volunteer</h3>
        <img class="position" src="../img/paw.png" alt="">
    </div>

    <div>
       <img src="../img/dog2.jpg" alt="Happy Animals" class="background">
    </div>

<div class="row mrg">

<div class="col-lg-4 col-md-6">
    <div class="card card1">
        <img class="card-img-top" src="../img/dog9.jpg" alt="">
        <div class="card-body">
            <div class="card-title">About Volunteering</div>
            <p class="card-text">
                All your questions about volunteering at Happy Animals are answered here. In addition to animal shelter volunteers, we always need volunteers for events and to help in departments across the organization. We welcome volunteer groups as well!
            </p>
            <button class="card-btn" id="btn1"><span><a href="#" id="link1">LEARN MORE</a></span></button>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="card card2">
        <img class="card-img-top" src="../img/cat1.jpg" alt="">
        <div class="card-body">
            <div class="card-title">Foster a Pet</div>
            <p class="card-text">
                When you volunteer to foster a pet in need, you’re providing a lifeline for an animal who may be having difficulty adjusting to animal shelter life, needs a little extra care to recuperate from an injury, or who is young and needs time to grow before being ready for adoption. No special skills are required, and we provide you with everything you need.
            </p>
            <button class="card-btn" id="btn2"><span><a href="#" id="link1">LEARN MORE</a></span></button>
        </div>
    </div>
</div>


<div class="col-lg-4 col-md-12">
    <div class="card card3">
        <img class="card-img-top" src="../img/dog8.jpg" alt="">
        <div class="card-body">
            <div class="card-title">Volunteer Opportunities</div>
            <p class="card-text">
                Happy Animals offers a wide variety of opportunities to volunteer in Las Vegas. Our volunteer staff will be happy to work with you to make sure you find a volunteer opportunity that is a good fit for you. No special skills are needed, just compassion, patience, and commitment. We’ll provide all the training you need to make your volunteer experience fulfilling
            </p>
            <button class="card-btn" id="btn3"><span><a href="#" id="link1">LEARN MORE</a></span></button>
        </div>
    </div>
</div>

</div>


        <div class="container" >

            <h2 class="text-center">Sign up to Volunteer</h2>  
            <form  action="controlSesionVoluntarios.php" method="post" id="adopt_animals" >
            <?php
            if(isset($_GET['error']) && $_GET['error']==true ){
                print("<h4>Error: Verifica tus datos y conexion a internet. </h4>");
                }
            if(isset($_GET['error2']) && $_GET['error2']==true ){
                    print("<h4>Sus datos han sido ingresados con exito, muy pronto nos comunicaremos con usted. </h4>");
                }

            ?>
                <br>            

                <label for="nombre">Name </label><br>
                <input type="text" id="nombre" name="nombres"  value="<?php if (isset($_SESSION['nombres'])){ echo $_SESSION['nombres']; } ?>" required><br><br>

                <label for="apellido" >Lastname </label><br>
                <input type="text" id="apellido"  name="apellidos"  value="<?php if (isset($_SESSION['apellidos'])){ echo $_SESSION['apellidos']; } ?>" required><br><br>

                <label for="fecha" >Birthday </label><br>
                <input type="date" id="fecha" name="fecha" value="<?php if (isset($_SESSION['fecha'])){ echo $_SESSION['fecha']; } ?>" required><br>
            
                <label for="correo">E-mail </label><br>
                <input type="email" id="correo" name="correo" value="<?php if (isset($_SESSION['correo'])){ echo $_SESSION['correo']; } ?>" required><br><br>
                
                <label for="celular" >Phone Number </label><br>
                <input type="text" id="celular" name="celular" value="<?php if (isset($_SESSION['celular'])){ echo $_SESSION['celular']; } ?>" required><br><br>
                
                <label for="fijo">Home Phone Number </label><br>
                <input type="text" id="fijo" name="telefono" value="<?php if (isset($_SESSION['telefono'])){ echo $_SESSION['telefono']; } ?>" ><br><br>

                <label for="direccion" >Home Address </label><br>
                <input type="text" id="direccion"  name="direccion" value="<?php if (isset($_SESSION['direccion'])){ echo $_SESSION['direccion']; } ?>" required><br><br>

                <label for="ocupacion">Profession </label><br>
                <input type="text" id="ocupacion" name="ocupacion" value="<?php if (isset($_SESSION['ocupacion'])){ echo $_SESSION['ocupacion']; } ?>" required><br><br>

                <br>
                <input  type="submit" class="card-btn2" value="Send"><br>
                <br>
                <a href="index.php"><input type="button" class="card-btn2" value="Back to home"></a>
                
            </form>
        </div>

    <?php
    if((isset($_GET['sign_in']) && $_GET['sign_in'] == true)){
        $id = $_GET['id'];
        ?>
        <div class="second-menu">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <a href="adopt-a-pet.php?sign_in=true&id=<?php echo $id?>" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Adopt</h3>
                            <p class="second-menu">Save a life today and add someone special to your family</p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Donate</h3>
                            <p class="second-menu">Help give animals the life they deserve</p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="mapa.php?sign_in=true&id=<?php echo $id?>" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Low-Cost Clinics</h3>
                            <p class="second-menu">Find directions here</p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="formVoluntario.php?sign_in=true&id=<?php echo $id?>" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Volunteer</h3>
                            <p class="second-menu">Help at the shelter or foster some furry friends</p>
                        </div></a>
                </div>
            </div>
        </div>
        <?php
    }else{
        ?>
        <div class="second-menu">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <a href="adopt-a-pet.php" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Adopt</h3>
                            <p class="second-menu">Save a life today and add someone special to your family</p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Donate</h3>
                            <p class="second-menu">Help give animals the life they deserve</p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="mapa.php" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Low-Cost Clinics</h3>
                            <p class="second-menu">Find directions here</p>
                        </div></a>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="voluntarios.php" class="second-menu"><div class="second-menu-h">
                            <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                            <h3 class="second-menu">Volunteer</h3>
                            <p class="second-menu">Help at the shelter or foster some furry friends</p>
                        </div></a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    <footer>
        <div class="row mrg">
            <div class="col-lg-4 col-md-12">
                <h6 class="cu">Contact Us</h6>
                             
                <ul class="cu">
                    <li class="cu"><img class="cu" src="../img/telefono.png" alt="phone">+57 123 456 7890</li>
                    <li class="cu"><img class="cu" src="../img/correo-electronico.png" alt="email">happyanimals@foundation.com</li>
                    <li class="cu"><img class="cu" src="../img/alfiler.png" alt="map">744 Evergreen Terrace - Medellín, Antioquia</li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h3 class="ficon">Follow Us!</h3>
                <div class="social">
                    <a href="#" class="ficon"><img class="icon-footer" src="../img/instagram-sketched.png" alt="ig"></a>
                    <a href="#" class="ficon"><img class="icon-footer" src="../img/facebook.png" alt="fb"></a>
                    <a href="#" class="ficon"><img class="icon-footer" src="../img/twitter.png" alt="tl"></a>
                    <a href="#" class="ficon"><img class="icon-footer" src="../img/yt.png" alt="yt"></a>
                </div>

                <img class="img-footer" src="../img/logo.png" alt="Happy Animals">
                <img  src="../img/logo1.png" alt="Happy Animals">
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