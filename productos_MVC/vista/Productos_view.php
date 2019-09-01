<!DOCTYPE html>
<html>
<head>
	<title>Vista</title>
	<style type="text/css">
		
		td{
			border:1px dotted #3FF000;
		}

	</style>
</head>
<body>

<table>
	<tr><td>Nombre del articulo</td></tr>

<?php 

	foreach ($matrizProductos as $registro) {
		
		echo "<tr><td>" . $registro["nombreartículo"] . "</td></tr>";
	}

?>
</table>

</body>
</html>