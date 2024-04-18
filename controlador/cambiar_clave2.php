<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php");
	$CEDULA=$_POST['codempl'];
	$nueva_clave=$_POST['nueva_clave'];
	$nueva_claver=$_POST['nueva_claver'];
	
			if($nueva_clave==$nueva_claver){
		$CAMBIO=mysql_query("UPDATE cuenta_usuario SET password='$nueva_clave' WHERE cedula='$CEDULA'");
		echo "<script type>
	alert('CAMBIO DE CLAVE EXITOSO');
	location='../?searchusuar=46cr3crgf4bh';
		</script>";
		}else{
		echo "<script type>
	alert('LAS CLAVES NO SON IGUALES');
	location='../vista/form/formnuevapassword.php?typ=gdfdsfdf65&files=rtrrtrtr465646564gfdds&codempl=$CEDULA&cambio=by6tdula';
		</script>";
		}
		
	}
?>
