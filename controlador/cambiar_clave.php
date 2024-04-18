<?php
	if (isset($_POST['REGISTRO'])){
	include("../conexion_datos.php");
	$CEDULA=$_POST['CEDULA'];
	$clave_actual=$_POST['clave_actual'];
	$nueva_clave=$_POST['nueva_clave'];
	$nueva_claver=$_POST['nueva_claver'];
	
	$validar1=mysql_query("SELECT * FROM cuenta_usuario WHERE cedula='$CEDULA'");
	$nro1=mysql_num_rows($validar1);
	if($nro1!=0){
	$validar=mysql_query("SELECT * FROM cuenta_usuario WHERE password='$clave_actual'");
	$nro=mysql_num_rows($validar);
		if($nro!=0){
		if($nueva_clave==$nueva_claver){
		$CAMBIO=mysql_query("UPDATE cuenta_usuario SET password='$nueva_clave' WHERE cedula='$CEDULA' AND password='$clave_actual'");
		echo "<script type>
	alert('CAMBIO DE CLAVE EXITOSO');
	location='../vista/derecha.php?searchusuar=46cr3crgf4bh';
		</script>";
		}else{
		echo "<script type>
	alert('LAS CLAVES NO SON IGUALES');
	location='../vista/form/formulario_cambiarClave.php?cambio=by6tdula';
		</script>";
		}
		}else{
		echo "<script type>
	alert('LA CLAVE ACTUAL NO ES VALIDA');
	location='../vista/form/formulario_cambiarClave.php?cambio=by6tdula';
		</script>";
		}
		}else{
		echo "<script type>
	alert('USTED NO TIENE CUENTA CREADA');
	location='../vista/form/formulario_cambiarClave.php?cambio=by6tdula';
		</script>";
		}
	}
?>
