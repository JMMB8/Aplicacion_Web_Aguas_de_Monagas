<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CASOS</title>
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
$TYPE=$_GET['TYPE'];

if($TYPE=="1")
$des_cas="REPARADO";
else
$des_cas="SIN REPARAR";
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
<A href='../consultas_casos1.php?empleo=3rbfe6ft6b&tokentipo=$TYPE' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
CONSULTA.
</TD>
</TR>
</table>
";
?>



<?php 
echo "

<table align='center' border='0' width='70%'>
<TR>
<TD colspan='3' align='center' bgcolor='#000000'><h3><FONT color='#FFFFFF'>CONSULTA DE CASO $des_cas</FONT></h3></TD>
</TR>
<TR bgcolor='#CCCCFF'>
<TD><span class='Estilo1'>C&oacute;digo</span></TD>
<TD colspan='2'><span class='Estilo1'>Fecha de registro</span></TD>
</TR>
<TR>
<TD>$CODIGO_CASO</TD>
<TD colspan='2'>
$dia_p-$mes_p-$year_p
</TD>
</TR>
<TR bgcolor='#CCCCFF'>
<TD><span class='Estilo1'>Parroquia</span></TD>
<TD><span class='Estilo1'>Sector</span></TD>
<TD><span class='Estilo1'>C&eacute;dula del cliente</span></TD>
</TR>

<TR>
<TD> $SELECT_PARROQ_CTE</TD>
<TD>
 $DESC_SECTOR 
</div>
</TD>
<TD>
$CEDULA_CLIENTE
</TD>
</TR>
<TR>
<TD align='center' colspan='3'>
<table border='0' width='100%'>
<TR bgcolor='#CCCCFF'>
<TD><span class='Estilo1'>Nombre y Apellido</span></TD>
<TD><span class='Estilo1'>Tel&eacute;fono</span></TD>
</TR>

<TR>
<TD>$NOMBRE_CLIENTE</TD>
<TD>$TLF_CLIENTE</TD>
</TR>

<TR bgcolor='#CCCCFF'>
<TD><span class='Estilo1'>Correo Electr&oacute;nico</span></TD>
<TD><span class='Estilo1'>Direcci&oacute;n de habitaci&oacute;n</span></TD>
</TR>
<TR>
<TD>
$CORREO_CLIENTE
</TD>
<TD>
$DIRECC_CLIENTE
</TD>
</TR>
	</table>

</TD>
</TR>
<TR bgcolor='#CCCCFF'>
<TD><span class='Estilo1'>Tipo de servicio</span></TD>
<TD colspan='2'><span class='Estilo1'>Descripci&oacute;n</span></TD>
</TR>
<TR>
<TD>"; 

$IDENT_SERVICIO=$DATOS_CASO[5];
include("../../modelo/campos_servicio.php");


echo "$DESC_SERVICIO</TD>
<TD colspan='2'>
$DATOS_CASO[6]
</TD>
</TR>
<TR>
<TD colspan='3'><span class='Estilo1'>Observaci&oacute;n</span></TD>
</TR>
<TR>
<TD colspan='3'>
$DATOS_CASO[7]
</TD>
</TR>
<TR>
<TD colspan='3'>
<table border='0' width='100%'>
<TR bgcolor='#CCCCFF'>
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

echo "$dday-$dms-$dys</TD>
<TD>"; 

$iddiaRepar=$dia_p2;
$selectdiaRepar=$iddiaRepar;

$idmesRepar=$mes_p2;
$selectmesRepar=$idmesRepar;

$idanioRepar=$year_p2;
$selectanioRepar=$idanioRepar;

echo "$iddiaRepar-$idmesRepar-$idanioRepar</TD>
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


";
} 
?>



</body>
</html>
