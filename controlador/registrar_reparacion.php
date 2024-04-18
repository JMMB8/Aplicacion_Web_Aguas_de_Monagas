<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
//include("../modelo/captura_datos_casos.php"); 
$CODIGO_CASO=$_POST['CODIGO_CASO'];
$dia2=$_POST['dia2'];
	$mes2=$_POST['mes2'];
	$anio2=$_POST['anio2'];
	$fecha_reparacion=$anio2."-".$mes2."-".$dia2;
	$observacion=$_POST['observacion'];
	

//$HOY=date("Y-m-d");
	//if($fecha_programada>=$HOY && $fecha_reparacion>=$HOY){
	//if($fecha_programada>=$HOY){
	
	/*$validar=mysql_query("SELECT * FROM contactos WHERE cedula='$cedula'");
	$nro=mysql_num_rows($validar);
	if($nro==0){
	$insertar=mysql_query("INSERT INTO contactos VALUES('$cedula','$nombre','$tlf','$dir','$correo','$id_parroq','$id_sector')");
		}*/
	$actual=mysql_query("UPDATE casos SET observ='$observacion',fecha_rep='$fecha_reparacion' WHERE codigo='$CODIGO_CASO'");
	
	
	echo "<script type>
	alert('LA FECHA DE REPARACION DEL CASO SE HA REGISTRADO EXITOSAMENTE');
	location='../vista/page_reparaciones.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
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
	
	/*}else{
	echo "<script type>
	alert('LAS FECHAS NO PUEDEN SER MENORES A LA FECHA ACTUAL');
	location='../vista/form/formulario_casos.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
	}*/



	}
?>
