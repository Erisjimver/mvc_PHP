<?php 

require_once("modelo/Personas_modelo.php");

$personas=new Personas_modelo();

$matrizPersonas=$personas->get_personas();


require_once("vista/Personas_view.php");






?>