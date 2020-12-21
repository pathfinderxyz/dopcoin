<?php 
    include '../../Errores/mostrar_errores2.php'; 
	include '../../coneccion/coneccion.php';


    $status = $_POST['estado'];
    $idpersona = $_POST['idp'];

	
  
	
	$sql = pg_query("UPDATE persona set status_vip='$status' Where id='$idpersona'");

	
	

    if ($sql) {
		header('Location: ../../inicio.php?page=alluser');
	}

 
?>    