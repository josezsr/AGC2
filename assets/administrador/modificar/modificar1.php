
<?php
error_reporting(-1);
	require '../../php/conexion.php';
	
     $idmaterial = $_GET['idmaterial'];
     $sql = ("select mt.idmaterial, mt.nombre, mt.descripcion, t.size, m.nombre, i.URL, s.nombre, mt.cantidad  from 
	 material as mt inner join size as t on mt.idsize=t.idsize 
	 inner join marca as m on mt.idmarca=m.idmarca 
	 inner join imagen as i on mt.idimagen=i.idimagen
	 inner join site as s on mt.idsite=s.idsite");

	 $resultado = $conexion->query($sql);
	$row = $resultado->fetch_array();
?> 
<html lang="es">
	<head> 
		
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
	<link  rel="icon "href="https://i.ibb.co/BwDF0z5/inaoe.png" >
	<script src="https://kit.fontawesome.com/44c6a7bb06.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../../style/head.css">
	<link rel="stylesheet" href="../../style/stilo.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Modificar</title>

	

	</head>
	
	<body>
	<nav class="navbar navbar-expand-sm  navbar-dark " style="background-color: #1537B3 solid;" >
		<a class="navbar-brand" href="#">
		<img src="../../../img/inaoe.png" >
		</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		    <span class="navbar-toggler-icon"></span>
		  </button>

 		
	 </nav>


		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR material</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update1.php"  enctype="mulitpart/form-data" autocomplete="off">
               
				<input type="hidden" id="idmaterial" name="idmaterial" value="<?php echo $row['idmaterial']; ?>" />

				<div class="form-group">
					<label for="pregunta" class="col-sm-2 control-label">nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pregunta" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="respuesta" class="col-sm-2 control-label">descripcion</label>
					<div class="col-sm-10">
						<input type="TEXT" class="form-control" id="descripcion" name="descripcion" placeholder="respuesta" value="<?php echo $row['descripcion']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
				  <label>tamaño</label>
					<div class="col-sm-10">
						<select class="form-control" id="area" name="idsize" value="<?php echo $row['size']; ?>" >
							<option value="-------"><?php echo $row['size']; ?></option>
							<option value="1">1"</option>
							<option value="2">2"</option>
							<option value="3">3"</option>
							<option value="4">4"</option>
							<option value="5">5"</option>
							<option value="6">6"</option>
							<option value="7">1 m</option>
							<option value="8">3.3 m</option>
						</select>
					</div>
					
				</div>
				<div class="form-group">
					<label for="opcion2" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-10">
						<select class="form-control" id="area" name="idmarca" value="<?php echo $row['marca']; ?>" >
							<option value="-------"><?php echo $row['nombre']; ?></option>
							<option value="1">panduit</option>
							<option value="2">thorman</option>
							<option value="3">3M</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="opcion3" class="col-sm-2 control-label">ubicacion</label>
					<div class="col-sm-10">
						<select class="form-control" id="area" name="idsite" value="<?php echo $row['site']; ?>" >
						<option value="-------"><?php echo $row['nombre']; ?></option>
						<option value="1">Site 8</option>
						<option value="2">la nena</option>
						<option value="3">site DFA</option>
						<option value="4">microelectronica</option>
						<option value="5">gallinero</option>
						<option value="6">caballerisa</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="respuesta" class="col-sm-2 control-label">cantidad</label>
					<div class="col-sm-10">
						<input type="TEXT" class="form-control" id="cantidad" name="cantidad" placeholder="respuesta" value="<?php echo $row['cantidad']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="respuesta" class="col-sm-2 control-label">archivo</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo" placeholder="respuesta" value="<?php echo $row['archivo']; ?>"  required>
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