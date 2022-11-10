<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_POST['enviar'])) {
    $ciudad = $_POST['ciudad'];
    $usoinmueble = $_POST['usoinmueble'];
    $duracioncontrato = $_POST['duracioncontrato'];
    $valorarriendo = $_POST['valorarriendo'];
    $valoriadmin = $_POST['valoriadmin'];
    $totalseguro = $valorarriendo + $valoriadmin * 0.1 *  $duracioncontrato;

    if ($ciudad == "") {
        array_push($campos, "El campo Ciudad no pude estar vacío");
    }

    if ($usoinmueble == "") {
        array_push($campos, "El campo Uso inmueble no pude estar vacío");
    }

    if ($duracioncontrato == "") {
        array_push($campos, "El campo Duracion contrato no pude estar vacío");
    }

    if ($valorarriendo == "") {
        array_push($campos, "El campo Valor arriendo no pude estar vacío");
    }

    if ($valoriadmin == "") {
        array_push($campos, "El campo Valor administracion no pude estar vacío");
    }






?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>VENTAS SEGURO VIVIENDAS</title>

    <!-- Icons font CSS-->
    <link href="/public/assets/css/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
        media="all">
    <link href="/public/assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/public/assets/css/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/public/assets/css/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../public/assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">VENTAS DE SEGUROS DE VIVIENDAS</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="reg_validar_2.php">
                        <div class="form-row m-b-55">
                            <div class="name">Total seguro</div>
                            <div class="value">
                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="totalseguro" id="totalseguro"
                                            value="$<?php echo number_format($totalseguro, 0, " ", "."); ?>">

                                        <br><br>
                                        <label>Total seguro
                                            <p>Incluye</p>
                                            <li>Pago mensual del arrendamiento, en caso de incumplimiento.</li>
                                            <li>Pago mensual del arrendamiento, en caso de incumplimiento.</li>
                                            <li>Asistencia juridica telefonica.</li>
                                            <li>Estudio financiero de inquilino sin costo.</li>
                                        </label>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class=" form-row m-b-55">
                            <div class="name">DATOS DEL PROPIETARIO</div>

                        </div>
                        <div class="form-row">
                            <div class="name">Ciudad</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ciudad"
                                        value="<?php echo $ciudad ?> ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Duracion del contrato</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input class="input--style-5" type="number" name="duracioncontrato"
                                            value="<?php echo $duracioncontrato ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn--radius-2 btn--green center" type="submit" name="enviar"
                            onclick="return  confirmacion()">Solicitud</button>
                        <a class="btn btn--radius-2 btn--red center" style="text-decoration: none;" href="cotizar.php">
                            Cancelar</a>
                </div>
            </div>

            </form>
        </div>
    </div>
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="/public/assets/js/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/public/assets/js/vendor/select2/select2.min.js"></script>
    <script src="/public/assets/js/vendor/datepicker/moment.min.js"></script>
    <script src="/public/assets/js/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/public/assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php } else {
} ?>
<script>
function confirmacion() {
    var respuesta = confirm("¿Desea realizar la solicitud?");
    if (respuesta == true) {
        return true;
    } else {
        return false;
    }

}
</script>