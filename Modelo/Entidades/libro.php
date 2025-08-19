<?php

class Libro
{
    private $idLibro;
    private $titulo;
    private $anoPublicacion;
    private $precio;
    private $descripcion;
    private $autor;
    private $idioma;
    private $categoria;
    private $libroPagado;
    private $estado;

    /**
     * @return mixed
     */
    public function getIdLibro()
    {
        return $this->idLibro;
    }

    /**
     * @param mixed $idLibro
     */
    public function setIdLibro($idLibro): void
    {
        $this->idLibro = $idLibro;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAnoPublicacion()
    {
        return $this->anoPublicacion;
    }

    /**
     * @param mixed $anoPublicacion
     */
    public function setAnoPublicacion($anoPublicacion): void
    {
        $this->anoPublicacion = $anoPublicacion;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * @param mixed $idioma
     */
    public function setIdioma($idioma): void
    {
        $this->idioma = $idioma;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria): void
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getLibroPagado()
    {
        return $this->libroPagado;
    }

    /**
     * @param mixed $libroPagado
     */
    public function setLibroPagado($libroPagado): void
    {
        $this->libroPagado = $libroPagado;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

}