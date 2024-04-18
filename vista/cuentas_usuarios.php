<?php
session_start();
?>
<?php

//if (isset($_SESSION['loginsesion']) && isset($_SESSION['tipo_rol'])){
include("../conexion_datos.php");
/*$nivel_acceso=$_SESSION['tipo_rol'];
$cedula_acceso=$_SESSION["cedulaAdmin"];*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Estudiantes</title>
<link rel="stylesheet" href="../css/men_1.css" type="text/css"/>
<link href="../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript" src="../js/funciones.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../js/xhr.js"></script>
<script language="JavaScript" type="text/javascript">

	function confirmar_eliminar3()
{
    x=confirm('REALMENTE DESEA ELIMINAR LA CUENTA DE USUARIO.?');
	if(x)
	{ header("Location: cuentas_usuarios.php"); return true;}
	else
	{ return false; }
}

	function confirmar_eliminar4()
{
    x=confirm('DESEA REINICIAR LA CLAVE DE USUARIO.?');
	if(x)
	{ header("Location: cuentas_usuarios.php"); return true;}
	else
	{ return false; }
}

	
</script>
<style type="text/css">
.tablas{
width: 1000px;
border-collapse:collapse;
background-color: #FFFFFF; 
}
.tablas td{
/*padding:1px;*/
border:1px solid black;

}
</style>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: italic;
}
.Estilo2 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
	color: #CCFFFF;
}

.Estilo3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
	color: #000000;
}
-->
</style>
</head>
<body>
<div id="pdvsaCapaTransparente" onDblClick="modalCargando(0);"></div>

	<!--Grande-->
	<div id="pdvsaCargaGrande" onDblClick="modalCargaGrande(0);"></div>
	
	<!--Mediano-->
	<div id="pdvsaCargaMediana" onDblClick="modalCargaMediano(0);"></div>
	
	<!--Pequeno-->
	<div id="pdvsaCargaPequena" onDblClick="modalCargaPequeno(0);"></div>

<?php

if(isset($_GET['allusua']) || isset($_POST['bus'])){
include("listado_usuarios.php");
}

if(isset($_POST['REGISTRA_ALUMN'])){
include("../datas/insertarAlumnos.php");
}


if(isset($_GET['dropAlum'])){
$CODGELIM=$_GET['dropAlum'];
$borrar=mysql_query("DELETE FROM cuenta_usuario WHERE id_cta='$CODGELIM'");
echo "<script language='JavaScript' type='text/javascript'>
		alert('LA CUENTA DE USUARIO HA SIDO ELIMINADA');
	location='cuentas_usuarios.php?allusua=3rbfe6ft6b&TYPE=personal';
		</script>";
}


if(isset($_GET['reinic'])){
$CODGELIM=$_GET['reinic'];
$borrar=mysql_query("UPDATE cuenta_usuario SET password='123456' WHERE id_cta='$CODGELIM'");
echo "<script language='JavaScript' type='text/javascript'>
		alert('CLAVE REINICIDAD, NUEVA CLAVE 123456');
	location='cuentas_usuarios.php?allusua=3rbfe6ft6b&TYPE=personal';
		</script>";
}
 ?>
 
 <?php
/*}
else
{
echo "<center>ACCESO NO AUTORIZADO, EL USUARIO DEBE INICIAR SESI&Oacute;N</center>";
}*/
?>
</body>
</html>
