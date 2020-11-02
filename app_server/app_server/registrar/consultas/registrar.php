<?php  
	include '../../../coneccion/coneccion.php';


    $correo = $_POST['correo'];
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$direccion= $_POST['direccion'];
	$ocupacion = $_POST['ocupacion'];
	$telefono = $_POST['telefono'];
	$wallet = $_POST['wallet'];
	$cod= $_POST['codreferido'];
	$banco = $_POST['banco'];
	$cuenta = $_POST['numcuenta'];
    $tipocuenta = $_POST['cuenta'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $cripto = $_POST['cripto'];
    $rol = 'admin';
   
	
	$sql = pg_query("INSERT INTO persona(correo,nombre,cedula,direccion,ocupacion,telefono,wallet,referido,bancos,cuenta,tipo_cuenta,usuario,password,rol,cripto) 
		VALUES ('$correo','$nombre','$cedula','$direccion','$ocupacion','$telefono','$wallet','$cod','$banco','$cuenta','$tipocuenta','$usuario','$password','$rol','$cripto')");

  

   if ($sql) {
		header('Location: ../../../index.php?registro=exitoso');//Se guardo
	}else {
		header('Location: ../../../index.php?errorusuario=si');//No se guardo el correo o el pasaporte ya existe !
	}
?>          
