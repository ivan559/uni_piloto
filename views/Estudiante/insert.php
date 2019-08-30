<?php require_once '../inc/header.php' ?>
<div class="formulario">
	<h2>Unidad de Registro de Estudiantes</h2>
<form method="post" action='../controllers/EstudianteController.php'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="hidden" name="action" value="register">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="nombre estudiante" name="nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="nivelacademico">Nivel Academico</label>
      <input type="text" class="form-control" id="nivelacademico" placeholder="Nivel Academico" name="nivel_academico">
    </div>
  </div>
  <div class="form-group">
    <label for="unidad_academica">Unidad Academica</label>
    <input type="text" class="form-control" id="unidad_academica" placeholder="unidad academica" name="unidad_academica">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Documento</label>
    <input type="text" class="form-control" id="Documento" placeholder="documento" name="documento">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<?php require_once '../inc/footer.php' ?>