<?php
include_once "conexionBD.php";

class Estudiante
{
    private $numero;
    private $stado;
    private $idprog;
    private $comenProf;
    private $comenEstd;
    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function insertar(int $numero, String $stado, int $idprog, String $comenProf, String $comenEstd): bool
    {