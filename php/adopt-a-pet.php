<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Animals - Care Center</title>

    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<script src="jquery-3.4.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"><h4 class="d-block1 w-100">Donate now</h4></a>
        </div>
        <div class="carousel-item">
            <a href="#"><h4 class="d-block1 w-100">Volunteer</h4></a>
        </div>
        <div class="carousel-item">
            <a href="adopt-a-pet.php"><h4 class="d-block1 w-100">Adopt</h4></a>
        </div>
    </div>
</div>

<div class="navbar fixed">

    <div class="col-lg-6 col-md-12 logo">
        <a href="../index.html" class="navbar-brand"><img class="logo" src="../img/completelogo.PNG" alt="HappyAnimals"></a>
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
        <li class="nav-item"><a href="../php/adopt-a-pet.php" class="nav-link">Adopt a pet</a></li>
        <li class="nav-item"><a href="../adopcion.html" class="nav-link">Give up for adoption</a></li>
        <li class="nav-item"><a href="../mapa.html" class="nav-link">Low-cost vet clinics</a></li>
        <li class="nav-item"><a href="../php/voluntarios.php" class="nav-link">Volunteer</a></li>
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
                    <form method="post" action="../php/controlSesionLogin.php">
                        <div class="form-group">
                            <label class="label-title">Nickname</label>
                            <input class="form-control form-control-sm" type="text" name="usuario" required>
                        </div>
                        <div class="form-group">
                            <label class="label-title">Password	</label>
                            <input class="form-control form-control-sm" type="password" name="contrasena" size="6" maxlength="10" required>
                        </div>

                        <button class="btn btn-block" id="form-button" type="submit">Sing in</button><br>

                        <a href="../php/recuperarcontrasena.php" class="form-title">Forgot your password?</a><br>

                        <a href="../php/registro.php" class="form-title">Not registered yet? Sign up!</a>

                        <img src="../img/logo.png" alt="logo" class="logo1">
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="position">
    <p class="position">Home / Adopt a Pet</p>
    <h3 class="position">Adoption Search</h3>
    <img class="position" src="../img/paw.png" alt="">
</div>

<div class="filter">
    <ul class="filter">

        <li class="dropdown">
            <p class="filter">Type</p>
            <select class="filter">
                <option value="any">Any</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select>
        </li>

        <li class="dropdown">
            <p class="filter">Gender</p>
            <select class="filter">
                <option value="any">Any</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
            </select>
        </li>

        <li class="dropdown">
            <p class="filter">Size</p>
            <select class="filter">
                <option value="any">Any</option>
                <option value="sm">Small</option>
                <option value="m">Medium</option>
                <option value="l">Large</option>
                <option value="ktn">Kitten</option>
                <option value="py">Puppy</option>
            </select>
        </li>

        <button class="filter">SEARCH</button>

        <li class="dropdown"><a href="#" class="filter"><img class="icon" src="../img/filter.png">Reset filters</a></li>
    </ul>
</div>
<?php
    #Contectarse al servidor
    $conectar = new mysqli('localhost', 'root', '', 'happy_animals');
    $conectar->set_charset("utf8");
    $count = 0;


    if($conectar->connect_error){
        echo "No se pudo conectar con el server";
    }
    $sql = "SELECT * FROM `dar_adopcion` WHERE revisado = 'si'";
    $ejecutar = $conectar->query($sql);
    if(!$ejecutar){
        echo "Hubo error al ejectuar la cola";
        echo "<br>";
        echo $conectar->error;
    }
    else{
        $pila_id = array();
        $pila_name = array();
        $pila_gender = array();
        $pila_age = array();
        while($rows = mysqli_fetch_assoc($ejecutar)){
            $count = $count + 1;

            array_push($pila_id, $rows['id']);
            array_push($pila_name, $rows['nombre_animal']);
            array_push($pila_gender, $rows['sexo']);
            array_push($pila_age, $rows['nacimiento_animal']);

        }
        $number_rows_exact = (int)($count/3);
        $number_rows_rest = $count- ($number_rows_exact*3);
        for ($i = 0; $i< $number_rows_exact; $i++){

                ?>
                <br>
                <div class="row mrg">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="row">
                    <?php
                        for($j = 0; $j<=2;$j++){

                    ?>
                        <div class="col-lg-4 col-md-12">
                            <div class="card w-75 card-a" style="width: 18rem;">
                                <a href="adopt-me.html"><div class="hover-animation one" data-text="ADOPT ME"></div></a>
                                <div class="card-body">
                                    <a href="adopt-me.html"><div class="card-title" id="adp-title"><?php echo $pila_name[($j)+(3*$i)] ?></div></a>
                                    <p class="card-text">
                                    <div class="gender"><?php echo $pila_gender[($j)+(3*$i)] ?></div>
                                    <div class="age">Estimated: <?php echo $pila_age[($j)+(3*$i)] ?></div>
                                    <div class="code"><?php echo $pila_id[($j)+(3*$i)] ?></div>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php
                        }
                    ?>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <?php
            }
        if($number_rows_rest>0){

        ?>
            <br>
            <div class="row mrg">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">
                        <?php
                            for($h = 0; $h<=$number_rows_rest-1;$h++){

                        ?>
                            <div class="col-lg-4 col-md-12">
                                <div class="card w-75 card-a" style="width: 18rem;">
                                    <a href="adopt-me.html"><div class="hover-animation one" data-text="ADOPT ME"></div></a>
                                    <div class="card-body">
                                        <a href="adopt-me.html"><div class="card-title" id="adp-title"><?php echo $pila_name[($h)+(3*$i)] ?></div></a>
                                        <p class="card-text">
                                        <div class="gender"><?php echo $pila_gender[($h)+(3*$i)] ?></div>
                                        <div class="age">Estimated: <?php echo $pila_age[($h)+(3*$i)] ?></div>
                                        <div class="code"><?php echo $pila_id[($h)+(3*$i)] ?></div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!--                            <div class="col-lg-4 col-md-12">
                                                <div class="card w-75 card-a" style="width: 18rem;">
                                                    <a href=""><div class="hover-animation two" data-text="ADOPT ME"></div></a>
                                                    <div class="card-body">
                                                        <a href="adopt-me.html"><div class="card-title" id="adp-title"><?php /*echo $pila_name[1] */?></div></a>
                                                        <p class="card-text">
                                                        <div class="gender"><?php /*echo $pila_gender[1] */?></div>
                                                        <div class="age">Estimated: <?php /*echo $pila_age[1] */?></div>
                                                        <div class="code"><?php /*echo $pila_id[1] */?></div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-12">
                                                <div class="card w-75 card-a" style="width: 18rem;">
                                                    <a href=""><div class="hover-animation three" data-text="ADOPT ME"></div></a>
                                                    <div class="card-body">
                                                        <a href="adopt-me.html"><div class="card-title" id="adp-title"><?php /*echo $pila_name[2] */?></div></a>
                                                        <p class="card-text">
                                                        <div class="gender"><?php /*echo $pila_gender[2] */?></div>
                                                        <div class="age">Estimated: <?php /*echo $pila_age[2] */?></div>
                                                        <div class="code"><?php /*echo $pila_id[2] */?></div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>-->




                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        <?php
        }
    }

?>

<div class="second-menu">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <a href="../php/adopt-a-pet.php" class="second-menu"><div class="second-menu-h">
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
            <a href="../mapa.html" class="second-menu"><div class="second-menu-h">
                    <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
                    <h3 class="second-menu">Low-Cost Clinics</h3>
                    <p class="second-menu">Find directions here</p>
                </div></a>
        </div>
        <div class="col-lg-3 col-md-12">
            <a href="../php/voluntarios.php" class="second-menu"><div class="second-menu-h">
                    <img class="second-menu" src="../img/paw.png" alt="HappyAnimals">
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

    }

    $("#color_me").change(function(){
        var color = $("option:selected", this).attr("class");
        $("#color_me").attr("class", color);
    });


</script>
</html>


