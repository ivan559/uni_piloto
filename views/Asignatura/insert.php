<?php require_once '../inc/header.php' ?>

<div class="principal_asignaturas">
	<h2>Unidad de Registro de Asignaturas</h2>
<form method="post" action='../controllers/AsignaturaController.php'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="hidden" name="action" value="register">
      <label for="inputEmail4">Codigo de Asignatura</label>
      <input type="text" class="form-control" id="nombre" placeholder="codigo de asignatura" name="codigo_asignatura">
    </div>
    <div class="form-group col-md-6">
      <label for="nombreasignatura">Nombre Asignatura</label>
      <input type="text" class="form-control" id="nombreasignatura" placeholder="Nivel Academico" name="nombre_asignatura">
    </div>
  </div>
  <div class="form-group">
    <label for="unidad_academica">Periodo</label>
    <input type="text" class="form-control" id="periodo" placeholder="unidad academica" name="periodo">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Descripcion</label>
    <input type="text" class="form-control" id="Documento" placeholder="documento" name="descripcion">
    
  </div>
  <div class="form-group">
    <label for="inputAddress2">Horario Asignatura</label>
    <input type="text" class="form-control" id="Documento" placeholder="documento" name="horario_asignatura">
    
  </div>

  <div class="form-group">
    <label for="inputAddress2">Dia</label>
    <input type="text" class="form-control" id="Documento" placeholder="documento" name="dia">
    
  </div>
 
 

 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<?php require_once '../inc/footer.php' ?>