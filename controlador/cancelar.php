<?php
	if (isset($_POST['impress'])){
include("../conexion_datos.php"); 
 
$numero_alquiler=$_POST['numero_alquiler'];
$borrar1=mysql_query("DELETE FROM alquiler WHERE cod_alq='$numero_alquiler'");
	$borrar=mysql_query("DELETE FROM detalle_alquiler WHERE cod_alq='$numero_alquiler'");
echo "<script type>
	alert('PROCESO DE ALQUILER CANCELADO');
	location='../vista/buscarforAlquiler.php?forAlq=ertb346 6et';
		</script>";

	}
?>
