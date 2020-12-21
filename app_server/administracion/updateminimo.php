<?php 
   // include '../../Errores/mostrar_errores.php'; 
	include '../../coneccion/coneccion.php';

    $minimo= $_POST['minimo'];
    
   
	

	$sql = pg_query("UPDATE dopcoinvip SET minimo='$minimo'");

  

   if ($sql) {
		header('Location: ../../inicio.php?page=minimosvip');
	}
?>          
