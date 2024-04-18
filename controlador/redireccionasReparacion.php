<?php
	if (isset($_POST['boton_buscar'])){
//include("../conexion_datos.php"); 
$mes=$_POST['mes'];

$id_parroq=$_POST['id_parroq'];

//$id_sector=$_POST['id_sectores'];

echo "<script language='JavaScript' type='text/javascript'>
	location='../vista/page_reparaciones.php?mes=$mes&id_parroq=$id_parroq&id_sector=ni87gg&mostrando=djfer547ey47ffgh';
		</script>";

	}
?>
