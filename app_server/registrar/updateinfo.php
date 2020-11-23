<?php 
   // include '../../Errores/mostrar_errores.php'; 
	include '../../coneccion/coneccion.php';

    $iduser = $_POST['iduser'];
    $correo = $_POST['correo'];
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$direccion= $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$cod= $_POST['referido'];

	$banco = $_POST['bancos'];
	$cuenta = $_POST['cuenta'];
    $tipocuenta = $_POST['tipo_cuenta'];

	$wallet = $_POST['wallet'];	
    $cripto = $_POST['cripto'];
 

	$sql = pg_query("UPDATE persona SET correo='$correo',nombre='$nombre',cedula='$cedula',direccion='$direccion',referido='$cod',telefono='$telefono',bancos='$banco',cuenta='$cuenta',tipo_cuenta='$tipocuenta',wallet='$wallet',cripto='$cripto' WHERE id='$iduser' ");

  

   if ($sql) {
		header('Location: ../../inicio.php?page=datos');
	}
?>          
