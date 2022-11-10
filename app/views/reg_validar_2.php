<?php
require('../libs/Conexion.php');
require_once('../core/logs/log.php');
session_start();
if (isset($_POST['enviar'])) {
    date_default_timezone_set('America/Bogota');
    $ciudad = $_POST['ciudad'];
    $duracioncontrato = $_POST['duracioncontrato'];
    $totalseguro = $_POST['totalseguro'];
    $user_id = $_SESSION['id_user'];
    $log = new Log;

    $fecha = date('Y-m-d');
    $fecha_inicio = date_create($fecha);
    $f = explode('-', $fecha);
    $f[1] = $f[1] + $duracioncontrato;
    if ($f[1] < 12) {
        echo 'Todo Nice';
    } else {
        $f[0] = $f[0] + 1;
        $f[1] = 12;
        $f[1] = $duracioncontrato - 1;
    }

    $conexion = Conexion::getConexion();

    $sql2 = "SELECT dsnombres,dsapellidos,correo FROM t_usuario WHERE id=$user_id";
    $result2 = mysqli_query($conexion->conectar(), $sql2);

    $row = mysqli_fetch_array($result2);

    $sql = "INSERT INTO t_cotizacion(usuario_id, total_seguro, dsciudad, dscontrato)
  VALUES('$user_id','$totalseguro','$ciudad','$duracioncontrato')";

    if ($conexion->conectar()->query($sql)) {
        $log->insertar('GetCotizacionUsuario', $user_id, '::1');
    } else {
        $_SESSION['error'] = 'Algo salió mal al agregar el registro';
    }
    $correo = $row['correo'];

?>

<!DOCTYPE html>
<html lang="es">

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
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../public/assets/css/main.css" rel="stylesheet" media="all">
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">INFORMACIÓN DE SU SEGUROS DE VIVIENDAS</h2>
                </div>
                <div class="card-body">

                    <div class="form-row m-b-55">
                        <div class="name">Total seguro</div>
                        <div class="value">
                            <div class="col-9">
                                <div class="input-group-desc">
                                    <p class="input--style-5">
                                        <?php echo $totalseguro ?> </p>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" form-row m-b-55">
                        <div class="name">DATOS DEL PROPIETARIO</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <p class="input--style-5"><?php echo $row['dsnombres'] ?></p>
                                        <label class="label--desc">Nombres</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <p class="input--style-5"> <?php echo $row['dsapellidos'] ?></p>
                                        <label class="label--desc">Apellidos</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Ciudad</div>
                        <div class="value">
                            <div class="input-group">
                                <p class="input--style-5"> <?php echo $ciudad ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Correo</div>
                        <div class="value">
                            <div class="input-group">
                                <p class="input--style-5"> <?php echo $correo ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Duracion del contrato</div>
                        <div class="value">
                            <div class="input-group-desc">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <p class="input--style-5"> <?php echo $duracioncontrato ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Fecha de vencimiento del contrato</div>
                        <div class="value">
                            <div class="input-group-desc">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <p class="input--style-5"><?php echo $f[2] . ' - ' . $f[1] . ' - ' . $f[0]; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn--radius-2 btn--blue center"
                        href="../pdf/crearPdf.php?&ciudad=<?php echo $ciudad . "&duracioncontrato=" . $duracioncontrato . "&totalseguro=" . $totalseguro . "&correo=" . $correo ?>">
                        Imprimir</a>



                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


</html>

<?php } ?>