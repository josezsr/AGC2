<?php
error_reporting(-1);
require '../conexion.php';

$id_exam = $_GET['id_exam'];
$sql = "SELECT * FROM tema5 WHERE id_exam = '$id_exam'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_array();
?>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<link rel="icon" href="https://i.ibb.co/syhy6hr/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/inicio.css">
	<link rel="stylesheet" href="../css/paneladmin.css">
	<script src="js/scripts.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SIQUES | Modificar</title>

	<nav class="navbar" style="background-color: #000000">
		<a href="../index.php" class="brand-logo">
			<img src="https://i.ibb.co/kXcf6KV/buaplogo.png" id="img2">
		</a>
	</nav>
</head>

<body>
	<div class="container">
		<div class="row">
			<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="update5.php" autocomplete="off">

			<input type="hidden" id="id" name="id_exam" value="<?php echo $row['id_exam']; ?>" />

			<div class="form-group">
				<label for="pregunta" class="col-sm-2 control-label">Pregunta</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Pregunta" value="<?php echo $row['pregunta']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="respuesta" class="col-sm-2 control-label">RESPUESTA</label>
				<div class="col-sm-10">
					<input type="TEXT" class="form-control" id="respuesta" name="respuesta" placeholder="respuesta" value="<?php echo $row['respuesta']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="opcion1" class="col-sm-2 control-label">opcion1</label>
				<div class="col-sm-10">
					<input type="TEXT" class="form-control" id="opcion1" name="opcion1" placeholder="Telefono" value="<?php echo $row['opcion1']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="opcion2" class="col-sm-2 control-label">opcion2</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="opcion2" name="opcion2" placeholder="Telefono" value="<?php echo $row['opcion2']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="opcion3" class="col-sm-2 control-label">opcion3</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="opcion3" name="opcion3" placeholder="Telefono" value="<?php echo $row['opcion3']; ?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="../paneladmin.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>
	</div>

</body>

</html>