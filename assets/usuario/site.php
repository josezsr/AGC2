<?php
  require '../php/conexion.php'
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
	<link  rel="icon "href="https://i.ibb.co/BwDF0z5/inaoe.png" >
	<script src="https://kit.fontawesome.com/44c6a7bb06.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../../style/head.css">
    <link rel="stylesheet" href="../../style/table.css">
	<title>Site</title>
   

</head>
<body>
    <nav class="navbar navbar-expand-sm  navbar-dark " style="background-color: #1537B3;" >
		<a class="navbar-brand" href="panelU.php">
			<img class="liex" src="../../img/inaoe.png">
		</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		    <span class="navbar-toggler-icon"></span>
		  </button>

 		<div class="collapse navbar-collapse" id="navbarSupportedContent">
  			<ul class="navbar-nav ml-auto">
				
				<li class="nav-item active">
					<a class="nav-link" href="material.php">Material</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Site</a>
				</li>
				
				<li class="nav-item active">
					<a class="nav-link" href="../php/cerrar.php">cerrar secion</a>
				</li>
			</ul>
  		</div> 
	 </nav>

     <section class="main">

        <ul class="collapsible text-center pt-3" data-collapsible="accordion">
            <!-- Tema 1 -->
               <li>
                   <div class="collapsible-header text-center"><i class="material-icons"></i>Site</div>
                   <div class="collapsible-body">
                       <div class="">
                           <div class="col s12 m12 l12 ">
                               <table class="pt-4">
                                   <thead>
                                       <TR>
                                           <th>#</th>
                                           <th>nombre</th>
                                           <th>ubicacion</th>
                                           <th>Modificar</th>
                                           <th>Eliminar</th>
                                       </TR>
                                   </thead>
                                   <tbody class="pt-9">
                                       <?php
                                       $link = mysqli_connect("localhost", "root", "","control");
                                       $sql =  mysqli_query($link, "SELECT * from site ");

                                       while ($row = mysqli_fetch_array($sql)) {
                                       ?>
                                           <TR>
                                               <TD><?php echo $row['idsite']; ?></TD>
                                               <TD><?php echo $row['nombre']; ?></TD>
                                               <TD><?php echo $row['ubicacion']; ?></TD>
                                               <td><a href="modificar/modificar1.php?id_exam=<?php echo $row['idmaterial']; ?>"><button class=" waves-effect waves-color btn-small" type="submit">Modificar</button></a></td>
                                               <td><a href="eliminar/eliminar1.php?id_exam=<?php echo $row['idmaterial']; ?>"><button class=" waves-effect waves-color btn-small" type="submit">Eliminar</button></td>
                                           </TR>
                                   </tbody>
                               <?php
                                       }
                               ?>
                               </table>
                           </div>
                       </div>
                   </div>
               </li>

           </ul>
       
   </section>
   <section class="footer">
       
   </section>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>






</body>
</html>