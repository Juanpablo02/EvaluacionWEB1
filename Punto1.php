<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link mr-4" href="Punto1.php">Calculadora</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link mr-4" href="Punto2.php">Bodytech</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link mr-4" href="#">Pricing</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-4">
                <form class="mt-5" action="Punto1.php" method="POST">
                    <h2 class="mb-5">Calculadora</h2>
                    <div class="row">
                        <div class="col mr-2">
                            <input type="text" class="form-control vw-50" placeholder="Ingrese un valor(1)" name="valor1">
                        </div>
                        <div class="col mr-2">
                            <input type="text" class="form-control vw-50" placeholder="Ingrese un valor(2)" name="valor2">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary" name="sumar">Sumar</button>
                        <button type="submit" class="btn btn-primary" name="restar">Restar</button>
                        <button type="submit" class="btn btn-primary" name="multiplicar">Multiplicar</button>
                        <button type="submit" class="btn btn-primary" name="limpiar">Limpiar</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST["sumar"])):
                ?>
                <div class="mt-5 card p-3">
                    <h4 class="display-10">
                <?php
                     $valor1=$_POST["valor1"];
                     $valor2=$_POST["valor2"];
                     if($valor1 != "" && $valor2 != ""){
                         $total=$valor1+$valor2;
                         echo("El resultado de la suma es: ".$total);
                         } else if($valor1 == "") {
                             echo("No se detecto ningun valor en el campo 'valor(1)'");
                         } else if($valor2 == "")
                             echo("No se detecto ningun valor en el campo 'valor(2)'");
                ?>
                    </h4>
                </div>
                <?php
                    endif
                ?>

                <?php   
                    if(isset($_POST["restar"])):
                ?>
                <div class="mt-5 card p-3">
                    <h4 class="display-10">
                <?php
                     $valor1=$_POST["valor1"];
                     $valor2=$_POST["valor2"];
                     if($valor1 != "" && $valor2 != ""){
                         $total=$valor1-$valor2;
                         echo("El resultado de la resta es: ".$total);
                         } else if($valor1 == "") {
                             echo("No se detecto ningun valor en el campo 'valor(1)'");
                         } else if($valor2 == "")
                             echo("No se detecto ningun valor en el campo 'valor(2)'");
                ?>
                    </h4>
                </div>
                <?php
                    endif
                ?>

                <?php
                    if(isset($_POST["multiplicar"])):
                ?>
                <div class="mt-5 card p-3">
                    <h4 class="display-10">
                <?php
                     $valor1=$_POST["valor1"];
                     $valor2=$_POST["valor2"];
                     if($valor1 != "" && $valor2 != ""){
                         $total=$valor1*$valor2;
                         echo("El resultado de la multiplicacion es: ".$total);
                         } else if($valor1 == "") {
                             echo("No se detecto ningun valor en el campo 'valor(1)'");
                         } else if($valor2 == "")
                             echo("No se detecto ningun valor en el campo 'valor(2)'");
                ?>
                    </h4>
                </div>
                <?php
                    endif
                ?>

                <?php 
                      if(isset($_POST["limpiar"])){
                        $valor1=$_POST["valor1"];
                        $valor2=$_POST["valor2"];
                        $valor1="";
                        $valor2="";
                      }
                ?>
                </div>
            </div>    
        </div>
    </main>

    <footer>
    </footer>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>