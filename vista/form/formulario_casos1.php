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
	
 $IDENT_PARROQUIA=$DATOS_CASO[2];
  include("../../modelo/campos_parroquia.php");
  
  $IDENT_SECTOR=$DATOS_CASO[3];
include("../../modelo/campos_sectores.php");
echo "
<table border='0' align='center' width='100%'>
<TR>
<TD width='30%'>
<A href='../page_reparaciones.php?empleo=3rbfe6ft6b&TYPE=REGISTROS' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Modulo para registrar las reparaci&oacute;n de los Casos.
</TD>
</TR>
</table>
";
?>



<?php 
echo "<form name='entrar' action='../../controlador/registrar_reparacion.php' method='POST'>	
<input type='hidden' name='RESPONSABLE' id='RESPONSABLE' value='24908567'>
<table align='center' border='0' width='70%' bgcolor='#CCCCFF'>
<TR>
<TD colspan='3' align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>REGISTRAR REPARACI&Oacute;N</FONT></h2></TD>
</TR>
<TR>
<TD><span class='Estilo1'>C&oacute;digo</span></TD>
<TD colspan='2'><span class='Estilo1'>Fecha de registro</span></TD>
</TR>
<TR>
<TD><input type='text' name='CODIGO_CASO' id='CODIGO_CASO' class='contact_form' readonly value='$CODIGO_CASO'></TD>
<TD colspan='2'>
<input type='text' name='FECHA' id='FECHA' class='contact_form' readonly value='$dia_p-$mes_p-$year_p'>
</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Parroquia</span></TD>
<TD><span class='Estilo1'>Sector</span></TD>
<TD><span class='Estilo1'>C&eacute;dula del cliente</span></TD>
</TR>

<TR>
<TD>
<select name='id_parroq' id='id_parroq' class='contact_combo'>";
echo "<option value='$ID_PARROQUIA'>-. $DESC_PARROQUIA .</option>";
echo "</select>
</TD>
<TD>

<select name='id_sector' id='id_sector' class='contact_combo'>";
		echo "<option value='$ID_SECTOR'>-. $DESC_SECTOR .</option>";
	echo "</select>

</TD>
<TD>
<input type='text' name='cedula' id='cedula' class='contact_form' required placeholder='Cedula' value='$CEDULA_CLIENTE' readonly>
</TD>
</TR>
<TR>
<TD align='center' colspan='3'>
"; 
if(isset($_GET['arrowscasos'])){
include("desdeCliente.php");
}
echo "
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
echo "
<select name='EL_SERVICIO' id='EL_SERVICIO' class='contact_combo'>";
		echo "<option value='$ID_SERVICIO'>-. $DESC_SERVICIO .</option>";
	echo "</select>
</TD>
<TD colspan='2'>
<textarea name='descripcion' id='descripcion' class='contact_textareas' readonly onChange='javascript:this.value=this.value.toUpperCase();'>$DATOS_CASO[6]</textarea>
</TD>
</TR>
<TR>
<TD colspan='3'><span class='Estilo1'>Observaci&oacute;n</span></TD>
</TR>
<TR>
<TD colspan='3'>
<textarea name='observacion' id='observacion' class='contact_textareas1' onChange='javascript:this.value=this.value.toUpperCase();'>$DATOS_CASO[7]</textarea><font color='RED'><b> * </b></font>
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
<TD>
<input type='text' name='FECHA1' id='FECHA1' class='contact_form' readonly value='$dia_p1-$mes_p1-$year_p1'>
</TD>
<TD>";
$iddiaRepar="";
$selectdiaRepar="D&iacute;a";

$idmesRepar="";
$selectmesRepar="Mes";

$idanioRepar=date("Y");
$selectanioRepar=$idanioRepar; 
include("../../modelo/fecha2.php");
echo "<font color='RED'><b> * </b></font></TD>
</TR>
</table>
</TD>
</TR>

<TR>
<TD align='center' colspan='3'>
<br>
<button class='botoneraCielo' name='REGISTRO' type='submit'  value='entrar'>GUARDAR</button>
<BR>
<font color='RED'><b> ( * ) Campos editables</b></font>
</TD>
</TR>
</table>
</form>

";
} 
?>



</body>
</html>
