<?php
require_once('../../libs/Conexion.php');
$conexion = Conexion::getConexion();
if (isset($_GET['id']) & isset($_GET['estado'])) {
    $estado = $_GET['estado'];
    $id = $_GET['id'];
    $sql = "UPDATE t_usuario SET estado=$estado WHERE id=$id";
    $result = mysqli_query($conexion->conectar(), $sql);

    if (mysqli_query($conexion->conectar(), $sql)) {
        header('location: ../../views/perfil.php');
    } else {
        echo 'No se pudo cambiar el estado del perfil';
    }
    $conexion->close();
}