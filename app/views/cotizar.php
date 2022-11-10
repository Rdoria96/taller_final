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
    <title>COTIZACION</title>

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
                    <h2 class="title">INFORMACION DEL ARRIENDO</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="viviendas.php">
                        <div class="form-row">
                            <div class="name">Ciudad</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ciudad">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Uso del inmueble</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="usoinmueble" class="input--style-5">
                                            <option disabled="disabled" selected="selected">Uso del inmueble</option>
                                            <option>Residencial</option>
                                            <option>Comercial</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Ingrese el valor mensual del arriendo</div>
                            <div class="value">
                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="number" name="valorarriendo"
                                            id="valorarriendo">
                                        <label>valor mensual
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Ingrese el valor mensual de la administracion</div>
                            <div class="value">
                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="number" name="valoriadmin" id="valoriadmin">
                                        <label>valor mensual adminitracion
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Duracion del contrato</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="duracioncontrato" id="duracioncontrato" class="input--style-5">
                                            <option disabled="disabled" selected="selected">Meses</option>
                                            <option name='opc'>3</option>
                                            <option name='opc'>6</option>
                                            <option name='opc'>12</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn--radius-2 btn--red center" type="submit" name="enviar"
                            onclick="return confirmacion()">Calcular</button>
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

<script>
function confirmacion() {
    var respuesta = confirm("¿Esta seguro que desea realizar el calculo?");
    if (respuesta == true) {
        return true;
    } else {
        return false;
    }


}
</script>