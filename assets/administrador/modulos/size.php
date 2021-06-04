<?php
include '../../php/conexion.php';
include '../../php/function.php';

$size = $_POST['tamaño'];

$sql = "INSERT INTO size (size) VALUES ('$size')";
if( mysqli_query($conexion, $sql)){
    echo"successfully";
    header("Location:../panelA.php");
}
else{
    echo"error" . $sql . "<br>" . mysqli_error($conexion); 
}

mysqli_close( $conexion );
?>