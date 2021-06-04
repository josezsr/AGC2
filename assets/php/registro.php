<?php

 $Apaterno = $_POST['paterno'];
 $Amaterno = $_POST['materno'];
 $nombre = $_POST['nombre'];
 $correo = $_POST['correo'];
 $pass = $_POST['pass'];


 


    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "control");
    if (mail_exist($correo, $link)) {
        echo json_encode('error_2');
    }else {
        $sql_1 = "INSERT INTO usuario(Apaterno, Amaterno, nombre, correo, pass) 
        VALUES ('$Apaterno','$Amaterno','$nombre','$correo','$pass')";
        mysqli_query($link, $sql_1);
        mysqli_close($link);
        header("Location: ../index.php");
       // echo json_encode('correcto');

    }


function mail_exist($correo, $conexion){
    $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
    $result =  mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
    mysqli_close($conexion);
    mysqli_free_result($result);
}
 
?>