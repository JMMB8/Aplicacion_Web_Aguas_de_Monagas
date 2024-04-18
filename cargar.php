<?php
session_start();
?>
<?php

	if (isset($_POST['accesosKey'])){
	
include("conexion_datos.php"); 
	$loginUsuario=$_POST['namelogin'];
	$loginClave=$_POST['password'];
	
	/*if($loginUsuario=="admin" && $loginClave=="1234"){
	echo "<script language='JavaScript' type='text/javascript'>
	location='vista/';
		</script>";
	
	}else{
		echo "<script type>
	alert('ACCESO NO AUTORIZADO, NOMBRE DE USUARIO O CLAVE INCORRECTO');
	location='index.html';
		</script>";
	}*/

	$validar=mysql_query("SELECT * FROM cuenta_usuario WHERE login='$loginUsuario' AND password='$loginClave'");
	$nro=mysql_num_rows($validar);
	
	if($nro!=0){
	
$datus=mysql_fetch_row($validar);
$_SESSION['LOGIN_USUARIO_SESION']=$datus[3];
$_SESSION['LOGIN_ROL_SESION']=$datus[2];
$_SESSION["LOGIN_CEDULA_USUARIO"]=$datus[1];
		
	echo "<script language='JavaScript' type='text/javascript'>
	location='vista/';
		</script>";
	}
	else
	{
	echo "<script type>
	alert('ACCESO NO AUTORIZADO, NOMBRE DE USUARIO O CLAVE INCORRECTO');
	location='index.html';
		</script>";
	}

	}
?>
