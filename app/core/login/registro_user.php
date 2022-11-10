<?php
require_once('../../libs/Conexion.php');
require_once('../logs/log.php');
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
    $log = new Log;




    $conexion = Conexion::getConexion();

    $sql = "INSERT INTO t_usuario (dsidentificacion,dsnombres, dsapellidos,correo, fecha_creacion,fecha_ultimo_acceso, ip_ultimo_acceso, estado,usuario, contrasena, rol_id)
    VALUES('$identificacion','$nombre','$apellido','$correo',now() , now(), '$ip', '1','$user', '$pass', '$rol')";




    if (mysqli_query($conexion->conectar(), $sql)) {
        // header('location: ../../../public/index.php');
        $log->insertar('InsertRegistroUsuarios', mysqli_insert_id($conexion->conectar()), '::1');
    } else {
        // $_SESSION['error'] = 'Algo salió mal al agregar el registro';
        echo 'Fatal error';
    }
    $conexion->close();
}
header('location: ../../../public/index.php');