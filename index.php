<?php
    //$num=10;
    //echo"<h1>Programacion Computacional IV - Elena Ruiz</h1>"; //. $num;

    if(isset($_POST['Seleccion'])){
        echo "Click sobre el boton";
        $idioma = $_POST['idioma'];
        INCLUDE $idioma. ".php";

    }else{
        echo "No se a enviado ";
        INCLUDE "es.php";
    }
?>

<html>
    <head>
        <title><?php echo TITLE; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--holis aca es lo del NAVAR-->
        <div> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar - Programacion Computacional IV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Elena Ruiz - SMIS004820
                </span>
                </div>
            </div>
        </nav>
        </div> <!--termina es lo del NAVAR-->
        
        
        <!--inpus (la cosa para selecionar el idioma)-->
        <form method="POST">
            <select name="idioma">
                <option value="es">Spanish</option>
                <option value="en">English</option>

            </select>
            <input type="submit" name="Seleccion" value="Cambiar"/>

        </form>
        <h1><?php echo TITLE; ?></h1>
        <h1><?php echo HEADING_TITTLE; ?></h1>
        <h2><?php echo OVERVIEW; ?></h2>
    </body>
</html>
