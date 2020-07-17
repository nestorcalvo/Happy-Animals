<!DOCTYPE html>
<html>
<head>
	<title>Happy Animals</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style4.css">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATRQPJ5gQSHi4WlVmt7CqmzyP3d0-rIpw&libraries=places" async defer></script>
    <script type="text/javascript" src="../js/iniciarmapa.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script type="text/javascript" src="../js/java.js" charset="UTF-8"></script>
	<script src="jquery-3.4.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body >


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

            <?php
            if((isset($_GET['sign_in']) && $_GET['sign_in'] == true)){
                $id = $_GET['id'];
                ?>
                <div class="multi-button">
                    <a href="adopt-a-pet.php?search=cats&sign_in=true&id=<?php echo $id?>" ><button><img class="icon" src="../img/gatos.png" alt="cats"></button></a>
                    <a href="adopt-a-pet.php?search=dogs&sign_in=true&id=<?php echo $id?>" ><button><img class="icon" src="../img/perro.png" alt="dogs"></button></a>
                    <a href="adopt-a-pet.php?search=bunny&sign_in=true&id=<?php echo $id?>" ><button><img class="icon" src="../img/conejo.png" alt="bunnies"></button></a>
                </div>
                <?php
            }else{
                ?>
                <div class="multi-button">
                    <a href="adopt-a-pet.php?search=cats" ><button><img class="icon" src="../img/gatos.png" alt="cats"></button></a>
                    <a href="adopt-a-pet.php?search=dogs" ><button><img class="icon" src="../img/perro.png" alt="dogs"></button></a>
                    <a href="adopt-a-pet.php?search=bunny" ><button><img class="icon" src="../img/conejo.png" alt="bunnies"></button></a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <nav>
        <ul class="nav-list">
            <input type="button" value="🞬" id="nav-button" onclick="change()">
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
        <p class="position">Home / Low-cost Vet Clinics</p>
        <h3 class="position">Find your Nearest Vet</h3>
        <img class="position" src="../img/paw.png" alt="">
    </div>
	
	<a href="index.php"><input type="button" class="card-btn2" value="Back to Home"></a>
    <div id="mapa">

	</div>
	<div id="ubicacion"></div>
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
                <img src="../img/logo1.png" alt="Happy Animals">
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
  
}

$("#color_me").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me").attr("class", color);
});

</script>
</html>