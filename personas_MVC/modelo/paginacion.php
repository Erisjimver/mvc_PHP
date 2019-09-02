<?php 

require_once("Conectar.php");
//--------------------------------PAGINACION -----------------------------//
      $base=Conectar::conexion();
      $tamaño_paginas=3;//cantidad de registros que se van a mostrar
    if(isset($_GET["pagina"])){
      if($_GET["pagina"]==1){
        header("location:index.php");
      }
      else{
        $pagina=$_GET["pagina"];
      }
    }
    else{
    $pagina=1;//posicion inicial de lso registros a mostrar     
    }

    $empezar_desde=($pagina-1)*$tamaño_paginas;

    $sql_total="select * from datos_usuarios";


    $resultado=$base->prepare($sql_total);
    $resultado->execute(array());

    $num_filas=$resultado->rowCount();//mostrar cantidad de filas dentro del array
    $total_paginas=ceil($num_filas/$tamaño_paginas);
//------------------------------TERMINA PAGINACION ---------------------//

?>