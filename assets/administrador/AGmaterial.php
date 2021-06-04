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
    <title>Agregar Material </title>
</head>
<body>
<nav class="navbar navbar-expand-sm  navbar-dark " style="background-color: #1537B3;" >
		<a class="navbar-brand" href="../panelA.php">
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
            <h1 style="text-align:center">Agregar nuevo Material</h1>

        </div>
    <form class="form-horizontal" method="POST" action="/modulos/material.php" enctype="mulitpart/form-data" autocomplete="off">
       <div class="form-group">
       <label class="col-sm-4 control-label">Nombre del material</label>
             <div>
              <input type="text" class="form-control" name="nombre" placeholder="Nuevo material" require>
             </div>
       </div>
       <div class="form-group">
       <label class="col-sm-2 control-label">Descripción</label>
             <div>
              <input type="text" class="form-control" name="nombre" placeholder="Descripción" require>
             </div>
       </div>


        <div class="form-group">
            <label>tamaño</label>
             <div class="col-sm-8 control-label">
                <select class="form-control" id="area" name="idsize">
                     <option value="-------">--------</option>
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
            <label>marca</label>
            <div class="col-sm-8 control-label">
                <select class="form-control" id="area" name="idmarca">
                    <option value="-------">--------</option>
                    <option value="1">panduit</option>
                    <option value="2">thorman</option>
                    <option value="3">3M</option>
                </select>
            </div>
         </div>
        
        <div class="form-group">
            <label>ubicacion</label>
             <div class="col-sm-8 control-label">
                <select class="form-control" id="area" name="idsite">
                  <option value="-------">--------</option>
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
       <label class="col-sm-2 control-label">cantidad</label>
             <div>
              <input type="text" class="form-control" name="nombre" placeholder="cantidad" require>
             </div>
       </div>
       <div class="form-group">
       <label class="col-sm-2 control-label">archivo</label>
             <div>
              <input type="file" class="form-control" name="archivo" require>
             </div>
       </div>
        
        <div class=form-group>
        </div>
         <div class="col-sm-offset-2 col-sm-10">
         <a href="panelA.php" class="btn btn-default">Regresar</a>
			<button type="submit" class="btn btn-primary" >Evniar</button>
		</div>

    </form>

 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>