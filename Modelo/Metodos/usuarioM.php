<?php

class usuarioM
{
   
    //METODO para buscar un usuario por correo y contraseña para el login
    public function BuscarCorreo($correo, $contrasena){
        $usuario=new usuario();
        $conexion=new Conexion();

        $sql="SELECT * FROM USUARIO WHERE CORREO='$correo' and CONTRASENA='$contrasena'";
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

    //METODO para verificar si el correo o usuario ya existen
    public function VerificarExistencia($correo, $usuario){
        $conexion=new Conexion();
        
        $sql="SELECT COUNT(*) as total FROM USUARIO WHERE CORREO='$correo' OR USUARIO='$usuario'";
        $resultado=$conexion->Ejecutar($sql);
        $fila=$resultado->fetch_assoc();
        
        $existe = $fila['total'] > 0;
        
        $conexion->Cerrar();
        return $existe;
    }

    //METODO para insertar un usuario nuevo
    public function Insertar($usuario){
        $conexion=new Conexion();

        $nombre=$usuario->getNombre();
        $apellido=$usuario->getApellido();
        $correo=$usuario->getCorreo();
        $contrasena=$usuario->getContrasena();
        $usuarioU=$usuario->getUsuario();
        $fechaNacimiento=$usuario->getFechaNacimiento();
        $pais=$usuario->getPais();
        $estado=$usuario->getEstado();
        $tipo=$usuario->getTipo();

        $sql="INSERT INTO USUARIO (NOMBRE, APELLIDO, CORREO, CONTRASENA, USUARIO, FECHA_NACIMIENTO, PAIS, ESTADO, TIPO) 
              VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$usuarioU', '$fechaNacimiento', '$pais', '$estado', '$tipo')";
        
        $resultado=$conexion->Ejecutar($sql);
        $conexion->Cerrar();
        return $resultado;
    }

}