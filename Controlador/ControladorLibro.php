<?php
include_once "./Modelo/Conexion.php";
include_once "./Modelo/Entidades/Libro.php";
include_once "./Modelo/Metodos/LibroM.php";

class ControladorLibro
{
    /* Controlador buscar por medio del ID*/
    private function JSONLibro($obj){
        return json_encode([
            'id' => $obj->getIdLibro(),
            'titulo' => $obj->getTitulo(),
            'ano_publicacion' => $obj->getAnoPublicacion(),
            'precio' => $obj->getPrecio(),
            'descripcion' => $obj->getDescripcion(),
            'autor' => $obj->getAutor(),
            'idioma' => $obj->getIdioma(),
            'categoria' => $obj->getCategoria(),
            'libro_pagado' => $obj->getLibroPagado(),
            'estado' => $obj->getEstado()
        ]);
    }

    public function getLibro(){
        $nombreLibro = $_GET['libro'];
        $libroM = new LibroM();
        $libros = $libroM->BuscarTodos();

        for ($i = 0; $i < count($libros); $i++) {
            if ($libros[$i]->getTitulo() == $nombreLibro) {
                $jsonLibro = $this->JSONLibro($libros[$i]);
                require_once "./Vista/libro/libro1.php";
                return;
            }
        }

    }
    
}