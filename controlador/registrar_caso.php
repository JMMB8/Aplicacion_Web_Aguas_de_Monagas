<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
include("../modelo/captura_datos_casos.php"); 
$HOY=date("Y-m-d");
	//if($fecha_programada>=$HOY && $fecha_reparacion>=$HOY){
	if($fecha_programada>=$HOY){
	
	$validar=mysql_query("SELECT * FROM contactos WHERE cedula='$cedula'");
	$nro=mysql_num_rows($validar);
	if($nro==0){
	$insertar=mysql_query("INSERT INTO contactos VALUES('$cedula','$nombre','$tlf','$dir','$correo','$id_parroq','$id_sector')");
		}
	$insertar=mysql_query("INSERT INTO casos VALUES('$CODIGO_CASO',NOW(),'$id_parroq','$id_sector','$cedula','$EL_SERVICIO','$descripcion','$observacion','$fecha_programada','$fecha_reparacion','$RESPONSABLE')");
	
	
	echo "<script type>
	alert('EL CASO SE HA REGISTRADO EXITOSAMENTE');
	location='../vista/form/formulario_casos.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
	/*
	1	codigo
	2	fecha
	3	id_parroquia
	4	id_sector	
	5	cedula	
	6	id_tipo	
	7	descripcion	
	8	observ	
	9	fecha_prog
	10	fecha_rep
	11	responsable
	*/
	
	}else{
	echo "<script type>
	alert('LAS FECHAS NO PUEDEN SER MENORES A LA FECHA ACTUAL');
	location='../vista/form/formulario_casos.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
	}



	}
?>
