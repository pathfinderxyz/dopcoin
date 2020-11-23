<?php 
    include '../../Errores/mostrar_errores2.php'; 
	include '../../coneccion/coneccion.php';

   
    $idpersona = $_POST['idp'];

	
  
	
	$sql = pg_query("DELETE FROM persona Where id='$idpersona'");

	
	
   if ($sql) {
		header('Location: ../../inicio.php?page=alluser');
	}
 
?>    