<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Animals - Care Center</title>

    <link rel="stylesheet" type="text/css" href="../css/style4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
        <p class="position">Home / Give up for adoption</p>
        <h3 class="position">Give up for adoption</h3>
        <img class="position" src="../img/paw.png" alt="">
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form">
            <h2 class="giveup">Personal Information</h2>
            
                <form action="form1.php" method="post" id="animals" enctype="multipart/form-data">
                    <br>
                    <label>Name</label><br>
                    <input type="text" name="nombre" id="nombre" required>
                    <br><br>
        
                    <label>E-mail</label><br>
                    <input type="email" name="correo" required>
                    <br><br>
        
                    <label>Phone Number</label><br>
                    <input type="text" name="tel" required>
                    <br><br>
        
                    <label>How long have you been with the pet (in days) </label><br>
                    <input type="number" name="tiempo" required>
                    <br><br>
        
                    <label>Explain why you want to give the pet up for adoption</label><br>
                    
                    <input type="text" name="razon" placeholder="Give a detailed explanation" required
                           size="50" style="height: 200px">
                <!--</form>-->

            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form">
                <h2 class="giveup">Animal Information</h2>
                <!--<form action="php/form1.php" method="post" id="animals_2">-->
                    <br>
                    <label>Name </label><br>
                    <input type="text" name="nombre_animal" required>
                    <br><br>

                    <label for="especie">Species</label><br>
                    <select id="especie" name="especie" form="animals">
                        <option value="Perro">Dog</option>
                        <option value="Gato">Cat</option>
                        <option value="Conejo">Small mammal</option>
                    </select>
                    <br><br>

                    <label>Animal's date of birth</label><br>
                    <input type="date" name="nacimiento_animal" placeholder="dd/mm/yy" required>
                    <br><br>

                    <label>Color </label><br>
                    <input type="text" name="color" required>
                    <br><br>

                    <label>Direccion </label><br>
                    <input type="text" name="direccion" required>
                    <br><br>

                    <label for="sexo">Sex </label><br>
                    <select id="sexo" name="sexo" form="animals" required>
                        <option value="Masculino">Male</option>
                        <option value="Femenino">Female</option>
                    </select>
                    <br><br>

                    <label for="tamaño">Size</label><br>
                    <select id="tamaño" name="tamaño" form="animals" required>
                        <option value="Pequeño">Small</option>
                        <option value="Mediano">Medium</option>
                        <option value="Grande">Large</option>
                    </select>
                    <br><br>

                    <label>Weight (Kg)</label><br>
                    <input type="number" name="peso" required>
                    <br>
                    <br>
                    <br>
                    <h2 class="giveup">Animal's Condition</h2><br>

                    <input type="checkbox" name="vacunado" id="vacunado">
                    <label for="vacunado"> Vaccinated</label><br>

                    <input type="checkbox" name="desparacitado" id="desparacitado">
                    <label for="desparacitado"> Dewormed</label><br>

                    <input type="checkbox" name="sano" id="sano">
                    <label for="sano">Healthy</label><br>

                    <input type="checkbox" name="microchip" id="microchip">
                    <label for="microchip"> Microchip</label><br>

                    <br><label for="image_animal">Upload a picture</label><br>
                    <input type="file" name="file" id="file">


                    <input type="submit" id="submit_button" value="Send">
            </form>
            <a href="index.php">
                <input type="button" value="Back to Homepage">
            </a>
        </div>
        <br>
        <br>
        <br>
        </div>

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
</html>