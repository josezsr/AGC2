<?php
require '../conexion.php';

$idmaterial= $_GET['idmaterial'];

$sql = "DELETE FROM material WHERE idmaterial = '$idmaterial'";
$resultado = $conexion->query($sql);
header('Location: ../../material.php');

?>
<html lang="es">
