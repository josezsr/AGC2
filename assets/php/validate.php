<?php
require_once('conexion.php');
session_start();
$error = 0;
if (isset($_POST['correo'])) {
    $correo= mysqli_real_escape_string($conexion, $_POST['correo']);
    $pass= mysqli_real_escape_string($conexion, $_POST['pass']);

    mysqli_select_db($conexion, $database_conexion);   
    //los campos requeridos tienen que estar en orden como se llaman  
    $sql=sprintf("SELECT  correo, pass, idrol from usuario WHERE correo='%s'",
        addslashes($correo));
    $sqlRS = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    $numRows = mysqli_num_rows($sqlRS);
    if ($numRows > 0) {
        $row=mysqli_fetch_array($sqlRS);
        if ($pass == $row['pass']) { //Revisar el password
            $error = 0; //No error
            $_SESSION['correo'] = $correo;
            //$_SESSION['resgistros'] = $row['resgistros'];
        }
        else {
            $error = 1; //Password error
        }
    }
    else {
        $error = 1; //User error
    } //if numRows   
}
else {
    $error = 3; //Unknown error
} //isset $_POST
if ($error == 0) {
  if($row['idrol']==1){
        header("Location:../administrador/panelA.php");
    }else{
        if($row['idrol']==2){
            header("Location:../usuario/panelU.php");
        }else {
            if($row['idrol']==3){
                header("Location:../invitado/panelIn.php");
            }else{
                header("location:../../login.html");
                echo "registrate para aceder al sistemas";
            }
        }
    }
     //header("Location:../../panelA.html");
    //header("Location: registraonlist.php");
}
else { //Existe un error
    session_destroy ();
    //header("Location: usuario2.html");
    header("Location:../../login.html?error=$error");
} //error == 0
?>