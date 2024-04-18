<?php
if(isset($_GET['alquilar']) && isset($_GET['CTE'])){
include("../../conexion_datos.php");
$CODIGO_CLIENTE=$_GET['CTE'];
include("../../modelo/datosClientes.php");

$selex=mysql_query("SELECT * FROM alquiler");
$total_r=mysql_num_rows($selex);

$selex1=mysql_query("SELECT * FROM detalle_alquiler");
$total_r1=mysql_num_rows($selex1);

$CODIGO_ALQUILER=date("d").($total_r+1).date("m").($total_r1+5);
$fecha=date("d-m-Y");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ALQUILER DE MAQUINARIAS</title>
<link href="../../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/principal.js"></script>

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
<div class="capa">
<div>
<?php 


echo "
<table border='0' align='center' width='100%'>
<TR>
<TD>
<A href='../buscarforAlquiler.php?forAlq=3rbfe6ft6b&TYPE=MAQUINARIAS'><font color='RED'><B>Regresar</B></font></A>
</TD>
</TR>
</table>
";
?>

</div>
<div>

<?php 

echo "<div class='capa4'>

<form name='entrar' action='../agregar_alquiler.php' method='POST' target='admin'>
<input type='hidden' name='campo_unico' id='campo_unico' value=''>
<table align='center' border='0' width='100%' bgcolor='white'>
<TR>
<TD bgcolor='black' align='center' colspan='2'>
<font color='white'><b>ALQUILER DE MAQUINARIA</font></b>
</TD>
</TR>
<TR>
<TD>
<b>C&oacute;digo del alquiler</b>
</TD>
<TD>
<b>Fecha de registro</b>
</TD>
</TR>
<TR>
<TD>
<input type='text' name='codigo_alq' id='codigo_alq' class='contact_form' readonly value='$CODIGO_ALQUILER'>
</TD>
<TD>
<input type='text' name='fecha' id='fecha' class='contact_form' readonly  value='$fecha'>
</TD>
</TR>
<TR>
<TD>
<b>Cliente</b>
</TD>
<TD>
<b>Cedula/Rif</b>
</TD>
</TR>
<TR>
<TD>
<input type='text' name='CLIENTE' id='CLIENTE' class='contact_form1' readonly value='$NOMBRE_CLIENTE $REPRES_CLIENTE'>
</TD>
<TD>
<input type='text' name='CODI_CTE' id='CODI_CTE' class='contact_form' readonly value='$CEDULA_CLIENTE'>
</TD>
</TR>
<TR>
<TD>
<b>Maquinas</b>
</TD>
<TD>
<b>Tipo alquiler</b>
</TD>
</TR>
<TR>
<TD>";
include ("../../modelo/comboMaquinarias.php");
echo "</TD>
<TD>";
$ID_TIPALQ_MATERIAL="0";
$DES_TIPALQ_MATERIAL="Seleccione";
include ("../../modelo/comboTipo_alq.php");
echo "</TD>
</TR>
<TR>
<TD>
<b>Material</b>
</TD>
<TD>
<b>Cantidad</b>
</TD>
</TR>
<TR>
<TD>";
include ("../../modelo/comboMaterial.php");
echo "</TD>
<TD>
<input type='text' name='cantidad' id='cantidad' class='contact_form2' value='1' pattern='[0-9]+' title='Solo se aceptan n&uacute;meros' required>
</TD>
</TR>

<TR>
<TD align='right' colspan='2'>
<button class='submit' name='REGISTRO' type='submit'  value='entrar' >Agregar</button>
</TD>
</TR>
<TR>
<TD align='center' colspan='2'>
<iframe src='../agregar_alquiler.php' frameborder='0' scrolling='yes' name='admin' width='100%' height='280'></iframe>
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
