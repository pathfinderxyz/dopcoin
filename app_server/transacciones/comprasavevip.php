<?php  
	include '../../coneccion/coneccion.php';
	 include '../../Errores/mostrar_errores.php';
     include '../../Errores/mostrar_errores2.php';

	$idoperarion= $_POST['operario'];
	$cripto= $_POST['cripto'];
	$montousd = $_POST['montousd'];
	$wallet_recep = $_POST['wallet_recep'];
	$tipo_pago= $_POST['tipo_pago'];
	$montodop = $_POST['montodop'];

	$fecha = date ("Y-m-d");
	$status = 'pendiente';
	$tipo_operacion = 'compra';
	$color = 'success';
	$vip = 'VIP';
	
	
	$sql = pg_query("INSERT INTO operaciones(fecha,tipo_operacion,cantidad_dopcoin,monto,status,cripto,wallet_recep,tipo_pago,id_operario,color,vip) VALUES ('$fecha','$tipo_operacion','$montodop','$montousd','$status','$cripto','$wallet_recep','$tipo_pago','$idoperarion','$color','$vip')");

	if ($sql) {
		header('Location: ../../inicio.php?page=compravip&compra=si');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=compravip&compra=no');//No se guardo
	}

?>                       
      