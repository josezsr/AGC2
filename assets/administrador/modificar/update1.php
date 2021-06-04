<?php
	
	require '../conexion.php';
	$idmaterial=$_POST['idmaterial'];
	$nombre=$_POST['nombre'];
	$descriopcion=$_POST['descripcion'];
	$idsize=$_POST['idsize'];
	$idmarca=$_POST['idmarca'];
	$idsite=$_POST['idsite'];
	$cantidad =$_POST['cantidad'];
	
	
	$sql ="UPDATE  tema1 SET pregunta='$pregunta',respuesta='$respuesta',opcion1='$opcion1',opcion2='$opcion2',opcion3='$opcion3' WHERE id_exam = '$id_exam'";
	
	if( $resultado = $conexion->query($sql)===true){
		 echo"successfully";
		 header("Location: ../BancoPreguntas.php");
	 }
	 else{
		 echo"error" . $sql . "<br>" . mysqli_error($conexion);
	 }
	 
	mysqli_close( $conexion );
?>
?> 
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="modificar.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>