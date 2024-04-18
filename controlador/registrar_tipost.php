<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
$campo_unico=$_POST['campo_unico'];
	$cargo=$_POST['modelo'];
	$estatus=$_POST['estatus'];

	if ($campo_unico==0){

$validar=mysql_query("SELECT * FROM tipo_maquinaria WHERE id_tipo='$campo_unico'");
$nro=mysql_num_rows($validar);
if($nro==0){
$validar1=mysql_query("SELECT * FROM tipo_maquinaria WHERE descripcion='$cargo'");
$nro1=mysql_num_rows($validar1);
	if($nro1==0){
	$insertar=mysql_query("INSERT INTO tipo_maquinaria VALUES(NULL,'$cargo','$estatus')");
	echo "<script type>
	alert('LOS DATOS FUERON REGISTRADOS EXITOSAMENTE');
	location='../vista/operacion_tipoTransporte.php?empleo=3rbfe6ft6b&TYPE=der';
		</script>";
	}else{
	echo "<script type>
	alert('YA EXISTE UN REGISTRO CON EL NOMBRE DE: $cargo');
	location='../vista/form/form_tipoTransporte.php?Newmaq=$campo_unico';
		</script>";
	}
}else{
echo "<script type>
	alert('EL CODIGO EXISTE');
	location='../vista/form/form_tipoTransporte.php?Newmaq=$campo_unico';
		</script>";
}
}else{
$modif=mysql_query("UPDATE tipo_maquinaria SET descripcion='$cargo',condicion='$estatus' WHERE id_tipo='$campo_unico'");
	echo "<script type>
	alert('LOS DATOS  FUERON ACTUALIZADOS EXITOSAMENTE');
	location='../vista/operacion_tipoTransporte.php?empleo=3rbfe6ft6b&TYPE=ggghgfgfgfS';
		</script>";
}
	

	}
?>
