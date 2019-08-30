<?php
  require_once '../config/config.php';
  class Estudiante
  {
  	 public $id;
  	 public $nombre;
  	 public $nivel_academico;
  	 public $unidad_academica;
  	 public $documento;


  	 public function insertar_datos()
  	 {
  	 	$conexion=new Conexion();
  	 	$insertar=$conexion->db->prepare("INSERT INTO estudiante(nombre,nivel_academico,unidad_academica,documento)VALUES(?,?,?,?)");
  	 	$insertar->bindParam(1,$this->nombre);
  	 	$insertar->bindParam(2,$this->nivel_academico);
  	 	$insertar->bindParam(3,$this->unidad_academica);
  	 	$insertar->bindParam(4,$this->documento);
  	 	$insertar->execute();
  	 }

     public function actualizar_datos()
     {
      $conexion=new Conexion();
      $actualizar=$conexion->db->prepare("UPDATE estudiante SET nombre='$this->nombre',nivel_academico='$this->nivel_academico',unidad_academica='$this->unidad_academica',documento='$this->documento' WHERE id='$this->id'");
      
      $actualizar->execute();
     }

  	 public function mostrar_alumnos()
  	 {
  	 	$conexion= new Conexion();
  	 	$mostrar= $conexion->db->prepare("SELECT * FROM estudiante");
  	 	$mostrar->execute();
  	 	$objetomostraralumno=$mostrar->fetchAll(PDO::FETCH_OBJ);
  	 	return $objetomostraralumno;
  	 }

     public function eliminar_datos()
     {
       $conexion= new Conexion();
       $eliminar=$conexion->db->prepare("DELETE FROM estudiante WHERE id='$this->id'");
       $eliminar->execute();
     }
  }
?>