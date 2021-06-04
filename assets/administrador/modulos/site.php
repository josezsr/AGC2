<?php
include '../../../require/conexion.php';
include '../../../require/function.php';
$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];

$sql= "INSERT INTO site (nombre, ubicacion) VALUES ('$nombre','$ubicacion')";
if( mysqli_query($conexion, $sql)){
    echo"successfully";
    header("Location:../AGsite.php");
}
else{
    echo"error" . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close( $conexion );
?>