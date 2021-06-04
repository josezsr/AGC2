<!DOCTYPE html>
<html lang="es" dir="ltr" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link  rel="icon" href="https://i.ibb.co/BwDF0z5/inaoe.png" >
	<script src="https://kit.fontawesome.com/44c6a7bb06.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="style/login.css">
	<title>login</title>
	
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


	<section class="centro">
		<div class="modal-dialog text-center">
			<div class="col sm-12 main-section">

				<div class="modal-content">

					<div class="col-12 user-img pt-3">
						<img  src="img/inaoe.png" />
					</div><br>

					<form method="POST"  action="assets/php/validate.php" class="pt-4">
						<div>
							<input type="mail" name="correo" required><br>
							<label>correo</label>
						</div>
						<div>
							<input type="password" name="pass" required><br>
							<label>password</label>
						</div>
						<button type="submit">Iniciar secion </button>
					</form>

				</div>				
				
			</div>
		</div>



		<div>
			<button type="submit" name="back">
				<a href="index.html">back</a>
			</button>
		</div>	
	
		
	</section>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
		<!--<script src="js/main.js"></script>-->

</body>
</html>