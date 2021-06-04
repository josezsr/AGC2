<?php
include '../../require/conexion.php';
include '../../require/function.php';
 
$nombre = $_POST['nombre'];

$sql="INSERT INTO marca(nombre) VALUES ('$nombre')";
    if( mysqli_query($conexion, $sql)){
        echo"successfully";
        header("Location:../administrador/AGmarca.php");
    }
    else{
        echo"error" . $sql . "<br>" . mysqli_error($conexion);
    }

    mysqli_close( $conexion );
?>