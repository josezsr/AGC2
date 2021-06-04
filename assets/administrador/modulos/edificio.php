<?php
require '../../require/conexion.php';


$nombre =$_POST['nombre'];
$descripcion=$_POST['descripcion'];


$sql = "INSERT INTO edificio(nombre,descripcion) VALUES ('$nombre','$descripcion')";
     if( mysqli_query($conexion, $sql)){
         echo"successfully";
         header("Location:../administrador/AGedificio.php");
     }
     else{
         echo"error" . $sql . "<br>" . mysqli_error($conexion);
     }
     
    mysqli_close( $conexion );


?>