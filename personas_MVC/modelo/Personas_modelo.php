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
		require("paginacion.php");
		$consulta=$this->db->query("select id,nombre,apellido,direccion from datos_usuarios limit $empezar_desde,$tamaño_paginas");

		while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

			$this->personas[]=$fila;

		}

		return $this->personas;
	}



}



?>