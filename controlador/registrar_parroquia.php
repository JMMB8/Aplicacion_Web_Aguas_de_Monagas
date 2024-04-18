<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
//include("../modelo/captura_datos_cargos.php"); 
$campo_unico=$_POST['campo_unico'];
$cargo=$_POST['modelo'];
$estatus=$_POST['estatus'];

/*

$LA_TABLA="parroquia";
$ID_LA_TABLA="id_parroquia";
$ORDEN_TABLA="nombre";

*/

	if ($campo_unico==0){

$validar=mysql_query("SELECT * FROM parroquia WHERE id_parroquia='$campo_unico'");
$nro=mysql_num_rows($validar);
if($nro==0){
$validar1=mysql_query("SELECT * FROM parroquia WHERE nombre='$cargo'");
$nro1=mysql_num_rows($validar1);
	if($nro1==0){
	$insertar=mysql_query("INSERT INTO parroquia VALUES(NULL,'$cargo','$estatus')");
	echo "<script type>
	alert('LOS DATOS DE LA PARROQUIA FUERON REGISTRADOS EXITOSAMENTE');
	location='../vista/page_parroquias.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
	}else{
	echo "<script type>
	alert('YA EXISTE UNA  PARROQUIA CON EL NOMBRE DE: $cargo');
	location='../vista/form/form_parroquia.php?Newmaq=$campo_unico';
		</script>";
	}
}else{
echo "<script type>
	alert('EL CODIGO EXISTE');
	location='../vista/form/form_parroquia.php?Newmaq=$campo_unico';
		</script>";
}
}else{
$modif=mysql_query("UPDATE parroquia SET nombre='$cargo',condicion='$estatus' WHERE id_parroquia='$campo_unico'");
	echo "<script type>
	alert('LOS DATOS DE LA PARROQUIA FUERON ACTUALIZADOS EXITOSAMENTE');
	location='../vista/page_parroquias.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
}
	

	}
?>
