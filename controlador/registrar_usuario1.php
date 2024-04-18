<?php
	if (isset($_POST['REGISTRO'])){
include("../conexion_datos.php"); 
//include("../modelo/captura_datos_usuario.php"); 
$cedula=$_POST['cedula'];
	$id_rol="2";
	$usuario=$_POST['usuarios'];
	$clave=$_POST['clave'];
	$claver=$_POST['claver'];

	

$validar=mysql_query("SELECT * FROM cuenta_usuario WHERE cedula='$cedula'");
$nro=mysql_num_rows($validar);
if($nro==0){
$validar1=mysql_query("SELECT * FROM cuenta_usuario WHERE login='$usuario'");
$nro1=mysql_num_rows($validar1);
	if($nro1==0){
		if($clave==$claver){
		$insertar=mysql_query("INSERT INTO cuenta_usuario VALUES(NULL,'$cedula','$id_rol','$usuario','$clave',NOW())");
		echo "<script type>
	alert('CUENTA DE USUARIO CREADA CON EXITO');
	location='../?searchusuar=46cr3crgf4bh';
		</script>";
		}else{
		echo "<script type>
	alert('LAS CLAVES NO SON IGUALES');
	location='../cargardatosUsuarios.php?Newempleo=$cedula';
		</script>";
		}
	}else{
	echo "<script type>
	alert('EL NOMBRE DE USUARIO $usuario NO ESTA DISPONIBLE');
		location='../cargardatosUsuarios.php?Newempleo=$cedula';
		</script>";
	}
	
}else{
echo "<script type>
	alert('UD. YA TIENE UNA CUENTA DE USUARIO');
	location='../registerusuario.php?searchusuar=46cr3crgf4bh';
		</script>";
}

	}
?>
