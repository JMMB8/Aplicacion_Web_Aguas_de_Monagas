<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EDITAR CASOS</title>
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

if(isset($_GET['arrowscasos'])){
include("../../conexion_datos.php");
$CODIGO_CASO=$_GET['arrowscasos'];
$BUSCAR_CASO=mysql_query("SELECT * FROM casos WHERE codigo='$CODIGO_CASO'");
$DATOS_CASO=mysql_fetch_row($BUSCAR_CASO);
$CODIGO_CLIENTE=$DATOS_CASO[4];
include("../../modelo/datosClientes.php");
	$dia_p=substr($DATOS_CASO[1], 8, 2);
	$mes_p=substr($DATOS_CASO[1], 5, 2);
	$year_p=substr($DATOS_CASO[1], 0, 4);
	
	$dia_p1=substr($DATOS_CASO[8], 8, 2);
	$mes_p1=substr($DATOS_CASO[8], 5, 2);
	$year_p1=substr($DATOS_CASO[8], 0, 4);
	
	$dia_p2=substr($DATOS_CASO[9], 8, 2);
	$mes_p2=substr($DATOS_CASO[9], 5, 2);
	$year_p2=substr($DATOS_CASO[9], 0, 4);
	
 $IDENT_PARROQUIA=$DATOS_CASO[2];
  include("../../modelo/campos_parroquia.php");
  
  $IDENT_SECTOR=$DATOS_CASO[3];
include("../../modelo/campos_sectores.php");



echo "
<table border='0' align='center' width='100%'>
<TR>
<TD width='30%'>
<A href='../consultas_casos.php?empleo=3rbfe6ft6b&TYPE=REGISTROS' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Modulo para editar los datos de los casos reportados.
</TD>
</TR>
</table>
";
?>



<?php 
echo "<form name='entrar' action='../../controlador/editar_caso.php' method='POST'>	
<input type='hidden' name='RESPONSABLE' id='RESPONSABLE' value='24908567'>
<table align='center' border='0' width='70%' bgcolor='#CCCCFF'>
<TR>
<TD colspan='3' align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>EDITAR DATOS CASOS</FONT></h2></TD>
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

$ID_PARROQ_CTE=$ID_PARROQUIA;
$SELECT_PARROQ_CTE=$DESC_PARROQUIA; 
include("../../modelo/comboParroquias_filtro.php");
$ID_SECTOR_CTE="";
$SELECT_SECTOR_CTE="Seleccione";
echo "</TD>
<TD>
<div id='filtroSector'>
<select name='id_sector' id='id_sector' class='contact_combo'>";
		echo "<option value='$ID_SECTOR'>-. $DESC_SECTOR .</option>";
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

$IDENT_SERVICIO=$DATOS_CASO[5];
include("../../modelo/campos_servicio.php");
$IDENTIF_SERVI_CTE=$ID_SERVICIO;
$SELECT_SERVI_CTE=$DESC_SERVICIO;

include("../../modelo/comboServicios.php");
echo "</TD>
<TD colspan='2'>
<textarea name='descripcion' id='descripcion' class='contact_textareas' required onChange='javascript:this.value=this.value.toUpperCase();'>$DATOS_CASO[6]</textarea>
</TD>
</TR>
<TR>
<TD colspan='3'><span class='Estilo1'>Observaci&oacute;n</span></TD>
</TR>
<TR>
<TD colspan='3'>
<textarea name='observacion' id='observacion' class='contact_textareas1' onChange='javascript:this.value=this.value.toUpperCase();'>$DATOS_CASO[7]</textarea>
</TD>
</TR>
<TR>
<TD colspan='3'>
<table border='0' width='100%' bgcolor='#CCCCFF'>
<TR>
<TD><span class='Estilo1'>Fecha programada</span></TD>
<TD><span class='Estilo1'>"; echo "Fecha de reparaci&oacute;n"; echo "</span></TD>
</TR>
<TR>
<TD>";
$dday=$dia_p1;
$sdday=$dday;
$dms=$mes_p1;
$sdms=$dms;
$dys=$year_p1;
$sdys=$dys;
include("../../modelo/fecha1.php");
echo "</TD>
<TD>"; 

$iddiaRepar=$dia_p2;
$selectdiaRepar=$iddiaRepar;

$idmesRepar=$mes_p2;
$selectmesRepar=$idmesRepar;

$idanioRepar=$year_p2;
$selectanioRepar=$idanioRepar;
include("../../modelo/fecha2.php");
echo "</TD>
</TR>
</table>
</TD>
</TR>

<TR>
<TD align='center' colspan='3'>
<br><br>
<button class='botoneraCielo' name='REGISTRO' type='submit'  value='entrar'>GUARDAR</button>
</TD>
</TR>
</table>
</form>

";
} 
?>



</body>
</html>
