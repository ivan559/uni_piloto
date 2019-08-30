<?php require_once '../inc/header.php' ?>
<script>var c=0;</script>
<div class="formulario">
	<h2>Unidad de Registro de Notas</h2>
<form method="post" action='../controllers/ResultadoController.php'>
  <div class="form-row">

    <div class="form-group">
      <input type="hidden" name="action" value="insert">
      <label for="nivelacademico">Estudiante</label>
       
     <select  name="cod_estudiante" class="form-control" id="estudiante">
     	<?php foreach($retornadoEstudiante as $e){ ?>
     	<option value="<?php echo $e->id ?>"><?php echo $e->nombre; ?></option>
     	 <?php }?>
     </select>

    </div>
  </div>
  <div class="form-group">
    <label for="unidad_academica">Asignatura</label>
   
   <select name="cod_asignatura" class="form-control" id="asignatura">
   	 <?php foreach ($retornadoAsignatura as $d ){ ?>
   	  <option value="<?php echo $d->id?>"><?php echo $d->nombre_asignatura ?></option>
   	  <?php } ?>
   </select>
 
  </div>
  <div class="form-group">
    <label for="inputAddress2">nota</label>
    <input type="text" class="form-control" id="nota" placeholder="nota" name="nota">
    
  </div>
 
  <table id="tabla" class="table">
  	 <thead>
  	 	<tr>
  	 		<th>Codigo Estudiante</th>
  	 		<th>Codigo Asignatura</th>
  	 		<th>Nota</th>
  	 	</tr>
  	 </thead>
  	 <tbody>
  	 	
  	 </tbody>
  </table>
 
  <button type="submit" class="btn btn-primary">Enviar</button>

   <button  type="button" class="btn btn-primary" onclick="agregarproducto()">Agregar</button>
</form>
</div>
<?php require_once '../inc/footer.php' ?>