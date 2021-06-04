<?php
require '../../php/conexion.php';
$nombre = $_POST['nombre'];
$Apeterno = $_POST['paterno'];
$Amaterno = $_POST['materno'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$idrol = $_POST['idrol'];

$sql = "INSERT INTO usuario(Apaterno, Amaterno, nombre, correo, pass, idrol) VALUES 
('$Apeterno','$Amaterno','$nombre','$correo','$pass','$idrol')";

if( mysqli_query($conexion, $sql)){
    echo"successfully";
    header("Location:../n_Usuarios.php");
}
else{
    echo"error" . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close( $conexion );
?>



?>