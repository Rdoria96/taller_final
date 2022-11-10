<?php
require_once('../../libs/Conexion.php');
require_once('../logs/log.php');
session_start();
session_destroy();
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
$pass = md5($pass);

if (empty($usuario) || empty($pass)) {
    header("Location: ../../../public/index.php");
    exit();
}

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
$log = new Log;

$conexion = Conexion::getConexion();
$sql = "SELECT id,usuario,rol_id, contrasena FROM t_usuario WHERE usuario = '$usuario'  and contrasena = '$pass'";
$result = mysqli_query($conexion->conectar(), $sql);


if ($row = mysqli_fetch_array($result)) {
    if ($row['contrasena'] ==  $pass && $row['usuario'] == $usuario) {
        session_start();

        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $row['rol_id'];
        $_SESSION['id_user'] = $row['id'];
        $_SESSION['ip'] = $ip;
        $log->insertar('GetInicioSesion', $row['id'], $ip);
        header("Location: ../../views/dashboard.php");
    } else {
        header("Location: ../../../public/index.php");
        exit();
    }
} else {
    header("Location: ../../../public/index.php");

    exit();
}