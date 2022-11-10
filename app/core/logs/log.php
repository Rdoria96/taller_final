<?php
// require_once('../../libs/Conexion.php');
class Log
{


    public function __construct()
    {
    }

    function insertar($dsaccion, $usuario_id, $ip)
    {
        $sql = "INSERT INTO t_log( dsaccion, usuario_id, fecha_accion, ip) 
        VALUES  ('$dsaccion','$usuario_id', Now(), '$ip' )";
        mysqli_query(Conexion::getConexion()->conectar(), $sql);
    }
}