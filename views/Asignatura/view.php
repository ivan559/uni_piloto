<?php require_once '../inc/header.php' ?>
<div class="contenido">
<div class="card-columns">
  <?php foreach($objetoestudiante as $es){?>
  <div class="card">
  	<div class="card-header">
  		<h2><?php echo $es->codigo_asignatura ?></h2>
  	</div>
    <div class="card-body">
    
      <p class="card-text">
      	 <em><strong>Nombre Asingatura:</strong></em><h5><?php echo $es->nombre_asignatura; ?></h5>
      </p>
    </div>
    <div class="card-footer">
    	<ul id="option-menu">
      		<li> <a data-toggle="modal" data-target="#Modal<?php echo $es->id; ?>"><span class="oi oi-eye" title="detalles" aria-hidden="true"></span></a>
      			<div class="modal fade" id="Modal<?php echo $es->id ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $es->id; ?>" aria-hidden="true">
 			    <div class="modal-dialog modal-dialog-centered" role="document">
    			<div class="modal-content">
     			 	<div class="modal-header">
      					  <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $es->nombre_asignatura; ?></h5>
       				 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         			 <span aria-hidden="true">&times;</span>
        			</button>
     			 </div>
     		 <div class="modal-body">
      		  <p>
      		  	<strong>Periodo:</strong><?php echo $es->periodo; ?><br></br>
      		  	<strong>Descripcion:</strong><?php echo $es->descripcion; ?><br>
              <strong>Horario:</strong><?php echo $es->horario_asignatura; ?>
      		</p>
     		 </div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="button" class="btn btn-primary">Save changes</button>
      		</div>
    		</div>
  		</div>
		</div>

      		</li>
      		<li> 
      		<a data-toggle="modal" data-target="#ModalUpdate<?php echo $es->id; ?>" ><span class="oi oi-loop-circular" title="actualizar" aria-hidden="true"></span></a>
      		  <div class="modal fade" id="ModalUpdate<?php echo $es->id ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $es->id; ?>" aria-hidden="true">
 			    <div class="modal-dialog modal-dialog-centered" role="document">
    			<div class="modal-content">
     			 	<div class="modal-header">
      					  <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $es->nombre_asignatura; ?></h5>
       				 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         			 <span aria-hidden="true">&times;</span>
        			</button>
     			 </div>
     		 <div class="modal-body">
      		  <p>
      		  	<form method="post" action='../controllers/AsignaturaController.php'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="id" value="<?php echo $es->id; ?>">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre_asignatura" value="<?php echo $es->nombre_asignatura; ?>">
    </div>
    <div class="form-group col-md-6">
      <label>Periodo</label>
      <input type="text" class="form-control"name="periodo" value="<?php echo $es->periodo; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $es->descripcion ?>">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Horario Asignatura</label>
    <input type="text" class="form-control" name="horario_asignatura" name="horario_asignatura" value="<?php  echo $es->horario_asignatura?>">
    
  </div>

  <div class="form-group">
    <label for="inputAddress2">Dia</label>
    <input type="text" class="form-control" name="dia" name="dia" value="<?php  echo $es->dia?>">
    
  </div>
 
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
      		</p>
     		 </div>
      	<div class="modal-footer">
        
      		</div>
    		</div>
  		</div>
		</div>



      		</li>
      		<li> 
      			<a href='../controllers/AsignaturaController.php?action=delete&&id=<?php echo $es->id;?>' ><span class="oi oi-trash" title="borrar" aria-hidden="true"></span></a>


      		</li>
      	</ul>
    </div>
  </div>
<?php }?>
  
</div>
</div>
<?php require_once '../inc/footer.php' ?>