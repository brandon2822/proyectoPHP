<?php
include_once "./Modelo/Conexion.php";
include_once "./Modelo/Entidades/Usuario.php";
include_once "./Modelo/Metodos/UsuarioM.php";

class ControladorUsuario
{
    private function JSONusuario($obj){
        return json_encode([
            'id' => $obj->getId(),
            'nombre' => $obj->getNombre(),
            'apellido' => $obj->getApellido(),
            'correo' => $obj->getCorreo(),
            'contrasena' => $obj->getContrasena(),
            'usuario' => $obj->getUsuario(),
            'fechaNacimiento' => $obj->getFechaNacimiento(),
            'pais' => $obj->getPais(),
            'estado' => $obj->getEstado(),
            'tipo' => $obj->getTipo()
        ]);
    }

    // public function BuscarId($id){
    //     if(isset($_POST[$id])){
    //         $id=$_POST[$id];
    //         $usuario = new =usuario();
    //         $usuarioM=new usuarioM();
    //         $usuario=$usuarioM->BuscarId($id);
    //         $jsonUsuario = $this->JSONusuario($usuario);
    //         }
    //         else
    //             echo "null";

    //         return $jsonUsuario; 
    // }

   public function BuscarCorreo() {
    if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $usuarioM = new usuarioM();
        $usuario = $usuarioM->BuscarCorreo($correo);

        if ($usuario !== null && $usuario->getContrasena() === $contrasena) {
            $jsonUsuario = $this->JSONusuario($usuario);
            echo $jsonUsuario;
            require_once "./Vista/menu/menu.php";
        } else {
            echo "null";
        }
    } else {
        echo "null";
    }
}
}