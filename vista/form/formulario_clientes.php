<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRAR CLIENTES</title>
<link href="../../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/principal.js"></script>
 <script language="JavaScript" type="text/JavaScript" src="../../js/funciones.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../../js/xhr.js"></script>
<script language="JavaScript" type="text/javascript">
 function Filtrar_sectores(){
			CargadorAjax.CargadorContenidos('../../modelo/filtrar_sectores.php', 'filtroSector', 'POST', 'id_parroq='+$('id_parroq').value);
	}
	</script>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	font-size: 16px;
	font-style: italic;
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
<table border="0" align="center" width="100%" bgcolor="#990000">
<tr>
<td bgcolor="#000066" height="7" ></td>
</tr>
</table>
<?php 
include("../../conexion_datos.php");
echo "
<table border='0' align='center' width='100%'>
<TR>
<TD width='30%'>
<A href='../page_clientes.php?empleo=3rbfe6ft6b&TYPE=PERSONAL' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Complete los datos del formulario, o edite los mismo, ya sea para registrar o modificar los registros del cliente.
</TD>
</TR>
</table>
";
?>



<?php 

if(isset($_GET['Newcte'])){
$CODIGO_CLIENTE=$_GET['Newcte'];
include("../../modelo/datosClientes.php");

echo "

<form name='entrar' action='../../controlador/registrar_clientes.php' method='POST'>
<input type='hidden' name='campo_unico' id='campo_unico' value='$CEDULA_CLIENTE'>
<table align='center' border='0' width='60%' bgcolor='#CCCCFF'>
<TR>
<TD colspan='2' align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>REGISTRO DE LOS CLIENTES</FONT></h2></TD>
</TR>
<TR>
<TD><span class='Estilo1'>C&eacute;dula</span></TD>
<TD><span class='Estilo1'>Nombre y Apellido</span></TD>
</TR>
<TR>
<TD>
<input type='text' name='cedula' id='cedula' class='contact_form' required placeholder='Cedula' value='$CEDULA_CLIENTE'>
</TD>

<TD>
<input type='text' name='nombre' id='nombre' class='contact_form1' required placeholder='Nombres' onChange='javascript:this.value=this.value.toUpperCase();' value='$NOMBRE_CLIENTE' title='Solo se aceptan letras'>
</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Tel&eacute;fono</span></TD>
<TD><span class='Estilo1'>Correo Electr&oacute;nico</span></TD>
</TR>
<TR>
<TD>
<input type='text' name='tlf' id='tlf' class='contact_form' required placeholder='Tel&eacute;fono' onChange='javascript:this.value=this.value.toUpperCase();' value='$TLF_CLIENTE' pattern='[0-9]+' title='Solo se aceptan n&uacute;meros'>
</TD>
<TD>
<input type='text' name='correo' id='correo' class='contact_form1' placeholder='Correo electr&oacute;nico' value='$CORREO_CLIENTE'>
</TD>
</TR>
<TR>
<TD colspan='2'><span class='Estilo1'>Direcci&oacute;n de habitaci&oacute;n</span></TD>
</TR>
<TR>

<TD colspan='2'>
<input type='text' name='dir' id='dir' class='contact_form1' required placeholder='Direcci&oacute;n' onChange='javascript:this.value=this.value.toUpperCase();' value='$DIRECC_CLIENTE'>
</TD>
<TR>
<TD><span class='Estilo1'>Parroquia</span></TD>
<TD><span class='Estilo1'>Sector</span></TD>
</TR>
<TR>
<TD>"; 
include("../../modelo/comboParroquias_filtro.php");
echo "</TD>
<TD>
<div id='filtroSector'>
<select name='id_sector' id='id_sector' class='contact_combo'>";
		echo "<option value='$ID_SECTOR_CTE'>-. $SELECT_SECTOR_CTE .</option>";
	echo "</select>
</div>
</TD>
</TR>
</TR>
<TR>
<TD align='center' colspan='2'>
<br><br>
<button class='botoneraCielo' name='REGISTRO' type='submit'  value='entrar' >$BOTON</button>
</TD>
</TR>
</table>
</form>
</div>
";
}
?>

</div>
</div>

</body>
</html>
