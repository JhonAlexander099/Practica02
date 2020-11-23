<?php
include_once "conexionBD.php";

class Estudiante
{
    private $nombre;
    private $email;
    private $idleccion
    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function insertar(String $nombre, String $email, int $idleccion): bool
    {