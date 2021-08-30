<?php
$pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body id="inicio">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center cohete">
                <a href="proyectos.php">
                    <img class="cohete" src="images/cohete.svg" alt="">
                </a>                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 text-center offset-sm-3">
                <div class="ingreso">
                    <p class="p-1">
                        Bienvenid@ a este sitio, donde me podrás conocer un poco más.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a class= "btn shadow" href="proyectos.php">Conoce mis Proyectos</a>
            </div>
        </div>
                
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541122527939" target="_blank"><i class="fab fa-whatsapp"></i></a>

    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>