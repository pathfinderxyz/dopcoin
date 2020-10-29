<?php  
	include '../../coneccion/coneccion.php';
	 include '../../Errores/mostrar_errores.php';
     include '../../Errores/mostrar_errores2.php';

	
	$usuario= $_POST['username'];
	$password = $_POST['password'];
	$idpersona = $_POST['id'];
	
	
	
	$sql = pg_query("INSERT INTO usuarios(usuario,password,idpersona) VALUES ('$usuario','$password','$idpersona')");

	if ($sql) {
		header('Location: registro_exitoso_dopcoin.php');//Se guardo
	}else {
		header('Location: ../../index.php');//No se guardo
	}

?>                       
      