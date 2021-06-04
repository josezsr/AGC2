<?php
include '../../require/conexion.php';
include '../../require/function.php';
 
$tipo = $_POST['nombre'];
$descripcion =$_POST['descripcion'];

$sql="INSERT INTO tipo(tipo,descripcion) VALUES ('$tipo','$descripcion')";
    if( mysqli_query($conexion, $sql)){
        echo"successfully";
        header("Location:../administrador/AGtipo.php");
    }
    else{
        echo"error" . $sql . "<br>" . mysqli_error($conexion);
    }

    mysqli_close( $conexion );
?>