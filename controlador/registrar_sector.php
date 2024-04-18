<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
$campo_unico=$_POST['campo_unico'];
$cargo=$_POST['modelo'];
$id_parroq=$_POST['id_parroq'];


	if ($campo_unico==0){

$validar=mysql_query("SELECT * FROM sectores WHERE id_sector='$campo_unico'");
$nro=mysql_num_rows($validar);
if($nro==0){
$validar1=mysql_query("SELECT * FROM sectores WHERE nombre='$cargo'");
$nro1=mysql_num_rows($validar1);
	if($nro1==0){
	$insertar=mysql_query("INSERT INTO sectores VALUES(NULL,'$cargo','$id_parroq')");
	echo "<script type>
	alert('LOS DATOS DEL SECTOR FUERON REGISTRADOS EXITOSAMENTE');
	location='../vista/page_sectores.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
	}else{
	echo "<script type>
	alert('YA EXISTE UN SECTOR CON EL NOMBRE DE: $cargo');
	location='../vista/form/form_sector.php?Newmaq=$campo_unico';
		</script>";
	}
}else{
echo "<script type>
	alert('EL CODIGO  EXISTE');
	location='../vista/form/form_sector.php?Newmaq=$campo_unico';
		</script>";
}
}else{
$modif=mysql_query("UPDATE sectores SET nombre='$cargo',id_parroquia='$id_parroq' WHERE id_sector='$campo_unico'");
	echo "<script type>
	alert('LOS DATOS DEL SECTOR FUERON ACTUALIZADOS EXITOSAMENTE');
	location='../vista/page_sectores.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
}
	

	}
?>
