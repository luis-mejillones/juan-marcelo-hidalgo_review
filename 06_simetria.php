<?php
/**
 * Es legible identificar que para cada propiedad se crea
 * un metodo getter y otro setter
 */

class Alumno {

    private $nombre = '';

    private $edad = 0;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

}