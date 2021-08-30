<?php
$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body id="sobre-mi">
    <?php include_once("header.php"); ?>
    <main>
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-12 mt-2">
                    <div class="col-12 py-5">
                        <h1>Sobre mi</h1>
                    </div>
                    <p>Fanático de la Tecnología y Apasionado por la Ingeniería. Interesado en Desarrollo Full Stack, Programación e Ingeniería Civil</p>
                    <div class="col-6">
                        <a href="contacto.php" class="btn btn-rojo">Enviar Mensaje</a>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mb-5">
                    <img src="images/IMG_20200212_222532-01.jpeg" alt="fotocv" class="img-circle">
                </div>

            </div>
            <section id="tecnologias" class="gradiente">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-12 mt-5 text-white">
                            <h2>Stack Tecnologico</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" src="images/js.jfif" alt="">
                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" src="images/php.jfif" alt="">
                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" src="images/html5.png.crdownload" alt="">

                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" src="images/reac.jfif" alt="">

                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" src="images/git.png" alt="">

                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" src="images/jque.png" alt="">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" src="images/lara.png" alt="">
                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" src="images/mariadb.png" alt="">
                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" src="images/css.jfif" alt="">

                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" src="images/boot.png" alt="">

                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" src="images/apache.png" alt="">

                        </div>
                        <div class="col-sm-2 text-center card py-2 my-3 mx-3">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto" src="images/mercado.jfif" alt="">

                        </div>
                    </div>

                </div>
            </section>
            <section id="experiencia" class="container">
                <div class="row">
                    <div class="col-2 mt-4 ">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h2>Experiencia Laboral</h2>
                    </div>
                </div>
                <div class="row shadow bg-white rounded">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 my-auto">
                                <i class="far fa-building"></i>
                            </div>
                            <div class="col-sm-10 py-3">
                                <h3>Ingeniero de Oficina Técnica</h3>
                                <h4>DIRECCION DE INGENIERIA Y MANTENIMIENTO ULA</h4>
                                <h5>2015 - 2018</h5>
                                <p>Inspección y preparación de informes de inspección de obra, diseño y revisión de proyectos estructurales, elaboración de cómputos y presupuestos, supervisión de ejecución de obra en función de planos y documentos de obra</p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="formacion" class="container">
                <div class="row">
                    <div class="col-2 mt-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h2>Formación Académica</h2>
                    </div>

                </div>
                <div class="row shadow bg-white rounded px-auto">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 my-auto">
                                <img class="escu" src="images/escudo.jpg" alt="">
                            </div>
                            <div class="col-sm-10 py-3">
                                <h3>Ingeniero Civil</h3>
                                <h4>Universidad de Los Andes</h4>
                                <h5>2010 - 2016</h5>
                                <p>http://www.ula.edu.ve/</p>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-2 mt-4">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="col-sm-10 mt-4">
                    <h2>Cursos de Desarrollo Profesional</h2>
                </div>

            </div>
            <div class="row shadow bg-white rounded px-auto">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 my-auto">
                            <img class="dpc" src="images/0.png" alt="">
                        </div>
                        <div class="col-sm-10 py-3">
                            <h3>Desarrollo Web Full Stack</h3>
                            <h4>DEPCSUITE SA</h4>
                            <h5>Expedición: Nov 2021</h5>

                        </div>
                    </div>

                </div>
            </div>
            </div>

        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-3">
                        <div class="row bg-white shadow">
                            <div class="col-4 text-center cardi">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="col-8">
                                <h2>Idiomas</h2>
                                <ul>
                                    <li>
                                        Español - Nativo
                                    </li>
                                    <li>
                                        Inglés - Avanzado
                                    </li>
                                    <li>
                                        Alemán - Básico
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-3">
                        <div class="row big-white shadow">
                            <div class="col-4 text-center cardi">
                                <i class="fab fa-angellist"></i>
                            </div>
                            <div class="col-8">
                                <h2>Hobbies</h2>
                                <ul>
                                    <li>
                                        Repostería
                                    </li>
                                    <li>
                                        Crossfit
                                    </li>
                                    <li>
                                        Cycling
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541122527939" target="_blank"><i class="fab fa-whatsapp"></i></a>

    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>




</body>

</html>