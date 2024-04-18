<?php
	if (isset($_POST['REGISTRO'])){
	$CODIGO_CASO=$_POST['CODIGO_CASO'];
	
	$dia=$_POST['dia'];
	$mes=$_POST['mes'];
	$anio=$_POST['anio'];
	$fecha_registro=$anio."-".$mes."-".$dia;
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$tlf=$_POST['tlf'];
	$dir=$_POST['dir'];
	$id_parroq=$_POST['id_parroq'];
	$id_sector=$_POST['id_sector'];
	
	$EL_SERVICIO=$_POST['EL_SERVICIO'];
	$descripcion=$_POST['descripcion'];
	$observacion=$_POST['observacion'];
	
	$dia1=$_POST['dia1'];
	$mes1=$_POST['mes1'];
	$anio1=$_POST['anio1'];
	$fecha_programada=$anio1."-".$mes1."-".$dia1;
	
	/*$dia2=$_POST['dia2'];
	$mes2=$_POST['mes2'];
	$anio2=$_POST['anio2'];
	$fecha_reparacion=$anio2."-".$mes2."-".$dia2;*/
	
	$fecha_reparacion="0000"."-"."00"."-"."00";
	
	$RESPONSABLE=$_POST['RESPONSABLE'];
	}
?>
