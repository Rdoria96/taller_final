<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>FORMULARIO</title>

    <!-- Icons font CSS-->
    <link href="./assets/css/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="./assets/css/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./assets/css/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">LOGIN</h2>
                </div>
                <div class="card-body" style="align-content: center ;">
                    <form method="POST" action="../app/core/login/validar.php">
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="usuario">
                                            <label class="label--desc">Usuario</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password">
                                            <label class="label--desc">Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn--radius-2 btn--red" type="submit" name="enviar">Ingresar</button>
                        <div class="col-2">
                            <div class="input-group-desc">
                                <div>
                                    <a class="label--desc " href="../app/views/registro.php">Registrar usuario</a>
                                </div>
                            </div>
                        </div>
                </div>

            </div>

        </div>
        </form>

    </div>
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="./assets/js/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="./assets/js/vendor/select2/select2.min.js"></script>
    <script src="./assets/js/vendor/datepicker/moment.min.js"></script>
    <script src="./assets/js/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="./assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->