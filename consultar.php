<?php
include_once "conexionBD.php";

class leccion{
    private $numero;
    private $idprog;
    private $stado;

    public function consultar()
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM Leccion";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();

            $conexionDB->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}