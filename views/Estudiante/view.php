<?php require_once '../inc/header.php' ?>
<div class="contenido">
<div class="card-columns">
  <?php foreach($objetoestudiante as $es){?>
  <div class="card">
  	<div class="card-header">
  		<h2><?php echo $es->nombre ?></h2>
  	</div>
    <div class="card-body">
    
      <p class="card-text">
      	 <em><strong>Unidad Académica:</strong></em><h5><?php echo $es->unidad_academica; ?></h5>
      </p>
    </div>
    <div class="card-footer">
    	<ul id="option-menu">
      		<li> <a data-toggle="modal" data-target="#Modal<?php echo $es->id; ?>"><span class="oi oi-eye" title="detalles" aria-hidden="true"></span></a>
      			<div class="modal fade" id="Modal<?php echo $es->id ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $es->id; ?>" aria-hidden="true">
 			    <div class="modal-dialog modal-dialog-centered" role="document">
    			<div class="modal-content">
     			 	<div class="modal-header">
      					  <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $es->nombre; ?></h5>
       				 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         			 <span aria-hidden="true">&times;</span>
        			</button>
     			 </div>
     		 <div class="modal-body">
      		  <p>
      		  	<strong>Nivel academico:</strong><?php echo $es->nivel_academico; ?><br></br>
      		  	<strong>Documento de Identidad:</strong><?php echo $es->documento; ?>
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
      					  <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $es->nombre; ?></h5>
       				 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         			 <span aria-hidden="true">&times;</span>
        			</button>
     			 </div>
     		 <div class="modal-body">
      		  <p>
      		  	<form method="post" action='../controllers/EstudianteController.php'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="id" value="<?php echo $es->id; ?>">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="nombre estudiante" name="nombre" value="<?php echo $es->nombre; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="nivelacademico">Nivel Academico</label>
      <input type="text" class="form-control" id="nivelacademico" placeholder="Nivel Academico" name="nivel_academico" value="<?php echo $es->nivel_academico; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="unidad_academica">Unidad Academica</label>
    <input type="text" class="form-control" id="unidad_academica" placeholder="unidad academica" name="unidad_academica" value="<?php echo $es->unidad_academica ?>">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Documento</label>
    <input type="text" class="form-control" id="Documento" placeholder="documento" name="documento" name="documento" value="<?php  echo $es->documento?>">
    
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
      			<a href='../controllers/EstudianteController.php?action=delete&&id=<?php echo $es->id;?>' ><span class="oi oi-trash" title="borrar" aria-hidden="true"></span></a>


      		</li>
      	</ul>
    </div>
  </div>
<?php }?>
  
</div>
</div>
<?php require_once '../inc/footer.php' ?>