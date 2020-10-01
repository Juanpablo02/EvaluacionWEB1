<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Pares</title>
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
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-6">
                    <form action="Punto4.php" method="POST">
                        <div class="form-group">
                            <h4>Digite la cantidad de numeros pares que sea imprimir en pantalla: </h4>
                            <input type="text" class="form-control" placeholder="Escriba cuantos numeros pares desea imprimir" name="numeros">
                            <small class="form-text text-muted">Ejemplo: "3" se imprimiran los 3 primeros numeros 2,4,6</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
                        <button type="submit" class="btn btn-primary" name="limpiar">Limpiar</button>
                    </form>
            <?php
                if(isset($_POST["calcular"])){
            ?>
                <h3 class="m-4">Numeros</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                            <?php
                                $numeros = $_POST["numeros"];
                                $i = 1;
                                $e = 0;
                                    $pares=array();
                                    if($numeros > 0){
                                        while($i<=$numeros){
                                            $pares[$i] = $e + 2;
                                            echo($pares[$i].", ");
                                            $i++;
                                            $e = $e + 2;
                                        }
                                    } else {
                                        echo("Porfavor digite un numero");
                                    }   
                                }
                            ?>
                                </td>
                            </tr>
                        </thead>
                    </table>
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