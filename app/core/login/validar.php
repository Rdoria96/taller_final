<?php
require_once('../../libs/Conexion.php');
session_destroy();
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
$pass = md5($pass);

if (empty($usuario) || empty($pass)) {
    header("Location: ../../../public/index.php");
    exit();
}

$conexion = Conexion::getConexion();
$sql = "SELECT id,usuario,rol_id, contrasena FROM t_usuario WHERE usuario = '$usuario'  and contrasena = '$pass'";
$result = mysqli_query($conexion->conectar(), $sql);

if ($row = mysqli_fetch_array($result)) {
    if ($row['contrasena'] ==  $pass && $row['usuario'] == $usuario) {
        session_start();

        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $row['rol_id'];
        $_SESSION['id_user'] = $row['id'];
        header("Location: ../../views/dashboard.php");
    } else {
        header("Location: ../../../public/index.php");
        exit();
    }
} else {
    header("Location: ../../../public/index.php");

    exit();
}