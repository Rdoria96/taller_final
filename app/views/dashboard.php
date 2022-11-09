<!DOCTYPE html>
<html lang="es">

<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../../public/");
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>RD SEGUROS</title>
</head>

<body style="background-color: rgb(145, 215, 233);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="../../public/assets/image/RD (3).png" alt="" width="70" height="70"
                class="d-inline-block align-text-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ventas seguro Autos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ventas seguro vida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Ventas seguro vivienda</a>
                    </li>
                    <?php
                    if ($_SESSION['rol'] = 1) { ?>
                    <li class="nav-item">
                        <a class="nav-link " href="../views/perfil.php">Perfiles</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link " href="../core/login/cerrarsesion.php">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="w-100 ">

        <br><br><br><br><br><br>
        <main>
            <!-- Carousel wrapper -->
            <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center"
                data-mdb-ride="carousel">
            </div>
            <!-- Inner -->
            <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="https://www.mmtseguros.com/hubfs/tipos_de_seguros_de_coche_1299x752_01.jpg"
                                        class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">
                                        <a href="/auto.php" class="btn btn-primary">Cotizar seguro auto</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://www.apeseg.org.pe/wp-content/uploads/2020/11/GettyImages-1224016961.jpg"
                                        class="card-img-top" alt="Sunset Over the Sea" />
                                    <div class="card-body">
                                        <a href="/persona.php" class="btn btn-success">Cotizar seguro personas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://www.elvenezolanohouston.com/evh/wp-content/uploads/2019/01/ADOBE-STOCK-1200x750.jpg"
                                        class="card-img-top" alt="Sunset over the Sea" />
                                    <div class="card-body">
                                        <a href="./cotizar.php" class="btn btn-danger">Cotizar seguro vivienda </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                                        class="card-img-top" alt="Fissure in Sandstone" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp"
                                        class="card-img-top" alt="Storm Clouds" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp"
                                        class="card-img-top" alt="Hot Air Balloons" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp"
                                        class="card-img-top" alt="Peaks Against the Starry Sky" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp"
                                        class="card-img-top" alt="Bridge Over Water" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp"
                                        class="card-img-top" alt="Purbeck Heritage Coast" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
    </main>

    </div>
    <div style="background-color: black;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 40px;
    color: white;">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: cornflowerblue;">
                <h1 style="font-size:12px" class="text-dark">DIPLOMADO EN DESARROLLO DE APLICACIONES ORIENTADAS A LA
                    NUBE
                </h1>
                © 2022 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">Todos los derechos reservados</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>


</body>

</html>