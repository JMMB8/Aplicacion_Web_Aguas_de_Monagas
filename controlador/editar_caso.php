<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
include("../modelo/captura_datos_casos1.php"); 
$HOY=date("Y-m-d");
	//if($fecha_programada>=$HOY && $fecha_reparacion>=$HOY){
	if($fecha_programada>=$HOY){
	
	$validar=mysql_query("SELECT * FROM contactos WHERE cedula='$cedula'");
	$nro=mysql_num_rows($validar);
	if($nro==0){
	$insertar=mysql_query("INSERT INTO contactos VALUES('$cedula','$nombre','$tlf','$dir','$correo','$id_parroq','$id_sector')");
		}
	$insertar=mysql_query("UPDATE casos SET fecha=NOW(),id_parroquia='$id_parroq',id_sector='$id_sector',cedula='$cedula',id_tipo='$EL_SERVICIO',descripcion='$descripcion',observ='$observacion',fecha_prog='$fecha_programada',fecha_rep='$fecha_reparacion',responsable='$RESPONSABLE' WHERE codigo='$CODIGO_CASO'");
	
	
	echo "<script type>
	alert('LOS DATOS DEL CASO SE HAN ACTUALIZADO EXITOSAMENTE');
	location='../vista/consultas_casos.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
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
