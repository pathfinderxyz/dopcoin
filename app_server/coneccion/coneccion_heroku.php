<?php  
	$user = 'jluzjygojutfqe';
	$passwd = 'faae9b0d9adcd80ed0b3f580ea161d98ee6210ea797184ded8852d15cb9be85c';
	$db = 'de2lq3tjitfe9p';
	$port = 5432;
	$host = 'ec2-54-225-214-37.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());

?>