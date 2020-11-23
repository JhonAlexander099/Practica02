<?php
include_once "conexionBD.php";

class Estudiante
{
    private $inicio;
    private $tipo;
    private $idprof;
    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function insertar(String $inicio, String $tipo, int $idprof): bool
    {