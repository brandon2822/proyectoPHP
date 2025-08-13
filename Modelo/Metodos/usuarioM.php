<?php

class usuarioM
{
    public function BuscarId($id){
        $usuario=new usuario();
        $conexion=new Conexion();

        $sql="SELECT * FROM USUARIO WHERE id_USUARIO=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0){
            while($fila=$resultado->fetch_assoc()){
                $usuario->setId($fila["id_USUARIO"]);
                $usuario->setNombre($fila["NOMBRE"]);
                $usuario->setApellido($fila["APELLIDO"]);
                $usuario->setCorreo($fila["CORREO"]);
                $usuario->setUsuario($fila["USUARIO"]);
                $usuario->setContrasena($fila["CONTRASENA"]);
                $usuario->setFechaNacimiento($fila["FECHA_NACIMIENTO"]);
                $usuario->setPais($fila["PAIS"]);
                $usuario->setEstado($fila["ESTADO"]);
                $usuario->setTipo($fila["TIPO"]);
                
            }
        }
        else
            $usuario=null;
        $conexion->Cerrar();
        return $usuario;
    }

    public function BuscarCorreo($correo){
        $usuario=new usuario();
        $conexion=new Conexion();

        $sql="SELECT * FROM USUARIO WHERE CORREO='$correo'";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0){
            while($fila=$resultado->fetch_assoc()){
                $usuario->setId($fila["id_USUARIO"]);
                $usuario->setNombre($fila["NOMBRE"]);
                $usuario->setApellido($fila["APELLIDO"]);
                $usuario->setCorreo($fila["CORREO"]);
                $usuario->setUsuario($fila["USUARIO"]);
                $usuario->setContrasena($fila["CONTRASENA"]);
                $usuario->setFechaNacimiento($fila["FECHA_NACIMIENTO"]);
                $usuario->setPais($fila["PAIS"]);
                $usuario->setEstado($fila["ESTADO"]);
                $usuario->setTipo($fila["TIPO"]);
                
            }
        }
        else
            $usuario=null;
        $conexion->Cerrar();
        return $usuario;
    }

}