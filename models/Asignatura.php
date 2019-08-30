<?php
 require_once '../models/Estudiante.php';
  class Asignatura
  {
  	 public $id;
  	 public $codigo_asignatura;
  	 public $nombre_asignatura;
  	 public $periodo;
  	 public $descripcion;
  	 public $horario_asignatura;
  	 public $dia;


  	 public function insertar_datos()
  	 {
  	 	$conexion=new Conexion();
  	 	$insertar=$conexion->db->prepare("INSERT INTO Asignatura(codigo_asignatura,nombre_asignatura,periodo,descripcion,horario_asignatura,dia)VALUES(?,?,?,?,?,?)");
  	 	$insertar->bindParam(1,$this->codigo_asignatura);
  	 	$insertar->bindParam(2,$this->nombre_asignatura);
  	 	$insertar->bindParam(3,$this->periodo);
  	 	$insertar->bindParam(4,$this->descripcion);
  	 	$insertar->bindParam(5,$this->horario_asignatura);
  	 	$insertar->bindParam(6,$this->dia);
  	 	$insertar->execute();
  	 }

     public function actualizar_datos()
     {
      $conexion=new Conexion();
      $actualizar=$conexion->db->prepare("UPDATE Asignatura SET codigo_asignatura='$this->codigo_asignatura',periodo='$this->periodo',descripcion='$this->descripcion',horario_asignatura='$this->horario_asignatura',dia='$this->dia' WHERE id='$this->id'");
      
      $actualizar->execute();
     }

  	 public function mostrar_asignaturas()
  	 {
  	 	$conexion= new Conexion();
  	 	$mostrar= $conexion->db->prepare("SELECT * FROM Asignatura");
  	 	$mostrar->execute();
  	 	$objetomostrarasignatura=$mostrar->fetchAll(PDO::FETCH_OBJ);
  	 	return $objetomostrarasignatura;
  	 }

     public function eliminar_datos()
     {
       $conexion= new Conexion();
       $eliminar=$conexion->db->prepare("DELETE FROM Asignatura WHERE id='$this->id'");
       $eliminar->execute();
     }

     public function estudiante()
     {
         $est= new Estudiante();
         $objetoest=$est->mostrar_alumnos();
         return $objetoest;
     }

    
  }


?>