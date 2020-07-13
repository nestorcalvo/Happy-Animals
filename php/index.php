<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Animals - Care Center</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
   
    <script type="text/javascript" src="../js/java.js" charset="UTF-8"></script>
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
            <a href="formVoluntario.php"><h4 class="d-block1 w-100">Volunteer</h4></a>
          </div>
          <div class="carousel-item">
            <a href="adopt-a-pet.php"><h4 class="d-block1 w-100">Adopt</h4></a>
          </div>
        </div>
    </div>

    <div class="navbar fixed">

        <div class="col-lg-6 col-md-12 logo">
            <a href="index.php" class="navbar-brand"><img class="logo" src="../img/completelogo.PNG" alt="HappyAnimals"></a>
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
            <li class="nav-item"><a href="adopt-a-pet.php" class="nav-link">Adopt a pet</a></li>
            <li class="nav-item"><a href="adopcion.php" class="nav-link">Give up for adoption</a></li>
            <li class="nav-item"><a href="mapa.php" class="nav-link">Low-cost vet clinics</a></li>
            <li class="nav-item"><a href="formVoluntario.php" class="nav-link">Volunteer</a></li>
            <?php
                if((isset($_GET['sign_in']) && $_GET['sign_in'] == true)){
            ?>
            <li class="nav-item"><a href="index.php" class="nav-link" ><?php echo $_GET['id'] ?></a></li>
            <?php
                }else{
            ?>
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
    
                            <button class="btn btn-block" id="index.php" name="index" type="submit">Sing in</button><br>

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

                            <button class="btn btn-block" id="index.php" name="index" type="submit">Sing in</button><br>

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




        <div>
            <img src="../img/dog5.jpg" alt="dog" class="bg1">
            <h2 class="bg1">Become a <br> Lifesaver</h2><br>
            <h3 class="bg1">Rescue a pet</h3>
            <a href="adopt-a-pet.php"><button class="bg1">ADOPT NOW</button></a>
        </div>
    </nav>

    <div class="row mrg">

        <div class="col-lg-4 col-md-6">
            <div class="card w-75 card1" style="width: 18rem;">
                <img class="card-img-top" src="../img/dog1.jpg" alt="">
                <div class="card-body">
                    <div class="card-title">Help Our Animals</div>
                    <p class="card-text">
                        There are many ways you can help! You can donate money or food for our animals or also volunteer at our shelter. The homeless animals in our care appreciate your help.
                    </p>
                    <button class="card-btn" id="btn1"><span><a href="#" id="link1">LEARN MORE</a></span></button>
                </div>
            </div>
        </div>
      
        <div class="col-lg-4 col-md-6">
            <div class="card w-75 card2" style="width: 18rem;">
                <img class="card-img-top" src="../img/shelter.jpg" alt="">
                <div class="card-body">
                    <div class="card-title">Foster Field Trips</div>
                    <p class="card-text">
                        Foster an animal for as little as an afternoon, a weekend, or a few weeks through our Foster Field Trip Program. A mini-holiday away from the shelter allows pets to relax, de-stress and be themselves.
                    </p>
                    <button class="card-btn" id="btn2"><span><a href="#" id="link1">LEARN MORE</a></span></button>
                </div>
            </div>
        </div>
      
      
        <div class="col-lg-4 col-md-12">
            <div class="card w-75 card3" style="width: 18rem;">
                <img class="card-img-top" src="../img/shelter1.jpg" alt="">
                <div class="card-body">
                    <div class="card-title">Find Vets Near You</div>
                    <p class="card-text">
                        We have the best low cost vets for your pet. They offer you spay and neuter, cat and dog vaccines, and microchipping for dogs and cats.
                    </p>
                    <button class="card-btn" id="btn3"><span><a href="#" id="link1">LEARN MORE</a></span></button>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row mrg">

        <div class="col-lg-9 col-md-12">
            <h2 class="shelter1">Our 2019 work by the numbers</h2>
            <img class="shelter1" src="../img/info.jpg" alt="Information">
        </div>

        <div class="col-lg-3 col-md-12">
            <div class="card w-60 card4" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-title">Newsletter Signup</div>
                    <p class="card-text">
                        Get all the latest news on Happy Animals

                        <form>
                            <div class="form-group">
                                <label class="label-title">First name</label>
                                <input class="form-control form-control-sm" type="text" name="First name" required>
                            </div>
                            <div class="form-group">
                                <label class="label-title">Last name</label>
                                <input class="form-control form-control-sm" type="text" name="Last name" required>
                            </div>
    
                            <button class="btn btn-block" id="form-button1" type="submit" data-dismiss="modal">Sing in</button><br>
                        </form>
                    </p>

                </div>
            </div>

            <div class="card w-60 card5" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-title">Hi, my name is Felix</div>
                    <img class="card-img" src="../img/dog7.jpg" alt="">
                    <button class="btn btn-block card-btn1">ADOPT ME!</button><br>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <img src="../img/shelter2.jpg" alt="Shelter" class="shelter">
        </div>
        
        <div class="col-lg-4 col-md-12">
            <h2 class="shelter">Who We Are</h2>
            <p class="shelter">Happy Animals Care Center, founded in 1993, is an animal shelter founded in Medellín, Colombia. Our mission is to save all healthy and treatable animals in the Las Vegas Valley. Last year we saved over 20,000 lost, homeless, and often mistreated animals.</p>
            <button class="btn btn-block card-btn1">Learn more about us</button><br>
        </div>
            
    </div>

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


</script>
</html>

