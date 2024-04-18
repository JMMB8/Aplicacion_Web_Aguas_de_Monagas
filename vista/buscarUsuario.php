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
    x=confirm('REALMENTE DESEA ELIMINAR EL REGISTRO DEL CLIENTE.?');
	if(x)
	{ header("Location: operacioncliente.php"); return true;}
	else
	{ return false; }
}

	
</script>

<style type="text/css">
<!--
.Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
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
	<table border="0" align="center" width="100%">

<tr><td align="center">
<BR><BR>
	<?php
	echo "<center><h2>CREAR CUENTA DE USUARIO</h2></center>";
	?>
	
<A href="derecha.php" title="Inicio">
<img src="../img/inicio.png">
</A>
</td>
</tr>
</table>
<BR>

<?php


if(isset($_GET['searchusuar'])){
?>
<center>
<table align="center">
<tr>
<td bgcolor="#000000">
  <span class="Estilo1">BUSCAR REGISTRO</span></td>
</tr>
<tr>
<td>
Ingrese el numero de cedula<br><br>
</td>
</tr>
<tr>
<td>
<form name='entrar' action='./form/formulario_usuario.php' method='POST'>
<input type='text' name='campo' id='campo' class='contact_form' required placeholder='Cedula'>
<button class='submit' name='bus' type='submit'  value='entrar'>Buscar</button>
</form>
</td>
</tr>
</table>
</center>
<?php
}
 ?>
 
 <?php
/*}
else
{
echo "<center>ACCESO NO AUTORIZADO, EL USUARIO DEBE INICIAR SESI&Oacute;N<br><br>


</center>";
}*/
?>

</body>
</html>
