<?php
require '../models/AsignaturaXEstudiante.php';
class ResultadoController extends AsignaturaXEstudiante
{
	public function insertarResultado()
	{
		$est=new Asignatura();
 		$retornadoEstudiante=$est->estudiante();
 		$retornadoAsignatura=$est->mostrar_asignaturas();
		require '../views/Resultados/insert.php';
	}

	public function visualizarResultado()
	{
		  require '../views/Resultados/view.php';
	}


  	public function ingresarResultado($cod_estudiante,$cod_asignatura,$nota)
  	{
  	  $this->cod_estudiante=$cod_estudiante;
  	  $this->cod_asignatura=$cod_asignatura;
  	  $this->nota_final=$nota;
  	  $this->insertar();
  	}

  	public function retornado()
  	{
  		header('location:ResultadoController.php?action=view');
  	}



}
if(isset($_GET['action']) && $_GET['action']=='register')
{
	$instanciacontrolador= new ResultadoController();
	$instanciacontrolador->insertarResultado();

}
if(isset($_POST['action']) && $_POST['action']=='insert')
{
	$instanciacontrolador= new ResultadoController();
	$instanciacontrolador->ingresarResultado($_POST['cod_estudiante'],$_POST['cod_asignatura'],$_POST['nota']);
	$instanciacontrolador->retornado();


}

?>