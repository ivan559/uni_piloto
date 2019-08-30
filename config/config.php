<?php
 class Conexion {
 	public $db;
 	 public function __construct()
 	 {
 	 		 $host="localhost";
   			 $db="universidad_piloto";
   	 		 $user="root";
   	 		 $password="";

   	 	try{
   	 		$this->db=new PDO("mysql:host=localhost;dbname=$db", $user, $password);
   	 	}catch(PDOException $e)
   	 	{
   	 		echo "no se pudo realizar conexion a la base de datos".$e->getMessage();
   	 	}
 	 }

 	 public function closeConnection(){
   	 	$this->db=null;
   	 }
 }

?>