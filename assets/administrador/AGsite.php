<!doctype html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
	<link  rel="icon "href="https://i.ibb.co/BwDF0z5/inaoe.png" >
	<script src="https://kit.fontawesome.com/44c6a7bb06.js" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="../../style/head.css">
    <link rel="stylesheet" href="../../style/table.css">
	<title>Agregar site </title>

	<?php
    session_start();
    if (!isset($_SESSION['tipo'])) {
        
        if ($_SESSION['tipo'] == 1) {
            header("Location: panelA.php");
        }
    }
    ?>
</head>
<body>

<nav class="navbar navbar-expand-sm  navbar-dark " style="background-color: #1537B3;" >
		<a class="navbar-brand" href="panelA.php">
			<img class="liex" src="../../img/inaoe.png">
		</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		    <span class="navbar-toggler-icon"></span>
		  </button>

 		<div class="collapse navbar-collapse" id="navbarSupportedContent">
  			<ul class="navbar-nav ml-auto">
				
				
				<li class="nav-item active">
					<a class="nav-link" href="../php/cerrar.php">cerrar secion</a>
				</li>
			</ul>
  		</div> 
	 </nav>

 <div class="container">
 <div class="row">
			<h1 style="text-align:center">Agregar nuevo site</h3>
		</div>
    <form  class="form-horizontal" method="POST" action="modulos/site.php" >
        <div class="form-group">
		<label for="respuesta" class="col-sm-2 control-label" >Nombre del Site</label>
            <input type="text" class="form-control" name="nombre" placeholder="" require><br>
        </div>
        <div>
		<label for="respuesta" class="col-sm-2 control-label">ubicacion del site</label>

            <input type="text"   class="form-control" name="ubicacion" placeholder="ubicacion del site"><br>
        </div>
       
		<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="panelA.php" class="btn btn-default">Regresar</a>
						<button type="submit"  class="btn btn-primary">Enviar</button>
					</div>
				</div>
    </form>

 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>