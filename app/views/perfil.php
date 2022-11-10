<!DOCTYPE html>
<html lang="es">
<?php
require_once('../libs/Conexion.php');
require_once('../core/logs/log.php');
$conexion = Conexion::getConexion();
$sql = "SELECT u.id, u.dsnombres, u.dsapellidos, u.correo, u.usuario , u.estado, r.dsnombre FROM t_usuario u INNER JOIN t_rol r  on u.rol_id = r.id ";
$result = mysqli_query($conexion->conectar(), $sql);

$log = new Log;

$log->insertar('GetPerfilUsuarios',   mysqli_insert_id($conexion->conectar()), '::1');

?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>PERFIL</title>

    <!-- Icons font CSS-->
    <link href="/public/assets/css/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
        media="all">
    <link href="/public/assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


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
                    <h2 class="title">PERFILES</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) {  ?>
                            <tr>
                                <th scope="row"><?php echo $row['id'] ?></th>
                                <td><?php echo $row['dsnombres'] ?></td>
                                <td><?php echo $row['dsapellidos'] ?></td>
                                <td><?php echo $row['correo'] ?></td>
                                <td><?php echo $row['usuario'] ?></td>
                                <td><?php echo $row['estado'] == 1 ? 'Activo' : 'Inactivo' ?></td>
                                <td><?php echo $row['dsnombre'] ?></td>
                                <td><button type="button" class="btn-outline-danger"
                                        onclick="cambiarEstado(<?php echo $row['id'] ?>, <?php echo $row['estado'] ?>)"><?php echo $row['estado'] == 1 ? 'Inactivar' : 'Activar' ?></button>
                                </td>
                            </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src=" /public/assets/js/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/public/assets/js/vendor/select2/select2.min.js"></script>
    <script src="/public/assets/js/vendor/datepicker/moment.min.js"></script>
    <script src="/public/assets/js/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/public/assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<script>
function cambiarEstado(id, estado) {

    if (estado === 1) {
        //Inactivar
        window.location.href = "../core/perfiles/cambiarEstado.php?estado=0" + "&id=" + id;
    } else
    if (estado === 0) {
        //Activar
        window.location.href = "../core/perfiles/cambiarEstado.php?estado=1" + "&id=" + id;
    }
}
</script>