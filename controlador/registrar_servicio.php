<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
//include("../modelo/captura_datos_cargos.php"); 
$campo_unico=$_POST['campo_unico'];
$cargo=$_POST['modelo'];
$estatus=$_POST['estatus'];

/*

$LA_TABLA="tipo_servicio";
$ID_LA_TABLA="id_tipo";
$ORDEN_TABLA="descripcion";

*/

	if ($campo_unico==0){

$validar=mysql_query("SELECT * FROM tipo_servicio WHERE id_tipo='$campo_unico'");
$nro=mysql_num_rows($validar);
if($nro==0){
$validar1=mysql_query("SELECT * FROM tipo_servicio WHERE descripcion='$cargo'");
$nro1=mysql_num_rows($validar1);
	if($nro1==0){
	$insertar=mysql_query("INSERT INTO tipo_servicio VALUES(NULL,'$cargo','$estatus')");
	echo "<script type>
	alert('LOS DATOS DEL SERVICIO FUERON REGISTRADOS EXITOSAMENTE');
	location='../vista/page_servicios.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
	}else{
	echo "<script type>
	alert('YA EXISTE UN CARGO CON EL NOMBRE DE: $cargo');
	location='../vista/form/form_servicio.php?Newmaq=$campo_unico';
		</script>";
	}
}else{
echo "<script type>
	alert('EL CODIGO DEL SERVICIO EXISTE');
	location='../vista/form/form_servicio.php?Newmaq=$campo_unico';
		</script>";
}
}else{
$modif=mysql_query("UPDATE tipo_servicio SET descripcion='$cargo',condicion='$estatus' WHERE id_tipo='$campo_unico'");
	echo "<script type>
	alert('LOS DATOS DEL SERVICIO FUERON ACTUALIZADOS EXITOSAMENTE');
	location='../vista/page_servicios.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
}
	

	}
?>
