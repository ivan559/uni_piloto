<?php
require '../models/Asignatura.php';
 class AsignaturaXEstudiante 
 {
 	public $cod_estudiante;
 	public $cod_asignatura;
 	public $nota_final;

 	public function insertar()
 	{
 	
 		$conexion= new Conexion();
 		$insert=$conexion->db->prepare("INSERT INTO asignaturaxestudiante(cod_estudiante,cod_asignatura,nota_final)VALUES(?,?,?)");
 		$insert->bindParam(1,$this->cod_estudiante);
 		$insert->bindParam(2,$this->cod_asignatura);
 		$insert->bindParam(3,$this->nota_final);

 		$insert->execute();
 	}

 	public function leer()
 	{
 		$conexion= new Conexion();
 		$mirar= $conexion->db->prepare("SELECT asignaturaxestudiante.id,estudiante.nombre, estudiante.nivel_academico,estudiante.unidad_academica,estudiante.documento,Asignatura.nombre_asignatura,Asignatura.periodo,Asignatura.descripcion,SUM(nota_final)/COUNT(nota_final) FROM(asignaturaxestudiante)INNER JOIN estudiante ON asignaturaxestudiante.cod_estudiante = estudiante.id INNER JOIN Asignatura  On asignaturaxestudiante.cod_asignatura=Asignatura.id WHERE asignaturaxestudiante.cod_estudiante='$this->cod_estudiante' AND asignaturaxestudiante.cod_asignatura='$this->cod_asignatura'");
 		$mirar->execute();
 	}

 	public function mostrarnotas()
 	{
 		$conexion= new Conexion();
 		$mirarnotas= $conexion->db->prepare("SELECT asignaturaxestudiante.id,estudiante.nombre, estudiante.nivel_academico,estudiante.unidad_academica,estudiante.documento,Asignatura.nombre_asignatura,Asignatura.periodo,Asignatura.descripcion,nota_final FROM(asignaturaxestudiante)INNER JOIN estudiante ON asignaturaxestudiante.cod_estudiante = estudiante.id INNER JOIN Asignatura  On asignaturaxestudiante.cod_asignatura=Asignatura.id WHERE asignaturaxestudiante.cod_estudiante='$this->cod_estudiante'");
 		$mirar->execute();
 	}

 	public function eliminar()
 	{
 		$conexion= new Conexion();
 		$eliminar= $conexion->db->prepare("DELETE FROM  asignaturaxestudiante WHERE cod_estudiante='$this->id'");
 		$eliminar->execute();

 	}

 	

 }

?>