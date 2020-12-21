<?php  
	include '../../coneccion/coneccion.php';
	 include '../../Errores/mostrar_errores.php';
     include '../../Errores/mostrar_errores2.php';

	
	$cripto= $_POST['cripto'];
	$idoperarion= $_POST['operario'];
	$montousd = $_POST['montousd'];
	$walletdopcoin = $_POST['walletdopcoin'];
	$tipo_pago= $_POST['tipo_pago'];
	$banco = $_POST['mibanco'];
	$mrdop = $_POST['montorecdop'];


	$fecha = date ("Y-m-d");
	$status = 'pendiente';
	$tipo_operacion = 'venta';
	$color = 'danger';
	$vip = 'VIP';
	
	
	$sql = pg_query("INSERT INTO operaciones(fecha,tipo_operacion,cantidad_dopcoin,monto,status,cripto,tipo_pago,wallet_dopcoin,mibanco,id_operario,color,vip) VALUES ('$fecha','$tipo_operacion','$mrdop','$montousd','$status','$cripto','$tipo_pago','$walletdopcoin','$banco','$idoperarion','$color','$vip')");

	if ($sql) {
		header('Location: ../../inicio.php?page=ventavip&compra=si');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=ventavip&compra=no');//No se guardo
	}

?>            