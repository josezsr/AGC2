<?php
$nombre = $_POST['nombre'];
$Apeterno = $_POST['paterno'];
$Amaterno = $_POST['materno'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

$sql = "INSERT INTO usuario(Apaterno, Amaterno, nombre, correo, pass, idrol) VALUES ('$Apeterno','$Amaterno','$nombre','$correo','$pass','3')";

if( mysqli_query($conexion, $sql)){
    echo"successfully";
    header("Location:../../login.html");
}
else{
    echo"error" . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close( $conexion );
?>



?>