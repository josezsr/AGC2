<?php
include '../require/conexion.php';
include '../require/function.php';

$Nplanta=$_POST['nombre'];
$idedificio=$_POST['idedificio'];


$sql="INSERT INTO planta(Nplanta,idedificio) VALUES ('$Nplanta','$idedificio')";
if( mysqli_query($conexion, $sql)){
    echo"successfully";
    header("Location:../administrador/AGedificio.php");
}
else{
    echo"error" . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close( $conexion );

?>