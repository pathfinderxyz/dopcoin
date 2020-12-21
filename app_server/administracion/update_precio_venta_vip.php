<?php 
   // include '../../Errores/mostrar_errores.php'; 
	include '../../coneccion/coneccion.php';

    $pventa = $_POST['pventa'];
    $fecha = date ("Y-m-d");
   
	

	$sql = pg_query("UPDATE dopcoinvip SET precio_venta='$pventa',fecha_act_venta='$fecha'");

  

   if ($sql) {
		header('Location: ../../inicio.php?page=preciovip');
	}
?>          
