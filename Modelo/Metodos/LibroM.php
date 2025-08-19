<?php

class LibroM
{
    /* Método para encontrar datos por el id*/
    public function BuscarId($id)
    {
        $libro = new Libro();
        $conexion = new Conexion();

        $sql = "SELECT * FROM LIBRO WHERE id_LIBRO=$id";
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $libro->setIdLibro($fila["id_LIBRO"]);
                $libro->setTitulo($fila["TITULO"]);
                $libro->setAnoPublicacion($fila["ANO_PUBLICACION"]);
                $libro->setPrecio($fila["PRECIO"]);
                $libro->setDescripcion($fila["DESCRIPCION"]);
                $libro->setAutor($fila["AUTOR"]);
                $libro->setIdioma($fila["IDIOMA"]);
                $libro->setCategoria($fila["CATEGORIA"]);
                $libro->setLibroPagado($fila["LIBRO_PAGADO"]);
                $libro->setEstado($fila["ESTADO"]);
            }
        } else
            $libro = null;
        $conexion->Cerrar();
        return $libro;
    }

    /* Método para buscar todos los datos*/
    public function BuscarTodos(){
        $libros = [];
        $conexion = new Conexion();

        $sql = "SELECT * FROM LIBRO";
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $libro = new Libro();
                $libro->setIdLibro($fila["id_LIBRO"]);
                $libro->setTitulo($fila["TITULO"]);
                $libro->setAnoPublicacion($fila["ANO_PUBLICACION"]);
                $libro->setPrecio($fila["PRECIO"]);
                $libro->setDescripcion($fila["DESCRIPCION"]);
                $libro->setAutor($fila["AUTOR"]);
                $libro->setIdioma($fila["IDIOMA"]);
                $libro->setCategoria($fila["CATEGORIA"]);
                $libro->setLibroPagado($fila["LIBRO_PAGADO"]);
                $libro->setEstado($fila["ESTADO"]);

                array_push($libros, $libro);
            }
        }
        $conexion->Cerrar();
        return $libros;
    }

    /* Método para ingresar datos*/
    public function Nuevo($libro)
    {
        $conexion = new Conexion();

        $titulo = $libro->getTitulo();
        $ano_publicacion = $libro->getAnoPublicacion();
        $precio = $libro->getPrecio();
        $descripcion = $libro->getDescripcion();
        $autor = $libro->getAutor();
        $idioma = $libro->getIdioma();
        $categoria = $libro->getCategoria();
        $libro_pagado = $libro->getLibroPagado();
        $estado = $libro->getEstado();

        $sql = "INSERT INTO libro (TITULO, ANO_PUBLICACION, PRECIO, DESCRIPCION, AUTOR, IDIOMA, CATEGORIA, LIBRO_PAGADO, ESTADO)
        VALUES ('$titulo','$ano_publicacion','$precio','$descripcion','$autor','$idioma','$categoria','$libro_pagado','$estado')";
        $resultado = $conexion->Ejecutar($sql);

        $conexion->Cerrar();

        return $resultado;

    }

    /* Método para borrar una tabla */
    public function Eliminar($id)
    {
        $conexion = new Conexion();

        // Buscar el dueño para devolver los datos
        $sqlBuscar = "SELECT * FROM libro WHERE id_LIBRO = $id";
        $resultadoBuscar = $conexion->Ejecutar($sqlBuscar);

        if ($resultadoBuscar && mysqli_num_rows($resultadoBuscar) > 0) {
            $fila = $resultadoBuscar->fetch_assoc();
            $libro = new Libro();
            $libro->setIdLibro($fila["id_LIBRO"]);
            $libro->setTitulo($fila["TITULO"]);
            $libro->setAnoPublicacion($fila["ANO_PUBLICACION"]);
            $libro->setPrecio($fila["PRECIO"]);
            $libro->setDescripcion($fila["DESCRIPCION"]);
            $libro->setAutor($fila["AUTOR"]);
            $libro->setIdioma($fila["IDIOMA"]);
            $libro->setCategoria($fila["CATEGORIA"]);
            $libro->setLibroPagado($fila["LIBRO_PAGADO"]);
            $libro->setEstado($fila["ESTADO"]);

            $sqlEliminar = "DELETE FROM LIBRO WHERE id_LIBRO = $id";
            $conexion->Ejecutar($sqlEliminar);

            $conexion->Cerrar();
            return $libro;
        } else {
            $conexion->Cerrar();
            return null;
        }
    }

    /* Método para actualizar datos por el id */
    public function Actualizar($libro)
    {
        $conexion = new Conexion();

        $id = $libro->getIdLibro();
        $titulo = $libro->getTitulo();
        $anopublicacion = $libro->getAnoPublicacion();
        $precio = $libro->getPrecio();
        $descripcion = $libro->getDescripcion();
        $autor = $libro->getAutor();
        $idioma = $libro->getIdioma();
        $categoria= $libro->getCategoria();
        $libropagado = $libro->getLibroPagado();
        $estado = $libro->getEstado();


        // Consulta UPDATE para modificar datos del dueño con el id dado
        $sql = "UPDATE LIBRO SET TITULO = '$titulo', ANO_PUBLICACION = '$anopublicacion', 
                 PRECIO = '$precio', DESCRIPCION='$descripcion', AUTOR='$autor', IDIOMA='$idioma', 
                 CATEGORIA = '$categoria', LIBRO_PAGADO = '$libropagado', ESTADO='$estado' WHERE id_LIBRO = $id";

        $resultado = $conexion->Ejecutar($sql);

        $conexion->Cerrar();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
}