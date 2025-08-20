<?php
include_once "./Modelo/Conexion.php";
include_once "./Modelo/Entidades/Usuario.php";
include_once "./Modelo/Metodos/UsuarioM.php";

class ControladorUsuario
{
    private function JSONusuario($obj){
        if ($obj == null) {
            return "null";
        }

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

    public function Index() {
        $jsonUsuario = "null";
        include_once "./Vista/login_signup/login_signup.php";
    }

    public function LogIn() {
        $jsonUsuario = "null";
        if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $usuarioM = new usuarioM();
            $usuario = $usuarioM->BuscarCorreo($correo, $contrasena);
            $jsonUsuario = $this->JSONusuario($usuario);
        }
        include_once "./Vista/login_signup/login_signup.php";
    }

    public function Signup() {
        $usuarioCreado = false;
        $mensaje = "";
        $tipoMensaje = "error";
        $usuarioRegistrado = null; // Variable para almacenar el usuario creado
        
        if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && 
            isset($_POST['contrasena']) && isset($_POST['usuario']) && isset($_POST['fechaNacimiento']) && 
            isset($_POST['pais'])) {
            
            // Validar que los campos no estén vacíos
            if (!empty(trim($_POST['nombre'])) && !empty(trim($_POST['apellido'])) && 
                !empty(trim($_POST['correo'])) && !empty(trim($_POST['contrasena'])) && 
                !empty(trim($_POST['usuario'])) && !empty(trim($_POST['fechaNacimiento'])) && 
                !empty(trim($_POST['pais']))) {
                
                $usuario = new Usuario();
                $usuario->setNombre(trim($_POST['nombre']));
                $usuario->setApellido(trim($_POST['apellido']));
                $usuario->setCorreo(trim($_POST['correo']));
                $usuario->setContrasena(trim($_POST['contrasena']));
                $usuario->setUsuario(trim($_POST['usuario']));
                $usuario->setFechaNacimiento($_POST['fechaNacimiento']);
                $usuario->setPais(trim($_POST['pais']));
                $usuario->setEstado(1); // Estado activo por defecto
                $usuario->setTipo("Usuario"); // Tipo usuario por defecto

                $usuarioM = new usuarioM();
                
                // Verificar si el correo o usuario ya existen
                if ($usuarioM->VerificarExistencia($_POST['correo'], $_POST['usuario'])) {
                    $mensaje = "El correo electrónico o nombre de usuario ya están registrados.";
                    $tipoMensaje = "error";
                } else {
                    // Intentar insertar el usuario
                    if ($usuarioM->Insertar($usuario)) {
                        $usuarioCreado = true;
                        $mensaje = "¡Registro exitoso! Serás redirigido al menú en 3 segundos.";
                        $tipoMensaje = "success";
                        
                        // Buscar el usuario recién creado para tener sus datos completos
                        $usuarioRegistrado = $usuarioM->BuscarCorreo($_POST['correo'], $_POST['contrasena']);
                        
                        // Iniciar sesión automáticamente
                        if ($usuarioRegistrado) {
                            session_start();
                            $_SESSION['usuario'] = $usuarioRegistrado;
                        }
                    } else {
                        $mensaje = "Error al crear el usuario. Por favor, inténtalo de nuevo.";
                        $tipoMensaje = "error";
                    }
                }
            } else {
                $mensaje = "Por favor, completa todos los campos.";
                $tipoMensaje = "error";
            }
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mensaje = "Por favor, completa todos los campos requeridos.";
            $tipoMensaje = "error";
        }
        
        // Siempre incluir la misma vista
        // Si el usuario fue creado exitosamente, preparar variables para redirección
        if ($usuarioCreado && $usuarioRegistrado) {
            $jsonUsuario = $this->JSONusuario($usuarioRegistrado);
        }
        
        // Incluir la vista del formulario de registro
        include_once "./Vista/newuser/newuser.php";
    }
}