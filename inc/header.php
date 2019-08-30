<!DOCTYPE html>
<html>
<head>
	<title>Universidad Piloto</title>
	<!-- styles-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://localhost/uni_piloto/css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://localhost/uni_piloto/css/bootstrap.min.css">
  <link href="http://localhost/uni_piloto/open-iconic-master/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
	<!-- Scripts-->

	<script type="text/javascript" src="http://localhost/uni_piloto/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="http://localhost/uni_piloto/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://localhost/uni_piloto/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://localhost/uni_piloto/js/aplication.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark  navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#" id="p-title">UNIVERSIDAD PILOTO DE COLOMBIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Asignaturas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/uni_piloto/controllers/AsignaturaController.php?action=register">Registro</a>
          <a class="dropdown-item" href="http://localhost/uni_piloto/controllers/AsignaturaController.php?action=view">Listado</a>
       
        </div>
      </li>




      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Estudiantes 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/uni_piloto/controllers/EstudianteController.php?action=register">Registro</a>
          <a class="dropdown-item" href="http://localhost/uni_piloto/controllers/EstudianteController.php?action=view">Listado</a>
       
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Control de  notas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/uni_piloto/controllers/ResultadoController.php?action=register">Registro</a>
          <a class="dropdown-item" href="http://localhost/uni_piloto/controllers/ResultadoController.php?action=view">Listado</a>
       
        </div>
      </li>
      
    </ul>
    
  </div>
	</nav>

