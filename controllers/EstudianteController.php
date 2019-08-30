<?php
require_once '../models/Estudiante.php';


class EstudianteController extends Estudiante
{
	public function dirigir_insercion()
	{
		require '../views/Estudiante/insert.php';
	}

	public function dirigir_vista()
	{
		$objetoestudiante=$this->mostrar_alumnos();
		require '../views/Estudiante/view.php';
	}


	public function insertar($nombre,$nivel_academico,$unidad_academica,$documento)
	{
		 $this->nombre=$nombre;
		 $this->nivel_academico=$nivel_academico;
		 $this->unidad_academica=$unidad_academica;
		 $this->documento=$documento;
		 $this->insertar_datos();
	}

	public function actualizar($id,$nombre,$nivel_academico,$unidad_academica,$documento)
	{
		 $this->id=$id;
		 $this->nombre=$nombre;
		 $this->nivel_academico=$nivel_academico;
		 $this->unidad_academica=$unidad_academica;
		 $this->documento=$documento;
		 $this->actualizar_datos();

	}
	public function eliminar($id)
	{
		$this->id=$id;
		$this->eliminar_datos();

	}

	public function redireccion()
	{
		header("location:EstudianteController.php?action=view");
	}

}

if(isset($_GET['action'])&& $_GET['action']=='register')
{
	$instanciacontroller= new EstudianteController();
	$instanciacontroller->dirigir_insercion();
}

if(isset($_GET['action'])&& $_GET['action']=='view')
{
	$instanciacontroller= new EstudianteController();
	$instanciacontroller->dirigir_vista();
}

if(isset($_POST['action'])&& $_POST['action']=='register')
{
	$instanciacontroller= new EstudianteController();
	$instanciacontroller->insertar($_POST['nombre'],$_POST['nivel_academico'],$_POST['unidad_academica'],$_POST['documento']);
	$instanciacontroller->redireccion();
}

if(isset($_POST['action'])&& $_POST['action']=='update')
{
	$instanciacontroller= new EstudianteController();
	$instanciacontroller->actualizar($_POST['id'],$_POST['nombre'],$_POST['nivel_academico'],$_POST['unidad_academica'],$_POST['documento']);
	$instanciacontroller->redireccion();
}

if(isset($_GET['action']) && $_GET['action']=='delete')
{
	$instanciacontroller= new EstudianteController();
	$instanciacontroller->eliminar($_GET['id']);
	$instanciacontroller->redireccion();

}
?>