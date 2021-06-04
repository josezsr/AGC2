<?php
require '../conexion.php';

$id_exam = $_GET['id_exam'];

$sql = "DELETE FROM tema5 WHERE id_exam = '$id_exam'";
$resultado = $conexion->query($sql);
header('Location: ../BancoPreguntas.php');

?>
