<?php 

class Productos_modelo{

	private $db;
	private $propductos;

	public function __construct(){

		require_once("Conectar.php");

		$this->db=Conectar::conexion();

		$this->productos=array();

	}

	public function get_productos(){

		$consulta=$this->db->query("select * from productos");

		while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

			$this->productos[]=$fila;

		}
	}



}



?>