<?php  
	 include '../../coneccion/coneccion.php';
	 include '../../Errores/mostrar_errores.php';
     include '../../Errores/mostrar_errores2.php';

	$cripto = $_POST['cripto'];
	$wallet = $_POST['wallet'];
	$tipo_pago = $_POST['tipo_pago'];
	$idpersona = $_POST['idpersona'];
	$status = 'Procesando';
	$vip = 'si';
	

	$sql = pg_query("INSERT INTO miembrosvip(idpersona,cripto,wallet,tipo_pago,status) 
		VALUES ('$idpersona','$cripto','$wallet','$tipo_pago','$status')");

	$sql = pg_query("UPDATE persona SET vip='$vip',status_vip='$status' where id = '$idpersona'");

	if ($sql) {
		header('Location: ../../inicio.php?page=haztevip&compra=si');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=haztevip&compra=no');//No se guardo
	}

?>                       
      