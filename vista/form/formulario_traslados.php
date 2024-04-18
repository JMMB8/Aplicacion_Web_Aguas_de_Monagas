<?php
session_start();
?>
<?php

if (isset($_SESSION['loginsesion']) && isset($_SESSION['tipo_rol'])){
//include("../conexion_datos.php");
$nivel_acceso=$_SESSION['tipo_rol'];
$cedula_acceso=$_SESSION["cedulaAdmin"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Traslados</title>
<link rel="stylesheet" href="../../css/men_1.css" type="text/css"/>
<link href="../../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript" src="../../js/funciones.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../../js/xhr.js"></script>
 <script type="text/javascript" src="js/principal.js"></script>
 <script language="JavaScript" type="text/javascript">
 function Filtrar_ciudades() {
			CargadorAjax.CargadorContenidos('../../modelo/lasciudades.php', 'mostrador', 'POST', 'id_estado='+$('id_estado').value);
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
<!--Modals de  Carga-->
	<div id="pdvsaCapaTransparente" onDblClick="modalCargando(0);"></div>

	<!--Grande-->
	<div id="pdvsaCargaGrande" onDblClick="modalCargaGrande(0);"></div>
	
	<!--Mediano-->
	<div id="pdvsaCargaMediana" onDblClick="modalCargaMediano(0);"></div>
	
	<!--Pequeno-->
	<div id="pdvsaCargaPequena" onDblClick="modalCargaPequeno(0);"></div>
	
<table border="0" align="center" width="100%" bgcolor="#990000">
<tr>
<td background="../../img/cuadrito1.png" height="7"></td>
</tr>
</table>
<?php 
include("../../conexion_datos.php");


echo "
<table border='0' align='center' width='100%'>
<TR>
<TD>
<A href='../centro.php?empleo=3rbfe6ft6b&TYPE=PERSONAL' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
</TR>
</table>
";
?>


<?php 

if(isset($_GET['searchAlq'])){
$ID_TRASLADOS=$_GET['searchAlq'];
include("../../modelo/campos_traslados.php");
echo "
<CENTER><H2>REGISTROS DE ENTRDAS/SALIDAS</H2></CENTER>
<br>
<form name='entrar' action='../../controlador/registrar_traslados.php' method='POST'>
<input type='hidden' name='campo_unico' id='campo_unico' value='$CLAVE_PRIMARIA'>
<table align='center' border='0' width='80%'>
<TR>
<TD colspan='3'>C&oacute;digo</TD>
</TR>
<TR>
<TD colspan='3'>
<input type='text' name='CODIGO_TRASLADO' id='CODIGO_TRASLADO' class='contact_form' required value='$CODIGO_TRASLADO'>
</TD>
";

echo "
</TR>";
echo "<TR>
<TD colspan='3'>Seleccione el transporte</TD>
</TR>";
echo "<TR>
<TD colspan='3'>";
include("../../modelo/comboMaquinarias.php");
 echo "</TD>
</TR>";
echo "<TR>
<TD colspan='3'>Seleccione el chofer para el transporte</TD>
</TR>";
echo "<TR>
<TD colspan='3'>";
include("../../modelo/comboChofer.php");
 echo "</TD>
</TR>";
echo "<TR>
<TD>Estado destino</TD><TD>Ciudad destino</TD><TD>Lugar destino</TD>
</TR>";

echo "<TR>
<TD>";
include("../../modelo/comboEstados.php");
echo "</TD><TD><DIV id='mostrador'>

<SELECT name='id_ciudad' id='id_estado' class='contact_combo' required=''>
		<option value='$CIUDAD_TRASLADO'>- $NOMBRE_CIUDAD -</option>
	</select>

</DIV></TD><TD><input type='text' name='lugar' id='lugar' class='contact_form1' required value='$LUGAR_TRASLADO'></TD>
</TR>";
echo "<TR>
<TD colspan='3'>Fecha de salida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Tipo de hidrocarburo</TD>
</TR><TR><TD colspan='3'>";
echo "<select name='dia_salida' id='dia_salida' class='contact_combo' required=''>";
echo "<option value='$ID_DIA_SALIDA'>-.  $SELECT_DIA_SALIDA .</option>";
for($x=1;$x<=31;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";

echo "<select name='mes_salida' id='mes_salida' class='contact_combo' required='0'>";
echo "<option value='$ID_MES_SALIDA'>-.  $SELECT_MES_SALIDA .</option>";
for($x=1;$x<=12;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";
$ANIOSALIDA_TRANSP=date("Y");
$DANIOSALIDA_TRANSP=$ANIOSALIDA_TRANSP;
echo "<select name='anio_salida' id='anio_salida' class='contact_combo' required='0'>";
echo "<option value='$ID_ANIO_SALIDA'>-. $SELECT_ANIO_SALIDA .</option>";
/*$anio_a=date("Y");
for($x=1920;$x<=$anio_a-10;$x++){

echo "<option value='$x'>-.  $x .</option>";
}*/
echo "</select>";

echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
include("../../modelo/comboMaterial.php");
echo "</TD>
</TR>";
echo "<TR>
<TD>Cantidad</TD><TD colspan='2'>Indique alguna observaci&oacute;n de la salida</TD>
</TR>";
echo "<TR>
<TD><input type='text' name='cantidad' id='cantidad' class='contact_form' required value='$CANTIDAD_TIPO_CARGA_TRASLADO'></TD>
<TD colspan='2'>
<textarea name='obsersalida' id='obsersalida' class='contact_textareas' onChange='javascript:this.value=this.value.toUpperCase();'>$OBSERV_SALIDA_TRASLADO</textarea>
</TD>
</TR>";

if($ID_TRASLADOS!=0 && $ESTATUS_TRASLADO=="1"){

echo "<TR><TD colspan='3'>Fecha de Entrada</TD></TR>";
echo "<TR>
<TD colspan='3'>"; 

echo "<select name='dia_entrada' id='dia_entrada' class='contact_combo' required=''>";
echo "<option value=''>-.  D&iacute;a .</option>";
//echo "<option value='$ID_DIA_ENTRADA'>-.  $SELECT_DIA_ENTRADA .</option>";
for($x=1;$x<=31;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";

echo "<select name='mes_entrada' id='mes_entrada' class='contact_combo' required=''>";
echo "<option value=''>-.  Mes.</option>";
//echo "<option value='$ID_MES_ENTRADA'>-.  $SELECT_MES_ENTRADA .</option>";
for($x=1;$x<=12;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";
echo "<select name='anio_entrada' id='anio_entrada' class='contact_combo' required=''>";
//echo "<option value='$ID_ANIO_ENTRADA'>-. $SELECT_ANIO_ENTRADA .</option>";
$anio_a=date("Y");
echo "<option value='$anio_a'>-.  $anio_a .</option>";
/*$anio_a=date("Y");
for($x=1920;$x<=$anio_a-10;$x++){

echo "<option value='$x'>-.  $x .</option>";
}*/
echo "</select></TD></TR>";
echo "<TR><TD colspan='3'>Indique alguna observaci&oacute;n de entrada</TD></TR>";

echo "<TR><TD colspan='3'><textarea name='obserentrada' id='obserentrada' class='contact_textareas' onChange='javascript:this.value=this.value.toUpperCase();'>$OBSERV_ENTRADA_TRASLADO</textarea>
</TD></TR>";

}

echo "<TR>
<TD>Condici&oacute;n de la salidad</TD><TD colspan='2'>
<SELECT name='estado' id='estado' class='contact_combo' required=''>";
if($ESTATUS_TRASLADO==""){
echo "<OPTION value='$ESTATUS_TRASLADO'>- $SELECT_ESTATUS -</OPTION>
<OPTION value='1'>- EN RUTA  -</OPTION>
<OPTION value='4'>- EN PAUTA  -</OPTION>
";
/*<OPTION value='2'>- VIAJE FINALIZADO -</OPTION>
<OPTION value='3'>- VIAJE NO FINALIZADO  -</OPTION>*/
}else{
if($ESTATUS_TRASLADO=="1"){
//echo "<OPTION value='$ESTATUS_TRASLADO'>- $SELECT_ESTATUS -</OPTION>";
echo "<OPTION value='2'>- VIAJE FINALIZADO -</OPTION>
<OPTION value='3'>- VIAJE NO CULMINADO  -</OPTION>";
//echo "<OPTION value='4'>- EN PAUTA  -</OPTION>";
}else{
if($ESTATUS_TRASLADO=="2"){
echo "<OPTION value='$ESTATUS_TRASLADO'>- $SELECT_ESTATUS -</OPTION>
<OPTION value='1'>- EN RUTA -</OPTION>
<OPTION value='3'>- VIAJE NO FINALIZADO  -</OPTION>
<OPTION value='4'>- EN PAUTA  -</OPTION>";
}else{
if($ESTATUS_TRASLADO=="3"){
echo "<OPTION value='$ESTATUS_TRASLADO'>- $SELECT_ESTATUS -</OPTION>
<OPTION value='1'>- EN RUTA  -</OPTION>
<OPTION value='2'>- VIAJE FINALIZADO -</OPTION>
<OPTION value='4'>- EN PAUTA  -</OPTION>";
}else{
echo "<OPTION value='$ESTATUS_TRASLADO'>- $SELECT_ESTATUS -</OPTION>
<OPTION value='1'>- EN RUTA -</OPTION>
<OPTION value='3'>- VIAJE NO FINALIZADO  -</OPTION>
";
//<OPTION value='2'>- VIAJE FINALIZADO -</OPTION>
}
}
}

}

echo "</SELECT>
</TD>
</TR>";
echo "<TR>
<TD align='center' colspan='3'>
<br><br>
<button class='submit' name='REGISTRO' type='submit'  value='entrar'>$BOTON</button>
</TD>
</TR>
</table>
</form>

";
}
?>


</body>
</html>
 <?php
}
else
{
echo "<center>ACCESO NO AUTORIZADO, EL USUARIO DEBE INICIAR SESI&Oacute;N</center>";
}
?>