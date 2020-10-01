<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodytech</title>
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
                    <a class="nav-link mr-4" href="Punto3.php">Spring Step</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link mr-4" href="Punto4.php">Numeros Pares</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <h2 class="text-center mt-5">Calcula tu Indice de Masa Corporal (IMC)</h2>
        <div class=" justify-content-center" style="display: flex; margin:30px 0 30px 0">
            <div class="card m-4" style="width:600px;height:353px">
                    <form class="m-4" action="Punto2.php" method="POST">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Ingrese su peso:</label>
                            <input type="text" class="form-control" placeholder="Digite su pero en kg" name="peso">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Ingrese su altura:</label>
                            <input type="text" class="form-control" placeholder="Digite su altura en 'm. cm'" name="altura">
                        </div>
                        <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
                        <button type="submit" class="btn btn-primary" name="limpiar">Limpiar</button>
                        <hr>
                        <?php
                            if(isset($_POST["calcular"])){
                        ?>    
                        <div>
                            <h5 class="p-4">    
                        <?php
                                $peso=$_POST["peso"];
                                $altura=$_POST["altura"];
                                if($peso == 0 && $altura == 0){
                                    echo("Porfavor digite los campos con los datos pedidos previamente");
                                } else if ($peso == 0){
                                    echo("Porfavor digite el peso");
                                } else if ($altura == 0){
                                    echo("Porfavor digite la altura");
                                } else {
                                    $imc=$peso/($altura*$altura);
                                    if($imc < 18.5){
                                        echo("IMC: ".$imc);
                                        echo(" Peso insuficiente");
                                    } else if($imc >= 18.5 && $imc <= 24.9){
                                        echo("IMC: ".$imc);
                                        echo(" Normopeso"); 
                                    }else if($imc >= 25 && $imc <= 26.9){
                                        echo("IMC: ".$imc);
                                        echo(" Sobrepeso Grado 1");
                                    }else if($imc >= 27 && $imc <= 29.9){
                                        echo("IMC: ".$imc);
                                        echo(" Sobrepeso Grado 2 (Preobesidad)");
                                    } else if($imc >= 30 && $imc <= 34.9){
                                        echo("IMC: ".$imc);
                                        echo(" Obesidad de Tipo 1");
                                    } else if($imc >= 35 && $imc <= 39.9){
                                        echo("IMC: ".$imc);
                                        echo(" Obesidad de Tipo 2");
                                    } else if($imc >= 40 && $imc <= 49.9){
                                        echo("IMC: ".$imc);
                                        echo(" Obesidad de Tipo 3 (Morbida)");
                                    } else if($imc >= 50){
                                        echo("IMC: ".$imc);
                                        echo(" Obecidad de tipo 4 (Extrema)");
                                    }
                                }
                            
                                ?>
                            </h5>
                        </div>
                         <?php
                                } else if(isset($_POST["limpiar"])){
                                $peso=$_POST["peso"];
                                $altura=$_POST["altura"];
                                $peso="";
                                $altura="";
                            }
                        ?>
                    </form>
            </div>
            <div>
                <div class="card m-4" style="width: 600px">
                    <div class="card-body text-center">
                    <p class="card-text">Clasificacion del IMC</p>
                    </div>
                    <img src="img/IMC.jpg" class="card-img-bottom" style="width: 600px;">
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