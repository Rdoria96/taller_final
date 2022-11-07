<!DOCTYPE html>
<html lang="es">

<?php
require_once('../libs/Conexion.php');
$conexion = Conexion::getConexion();
$sql = "SELECT * FROM t_rol ";
$result = mysqli_query($conexion->conectar(), $sql);
$ip = get_client_ip();

function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
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
    <title>FORMULARIO</title>

    <!-- Icons font CSS-->
    <link href="public/assets/css/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../public/assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../../public/assets/css/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../public/assets/css/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../public/assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">REGISTRO DE USUARIOS</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="../../app/core/login/registro_user.php">
                        <div class="form-row m-b-55">
                            <div class="name">Nombre y Apellido</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nombre">
                                            <label class="label--desc">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="apellido">
                                            <label class="label--desc">Apellido</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">identificacion</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="identificacion">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Correo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="correo">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row m-b-55">
                                <div class="name"></div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="usuario">
                                                <label class="label--desc">User</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="password" name="password">
                                                <label class="label--desc">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Rol</div>
                                <div class="value">
                                    <div class="input-group-desc">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="rol" class="input--style-5">
                                                <option disabled="disabled" selected="selected">Seleccionar</option>
                                                <?php while ($row = mysqli_fetch_array($result)) {  ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['dsnombre'] ?>
                                                </option>
                                                <?php
                                                } ?>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="ip" value="<?php echo $ip ?>" />
                            </div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="enviar">Registrar</button>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../public/assets/js/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../../public/assets/js/vendor/select2/select2.min.js"></script>
    <script src="../../public/assets/js/vendor/datepicker/moment.min.js"></script>
    <script src="../../public/assets/js/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->