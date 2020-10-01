<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring Step</title>
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
            <div class="col-5">
            <form action="Punto3.php" method="POST">
                <div class="form-group">
                    <h4>Cuantos pares de zapatos desea comprar: </h4>
                    <input type="text" class="form-control" placeholder="Digite numero de pares de zapatos para comprar" name="zapatos">
                    <small class="form-text text-muted">- Si compra 3 pares de zapatos se le dara un descuento del 10%</small>
                    <small class="form-text text-muted">- Si compra entre 3 y 8 pares de zapatos se le dara un descuento del 20%</small>
                    <small class="form-text text-muted">- Si compra mas de 8 pares de zapatos se le dara un descuento del 50%</small>
                </div>
                <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
                <button type="submit" class="btn btn-primary" name="limpiar">Limpiar</button>
            </form>

            
            <?php
               if(isset($_POST["calcular"])){
            ?>
            <div class="mt-5 card p-3">
            <?php
                    $zapatos=$_POST["zapatos"];
                    $precio=45000;
                    $total;
                    $descuento;
                        if($zapatos > 0 && $zapatos < 3){
                            $total = $zapatos * $precio;
                            echo("El valor de su compra es: ".$total);
                        } else if($zapatos == 3){
                            $total = $zapatos * $precio;
                            $descuento = $total * 0.10;
                            $total = $total - $descuento;
                            echo("El valor de su compra es: ".$total." con el 10% de descuento");
                        } else if($zapatos > 3 && $zapatos <= 8) {
                            $total = $zapatos * $precio;
                            $descuento = $total * 0.20;
                            $total = $total - $descuento;
                            echo("El valor de su compra es: ".$total." con el 20% de descuento");
                        } else if($zapatos > 8){
                            $total = $zapatos * $precio;
                            $descuento = $total * 0.50;
                            $total = $total - $descuento;
                            echo("El valor de su compra es: ".$total." con el 50% de descuento");
                        } else {
                            echo("Digite porfavor el numero de pares de zapatos que desea comprar");
                        }
               } 
               if (isset($_POST["limpiar"])){
                   $zapatos = $_POST["zapatos"];
                   $zapatos = "";
               }
            ?>
            </div>
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