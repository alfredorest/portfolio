<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body id="contacto">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te invito a que me contactes enviandome un mensaje o bien por whatsapp</p>

                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="txtNombre" placeholder="Nombre" id="txtNombre" class="form-control mb-3">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" placeholder="Correo" id="txtCorreo" class="form-control mb-3">
                        </div>
                        <div>
                            <input type="tel" name="txtTelefono" placeholder="Teléfono/Whatsapp" id="txtTelefono" class="form-control mb-3">
                        </div>
                        <div>
                            <textarea name="txtMensaje" placeholder="Escribe aqui tu mensaje" id="txtMensaje" cols="30" rows="10" class="form-control mb-3"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                        </div>
                    </form>
                </div>
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