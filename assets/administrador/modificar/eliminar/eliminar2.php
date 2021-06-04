<?php
require '../conexion.php';

$idusuario = $_GET['idusuario'];

$sql = "DELETE FROM usuario WHERE idusuario = '$idusuario'";
$resultado = $conexion->query($sql);
header('Location: ../../usuarios.php');

?>
