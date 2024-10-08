<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
	<link  rel="icon "href="https://i.ibb.co/BwDF0z5/inaoe.png" >
	<script src="https://kit.fontawesome.com/44c6a7bb06.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style/registro.css">
	<title>Registro</title>

	<?php session_start(); ?>

 
</head>
<body>
	<nav class="navbar navbar-expand-sm  navbar-dark " style="background-color: rgb(0, 0, 156);" >
		<a class="navbar-brand" href="#">
			<img class="liex" src="img/inaoe.png">
		</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		    <span class="navbar-toggler-icon"></span>
		  </button>

 		<div class="collapse navbar-collapse" id="navbarSupportedContent">
  			<ul class="navbar-nav ml-auto">
				
				<li class="nav-item dropdown">
					<a ref="javascript:void(0)" class="dropbtn nav-link" href="#"><i class="far fa-user-circle"></i></a>
					<div class="dropdown-content">
						<a href="login.html"><i class="far fa-user"></i>    login</a>
						<a href="registro.html"><i class="fab fa-wpforms"></i>   registro</a>
					  </div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">ACERCA DE </a>
				</li>
			</ul>
  		</div> 
	 </nav>

	<section class="center">
		<h2 class="text-center" >Registro</h2>
		<h3 class="text-center">Para Registrarte, por favor llena los siguientes campos</h3>
		<div class=" modal-dialog text-center">
			<div class="col-12 main-section">
				<div class="modal-content">
					<form action="assets/invitado/registro.php" method="POST" class="pt-5">
						<div>
							<input class="datos" type="text" name="nombre" placeholder="nombre" required><br>
							<label>nombre</label>
						</div>
						<div >
							<input class="datos" type="text" name="paterno" placeholder="Apellido paterno" required><br>
							<label>Apellido Paterno</label>
						</div>
						<div>
							<input class="datos" type="text" name="materno" placeholder="Apellido materno" required><br>
							<label>Apellido Materno</label>
						</div>
						<div >
							<input class="datos" type="email" name="correo" placeholder="mail" required><br>
							<label>correo</label>
						</div>
						<div >
							<input class="datos" type="password" name="pass" placeholder="contraseña"><br>
							<label>password</label>
						</div>
						<div >
							<button type="submit" >Registrar</button>
						</div>
				   </form>
				</div>
			</div>
		</div>

	</section>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>