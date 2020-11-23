<?php 
   // include '../../Errores/mostrar_errores.php'; 
	include '../../coneccion/coneccion.php';

    $pcompra = $_POST['pcompra'];
    $fecha = date ("Y-m-d");
   
	

	$sql = pg_query("UPDATE dopcoin SET precio_compra='$pcompra',fecha_update_compra='$fecha'");

  

   if ($sql) {
		header('Location: ../../inicio.php?page=precio');
	}
?>          
