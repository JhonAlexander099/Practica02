<?php
include_once "conexionBD.php";

class Estudiante
{
    private $nombre;
    private $idioma;
    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function insertar(String $nombre, String $idioma): bool
    {