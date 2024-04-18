<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
include("../modelo/captura_datos_cargos.php"); 

	if ($campo_unico==0){

$validar=mysql_query("SELECT * FROM cargos WHERE id_cargo='$campo_unico'");
$nro=mysql_num_rows($validar);
if($nro==0){
$validar1=mysql_query("SELECT * FROM cargos WHERE descripcion='$cargo'");
$nro1=mysql_num_rows($validar1);
	if($nro1==0){
	$insertar=mysql_query("INSERT INTO cargos VALUES(NULL,'$cargo')");
	echo "<script type>
	alert('LOS DATOS DEL CARGO FUERON REGISTRADOS EXITOSAMENTE');
	location='../vista/page_cargos.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
	}else{
	echo "<script type>
	alert('YA EXISTE UN CARGO CON EL NOMBRE DE: $cargo');
	location='../vista/form/form_cargos.php?Newmaq=$campo_unico';
		</script>";
	}
}else{
echo "<script type>
	alert('EL CODIGO DEL CARGO EXISTE');
	location='../vista/form/form_cargos.php?Newmaq=$campo_unico';
		</script>";
}
}else{
$modif=mysql_query("UPDATE cargos SET descripcion='$cargo' WHERE id_cargo='$campo_unico'");
	echo "<script type>
	alert('LOS DATOS DEL CARGO FUERON ACTUALIZADOS EXITOSAMENTE');
	location='../vista/page_cargos.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";
}
	

	}
?>
