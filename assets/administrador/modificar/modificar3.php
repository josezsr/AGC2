<?php
error_reporting(-1);
require '../../php/conexion.php';

$idsite = $_GET['idsite'];
$sql = "SELECT * FROM  site WHERE idsite = '$idsite'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_array();
?>

<html lang="es">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
	<link  rel="icon "href="https://i.ibb.co/BwDF0z5/inaoe.png" >
	<script src="https://kit.fontawesome.com/44c6a7bb06.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../../../style/head.css">
	<link rel="stylesheet" href="../../../style/stilo.css">

	
    
    
	<title>Modificar Site</title>

	<nav class="navbar"  style="background-color:#1537B3 solid;">
		<a href="../panelA.php" class="brand-logo">
			<img src="https://i.ibb.co/BwDF0z5/inaoe.png" id="img2">
		</a>
	</nav>
</head>

<body>
	<div class="container">
		<div class="row">
			<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="update3.php" autocomplete="off">

			<input type="hidden" id="id" name="site" value="<?php echo $row['idsite']; ?>" />

			<div class="form-group">
				<label for="pregunta" class="col-sm-2 control-label">nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="respuesta" class="col-sm-2 control-label">RESPUESTA</label>
				<div class="col-sm-10">
					<input type="TEXT" class="form-control" id="ubicacion" name="ubicacion" placeholder="ubicacion" value="<?php echo $row['ubicacion']; ?>" required>
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="../panelA.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>