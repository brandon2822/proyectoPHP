<?php

class Conexion
{
    private $mysqli;

    public function Ejecutar($sql){
        $host = "localhost";
        $user = "root";
        $pass= "";
        $name= "milibrodb";
        if(!$this->mysqli = new mysqli($host, $user, $pass, $name)){
            die("Error al conectar a la base de datos");
        }
        //ejecutar el query
        $this->mysqli->autocommit(true);
        $resultado=$this->mysqli->query($sql);
        return $resultado;
    }

    public function Cerrar(){
        $this->mysqli->close();
    }
}