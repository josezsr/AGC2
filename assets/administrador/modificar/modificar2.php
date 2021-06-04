<?php
error_reporting(-1);
require '../../php/conexion.php';

$idusuario = $_GET['idusuario'];
$sql = "SELECT * FROM usuario WHERE idusuario = '$idusuario'";
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

			
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Modificar usuario</title>

	<nav class="navbar"  style="background-color:#1537B3 solid;">
		<a href="../panelA.php" class="brand-logo">
			<img src="https://i.ibb.co/BwDF0z5/inaoe.png" id="img2">
		</a>
	</nav>

</head>

<body>


	<div class="container">
		<div class="row">
			<h3 style="text-align:center">MODIFICAR USUARIO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="update2.php" autocomplete="off">

			<input type="hidden" id="idusuario" name="idusuario" value="<?php echo $row['idusuario']; ?>" />

			<div class="form-group">
				<label for="pregunta" class="col-sm-2 control-label">Apellido paterno</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="paterno" name="paterno" placeholder="Pregunta" value="<?php echo $row['Apaterno']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="respuesta" class="col-sm-2 control-label">Apellido Materno</label>
				<div class="col-sm-10">
					<input type="TEXT" class="form-control" id="materno" name="materno" placeholder="respuesta" value="<?php echo $row['Amaterno']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="opcion1" class="col-sm-2 control-label">nombre</label>
				<div class="col-sm-10">
					<input type="TEXT" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="opcion2" class="col-sm-2 control-label">correo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="correo" name="correo" placeholder="correo" value="<?php echo $row['correo']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="opcion3" class="col-sm-2 control-label">password</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="pass" name="pass" placeholder="password" value="<?php echo $row['pass']; ?>">
				</div>
			</div>
			<div class="form-group">
                            <label>Rol</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="idrol" name="idrol" value="<?php echo $row['idrol']; ?>">
                                        <option value="<?php echo $row['idrol']; ?>" ><?php echo $row['idrol']; ?></option>
                                        <option value="1">1  Adminstrador</option>
                                        <option value="2">2  usuario</option>
                                        <option value="3">3  inivitado</option>
                                        </select>
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

</body>

</html>