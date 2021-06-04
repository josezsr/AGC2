<?php
include '../php/conexion.php';
$nombre=$_POST['nombre'];
$descriopcion=$_POST['descripcion'];
$idsize=$_POST['idsize'];
$idmarca=$_POST['idmarca'];
$idsite=$_POST['idsite'];
$cantidad =$_POST['cantidad'];


 

$sql ="INSERT INTO material( nombre, descripcion, idsize, idmarca, idimagen, idsite, cantidad) VALUES
 ('$nombre','$descriopcion','$idsize','$idmarca',''$idsite','$cantidad')";

$resultado=$mysqli->query($sql);
$id_inser=$mysqli->insert_id;

if($_files["archivo"]["error"]>0){
    echo "error al cargar archivo";
}else{
    $permitidos = array("image/jpg","image/png","image/");
    $limite_kb=500;
    if(in_array($_FILES["archivo"]["type"],$permitidos) && $_FILES["archivos"]["size"]<= limite_kb*1024){
        $ruta ='files/'.id_insert.'/';
        $archivo = $ruta.$_FILES["archivo"]["name"];
        if(!file_exists($ruta)){
                mkdir($ruta);
        }
        if(!file_exists($archivo)){
            $resultado =@move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo); 
            if($resultado){
                echo "archivo guardaro";
            }else{
                echo "Error al guardar el archivo";
            }
        }else{
            echo "archivo ya existe";
        }
    }else{
        echo "Archivo no permitido o excede el tamaño";
    }
}




if( mysqli_query($conexion, $sql)){
    echo"successfully";
    header("Location:../administrador/AGedificio.php");
}
else{
    echo"error" . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close( $conexion );


?>