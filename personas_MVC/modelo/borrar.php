<!DOCTYPE html>
<html>
<head>
	<title>Borrar</title>
</head>
<body>


	<?php 
		include("Conectar.php");
		$base=Conectar::conexion();


		try {
			
			$id=$_GET["id"];

			$base->query("delete from datos_usuarios where id='$id'");


			//header("Location:index.php");	
			 header("location: http://localhost/mvc_PHP/personas_MVC/index.php");
		} catch (Exception $e) {

			die("Error: " . $e->getMessage());
			
		}



	 ?>

</body>
</html>