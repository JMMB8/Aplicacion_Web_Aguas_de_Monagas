<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
include("../modelo/captura_datos_clientes.php"); 

	if ($campo_unico==""){

$validar=mysql_query("SELECT * FROM contactos WHERE cedula='$cedula'");
$nro=mysql_num_rows($validar);
if($nro==0){
	$insertar=mysql_query("INSERT INTO contactos VALUES('$cedula','$nombre','$tlf','$dir','$correo','$id_parroq','$id_sector')");
		echo "<script type>
	alert('LOS DATOS DEL CLIENTE FUERON REGISTRADOS EXITOSAMENTE');
	location='../vista/page_clientes.php?cte=3rbfe6ft6b&TYPE=CLIENTE';
		</script>";
	
}else{
echo "<script type>
	alert('LA CEDULA DEL CLIENTE YA EXISTE');
	location='../vista/form/formulario_clientes.php?Newcte=$campo_unico';
		</script>";
}
}else{
$modif=mysql_query("UPDATE contactos SET cedula='$cedula',nombre='$nombre',tlf='$tlf',direccion='$dir',correo='$correo',id_parroquia='$id_parroq',id_sector='$id_sector' WHERE cedula='$campo_unico'");
	echo "<script type>
	alert('LOS DATOS DEL CLIENTE FUERON ACTUALIZADOS EXITOSAMENTE');
	location='../vista/page_clientes.php?cte=3rbfe6ft6b&TYPE=CLIENTE';
		</script>";
}
	}
?>
