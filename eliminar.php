<?php
include_once "programacion.php";

if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    $programa = new Programacion();
    $programa->setId($id);
    $resultado = $programa->eliminar();

    if ($resultado != 0) {
        header("location: index.php");
    } else {
        echo "Error: No se pudo eliminar";
    }
}
