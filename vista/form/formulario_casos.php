<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REPORTAR CASOS</title>
<link href="../../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/principal.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../../js/funciones.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../../js/xhr.js"></script>
<script language="JavaScript" type="text/javascript">
 function Filtrar_sectores(){
			CargadorAjax.CargadorContenidos('../../modelo/filtrar_sectores.php', 'filtroSector', 'POST', 'id_parroq='+$('id_parroq').value);
	}
	
	function Buscar_cliente(){
			CargadorAjax.CargadorContenidos('../../modelo/buscarClientes.php', 'filtroCliente', 'POST', 'cedula='+$('cedula').value);
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
<td bgcolor="#000066" height="7"></td>
</tr>
</table>
<?php 
include("../../conexion_datos.php");
if(isset($_GET['arrowscasos'])){
$CODIGO_CLIENTE=$_GET['arrowscasos'];
include("../../modelo/datosClientes.php");
}else{
$CEDULA_CLIENTE="";
}
echo "
<table border='0' align='center' width='100%'>
<TR>
<TD width='30%'>
<A href='../derecha.php?empleo=3rbfe6ft6b&TYPE=REGISTROS' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Modulo para registrar los casos reportados.
</TD>
</TR>
</table>
";
?>



<?php 
$CASOS=mysql_query("SELECT * FROM casos");
$ncas=mysql_num_rows($CASOS);
$CODIGO_CASO=date("Ymd").($ncas+1);
/*if(isset($_GET['Newmaq'])){
$IDENT_SECTOR=$_GET['Newmaq'];
include("../../modelo/campos_sectores.php");*/
echo "<form name='entrar' action='../../controlador/registrar_caso.php' method='POST'>	
<input type='hidden' name='RESPONSABLE' id='RESPONSABLE' value='24908567'>
<table align='center' border='0' width='70%' bgcolor='#CCCCFF'>
<TR>
<TD colspan='3' align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>REGISTRAR CASOS</FONT></h2></TD>
</TR>
<TR>
<TD><span class='Estilo1'>C&oacute;digo</span></TD>
<TD colspan='2'><span class='Estilo1'>Fecha de registro</span></TD>
</TR>
<TR>
<TD><input type='text' name='CODIGO_CASO' id='CODIGO_CASO' class='contact_form' readonly value='$CODIGO_CASO'></TD>
<TD colspan='2'>"; 
include("../../modelo/fecha.php");
echo "</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Parroquia</span></TD>
<TD><span class='Estilo1'>Sector</span></TD>
<TD><span class='Estilo1'>C&eacute;dula del cliente</span></TD>
</TR>

<TR>
<TD>"; 
$ID_PARROQ_CTE="0";
$ID_PARROQ_CTE="";
$SELECT_PARROQ_CTE="Seleccione"; 
include("../../modelo/comboParroquias_filtro.php");
$ID_SECTOR_CTE="";
$SELECT_SECTOR_CTE="Seleccione";
echo "</TD>
<TD>
<div id='filtroSector'>
<select name='id_sector' id='id_sector' class='contact_combo'>";
		echo "<option value='$ID_SECTOR_CTE'>-. $SELECT_SECTOR_CTE .</option>";
	echo "</select>
</div>
</TD>
<TD>
<input type='text' name='cedula' id='cedula' class='contact_form' required placeholder='Cedula' value='$CEDULA_CLIENTE' onChange='Buscar_cliente()'>
</TD>
</TR>
<TR>
<TD align='center' colspan='3'>
<div id='filtroCliente'>"; 
if(isset($_GET['arrowscasos'])){
include("desdeCliente.php");
}
echo "</div>
</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Tipo de servicio</span></TD>
<TD colspan='2'><span class='Estilo1'>Descripci&oacute;n</span></TD>
</TR>
<TR>
<TD>"; 
$IDENTIF_SERVI_CTE="";
$SELECT_SERVI_CTE="Seleccione";
include("../../modelo/comboServicios.php");
echo "</TD>
<TD colspan='2'>
<textarea name='descripcion' id='descripcion' class='contact_textareas' required onChange='javascript:this.value=this.value.toUpperCase();'></textarea>
</TD>
</TR>
<TR>
<TD colspan='3'><span class='Estilo1'>Observaci&oacute;n</span></TD>
</TR>
<TR>
<TD colspan='3'>
<textarea name='observacion' id='observacion' class='contact_textareas1' onChange='javascript:this.value=this.value.toUpperCase();'></textarea>
</TD>
</TR>
<TR>
<TD colspan='3'>
<table border='0' width='100%' bgcolor='#CCCCFF'>
<TR>
<TD><span class='Estilo1'>Fecha programada</span></TD>
<TD><span class='Estilo1'>"; /*echo "Fecha de reparaci&oacute;n";*/ echo "</span></TD>
</TR>
<TR>
<TD>"; 
$dday="";
$sdday="D&iacute;a";
$dms=date("m");
$sdms=$dms;
$dys=date("Y");
$sdys=$dys;
include("../../modelo/fecha1.php");
echo "</TD>
<TD>"; 
//include("../../modelo/fecha2.php");
echo "</TD>
</TR>
</table>
</TD>
</TR>

<TR>
<TD align='center' colspan='3'>
<br><br>
<button class='botoneraCielo' name='REGISTRO' type='submit'  value='entrar'>REGISTRAR CASO</button>
</TD>
</TR>
</table>
</form>

";
//} 
?>



</body>
</html>
