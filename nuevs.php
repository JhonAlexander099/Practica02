<?php
include_once "leccion.php";

?>

<?php
if (isset($_POST["submit"])) {
    $numero = $_POST["numero"];
    $stado = $_POST["stado"];
    $comentario_profesor = $_POST["comentario alumno"];
    $comentario_estudiante = $_POST["comentario estudiante"];

    $leccion = new Leccion();
    $resultado = $leccion->insertar($numero, $stado, $comentario_profesor, $comentario_estudiante);

    if ($resultado != 0) {
        header("location: index.php");
    } else {
        echo "Error: Informacion no Eliminada";
    }
}
