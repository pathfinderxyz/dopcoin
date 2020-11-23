<?php 
    include '../../Errores/mostrar_errores2.php'; 
	include '../../coneccion/coneccion.php';


   
    $idpersona = $_POST['idpersona'];

	
  
	
	$sql = pg_query("DELETE FROM persona Where id='$idpersona'");

	
	

    if ($sql) {
		echo 'usuario eliminado';
	}

 
?>    