<?php

class Conexion
{

    private $server = "localhost";
    private $user = "root";
    private $passw = "";
    private $bd = "t_final";
    private $conexion;

    private function __construct()
    {
        $this->conexion = mysqli_connect($this->server, $this->user, $this->passw, $this->bd)
            or die("Ha sucedido un error inexperado en la conexion de la base de datos");
    }

    public static function  getConexion()
    {
        if (!isset($singleton)) {
            $singleton = new Conexion();
        }
        return $singleton;
    }

    function conectar()
    {

        return $this->conexion;
    }


    function close()
    {
        return mysqli_close($this->conexion);
    }
}