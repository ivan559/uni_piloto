<?php
require_once '../models/Asignatura.php';
class AsignaturaController extends Asignatura
{
	public function dirigir_insercion()
	{
		require '../views/Asignatura/insert.php';
	}

	public function dirigir_vista()
	{
		$objetoestudiante=$this->mostrar_asignaturas();
		require '../views/Asignatura/view.php';
	}


	public function insertar($codigo_asignatura,$nombre_asignatura,$periodo,$descripcion,$horario_asignatura,$dia)
	{
		 $this->codigo_asignatura=$codigo_asignatura;
		 $this->nombre_asignatura=$nombre_asignatura;
		 $this->periodo=$periodo;
		 $this->descripcion=$descripcion;
		 $this->horario_asignatura=$horario_asignatura;
		 $this->dia=$dia;
		 $this->insertar_datos();
	}

	public function actualizar($id,$codigo_asignatura,$nombre_asignatura,$periodo,$descripcion,$horario_asignatura,$dia)
	{
		 $this->id=$id;
		  $this->codigo_asignatura=$codigo_asignatura;
		 $this->nombre_asignatura=$nombre_asignatura;
		 $this->periodo=$periodo;
		 $this->descripcion=$descripcion;
		 $this->horario_asignatura=$horario_asignatura;
		 $this->dia=$dia;
		 $this->actualizar_datos();

	}
	public function eliminar($id)
	{
		$this->id=$id;
		$this->eliminar_datos();

	}

	public function redireccion()
	{
		header("location:AsignaturaController.php?action=view");
	}

}

if(isset($_GET['action'])&& $_GET['action']=='register')
{
	$instanciacontroller= new AsignaturaController();
	$instanciacontroller->dirigir_insercion();
}

if(isset($_GET['action'])&& $_GET['action']=='view')
{
	$instanciacontroller= new AsignaturaController();
	$instanciacontroller->dirigir_vista();
}

if(isset($_POST['action'])&& $_POST['action']=='register')
{
	$instanciacontroller= new AsignaturaController();
	$instanciacontroller->insertar($_POST['codigo_asignatura'],$_POST['nombre_asignatura'],$_POST['periodo'],$_POST['descripcion'],$_POST['horario_asignatura'],$_POST['dia']);
	$instanciacontroller->redireccion();
}

if(isset($_POST['action'])&& $_POST['action']=='update')
{
	$instanciacontroller= new AsignaturaController();
	$instanciacontroller->actualizar($_POST['id'],$_POST['codigo_asignatura'],$_POST['nombre_asignatura'],$_POST['periodo'],$_POST['descripcion'],$_POST['horario_asignatura'],$_POST['dia']);
	$instanciacontroller->redireccion();
}

if(isset($_GET['action']) && $_GET['action']=='delete')
{
	$instanciacontroller= new AsignaturaController();
	$instanciacontroller->eliminar($_GET['id']);
	$instanciacontroller->redireccion();

}
?>

?>