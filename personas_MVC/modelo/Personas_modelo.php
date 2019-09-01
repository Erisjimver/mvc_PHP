<?php 

class Personas_modelo{

	private $db;
	private $personas;

	public function __construct(){

		require_once("modelo/Conectar.php");

		$this->db=Conectar::conexion();

		$this->personas=array();

	}

	public function get_personas(){

		$consulta=$this->db->query("select * from datos_usuarios");

		while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

			$this->personas[]=$fila;

		}

		return $this->personas;
	}



}



?>