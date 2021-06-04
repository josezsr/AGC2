<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
	<link  rel="icon "href="https://i.ibb.co/BwDF0z5/inaoe.png" >
	<script src="https://kit.fontawesome.com/44c6a7bb06.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../style/head.css">
	<link rel="stylesheet" href="../../style/stilo.css">
	<title>Registro</title>

	
 
</head>
<body>
	<nav class="navbar navbar-expand-sm  navbar-dark " style="background-color: rgb(0, 0, 156);" >
		<a class="navbar-brand" href="#">
			<img class="liex" src="../../img/inaoe.png">
		</a>	 
	 </nav>

	<div class="container">
		<div class="row">
			<h2 style="text-align:center" >Registro</h2><br>
			<h3 style="text-align:center">Para Registrarte, por favor llena los siguientes campos</h3>
		</div>	
			<form   class="form-horizontal" action="modulos/newregistro.php" method="POST" class="pt-5">
						<div class="from-group">
						<label for="respuesta" class="col-sm-2 control-label">nombre</label>
							<div >
								<input class="form-control" type="text" name="nombre" placeholder="nombre" required><br>
							</div>
						</div>
						<div class="form-group">
						<label  for="respuesta" class="col-sm-2 control-label">Apellido Paterno</label>
							<div class="form-group" >
								<input class="form-control" type="text" name="paterno" placeholder="Apellido paterno" required><br>
							</div>
						</div>
						<div class="form-group">
						<label for="respuesta" class="col-sm-2 control-label">Apellido Materno</label>
								<div >
									<input class="form-control" type="text" name="materno" placeholder="Apellido materno" required><br>
								</div>
						</div>						
						<div class="form-group">
						<label for="respuesta" class="col-sm-2 control-label">correo</label>
							<div>
								<input class="form-control" type="email" name="correo" placeholder="mail" required>
							</div>
						</div>
						<div  class="form-group">
						<label for="respuesta" class="col-sm-2 control-label"> password</label>
							<div >
								<input cl class="form-control" type="password" name="pass" placeholder="contraseña" require>
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Rol</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="area" name="idrol">
                                        <option value="-------">--------</option>
                                        <option value="1">Adminstrador</option>
                                        <option value="2">usuario</option>
                                        <option value="3">inivitado</option>
                                        </select>
                                </div>
                        </div>
						<div >
						<a href="panelA.php" class="btn btn-default">Regresar</a>
							<button type="submit" class="btn btn-primary" >Registrar</button>
						</div>
				   </form>
			
		</div>
		

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>