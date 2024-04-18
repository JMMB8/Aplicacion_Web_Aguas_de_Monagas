<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
include("../modelo/captura_datos_empleado.php"); 

	if ($campo_unico==0){

$validar=mysql_query("SELECT * FROM personal WHERE cedula='$campo_unico'");
$nro=mysql_num_rows($validar);
if($nro==0){

	$insertar=mysql_query("INSERT INTO personal VALUES('$cedula','$nombre','$apellido','$sexo','$fecha_nac','$EDAD_PERSONAL','$correo','$tlf','$estatus','$id_cargos')");
	
		echo "<script type>
	alert('LOS DATOS DEL EMPLEADO FUERON REGISTRADOS EXITOSAMENTE');
	location='../vista/page_personal.php?empleo=3rbfe6ft6b&TYPE=PERSONAL';
		</script>";
	
}else{
echo "<script type>
	alert('LA CEDULA DE LA PERSONA YA EXISTE');
	location='../vista/form/formulario_empleado.php?Newempleo=$campo_unico&TYPE=PERSONAL';
		</script>";
}
}else{
$modif=mysql_query("UPDATE personal SET cedula='$cedula',nombres='$nombre',apellidos='$apellido',sexo='$sexo',fecha_naci='$fecha_nac',edad='$EDAD_PERSONAL',correo='$correo',tlf='$tlf',estatus='$estatus',id_cargo='$id_cargos' WHERE cedula='$campo_unico'");
	echo "<script type>
	alert('LOS DATOS DEL EMPLEADO FUERON ACTUALIZADOS EXITOSAMENTE');
	location='../vista/page_personal.php?empleo=3rbfe6ft6b&TYPE=PERSONAL';
		</script>";
}

	}
?>
