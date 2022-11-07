<?php
require_once('../../libs/Conexion.php');

if (isset($_POST['enviar'])) {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $identificacion = $_POST['identificacion'];
    $ip = $_POST['ip'];
    $pass = md5($pass);


    $conexion = Conexion::getConexion();

    $sql = "INSERT INTO t_usuario (dsidentificacion,dsnombres, dsapellidos,correo, fecha_creacion,fecha_ultimo_acceso, ip_ultimo_acceso, estado,usuario, contrasena, rol_id)
    VALUES('$identificacion','$nombre','$apellido','$correo',now() , now(), '$ip', '1','$user', '$pass', '$rol')";

    if (mysqli_query($conexion->conectar(), $sql)) {
        // header('location: ../../../public/index.php');
        echo 'Se guardo con exito';
    } else {
        // $_SESSION['error'] = 'Algo salió mal al agregar el registro';
        echo 'Fatal error';
    }
    $conexion->close();
}
header('location: ../../../public/index.php');