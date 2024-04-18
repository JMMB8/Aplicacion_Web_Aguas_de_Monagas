<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRAR EMPLEADO</title>
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
<A href='../page_personal.php?empleo=3rbfe6ft6b&TYPE=PERSONAL' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Consulta de los datos del personal de la empresa.
</TD>
</TR>
</table>
";
?>



<?php 

if(isset($_GET['Newempleo'])){
$CODIGO_EMPLEADO=$_GET['Newempleo'];
include("../../modelo/datosPersonal.php");

echo "

<table align='center' border='0' width='60%' bgcolor='#F2F2F2'>
<TR>
<TD colspan='2' align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>REGISTRO DEL  PERSONAL</FONT></h2></TD>

</TR>
<TR bgcolor='#DCDCDC'>
<TD><span class='Estilo1'>C&eacute;dula</span></TD>
<TD><span class='Estilo1'>Nombres</span></TD>
</TR>
<TR >
<TD>
$CEDULA_PERSONAL
</TD>
<TD>
$NOMBRE_PERSONAL
</TD>
</TR>
<TR bgcolor='#DCDCDC'>
<TD><span class='Estilo1'>Apellidos</span></TD>
<TD><span class='Estilo1'>Sexo</span></TD>
</TR>
<TR>
<TR>
<TD>
$APELLIDO_PERSONAL
</TD>
<TD>
$ID_SEXO
</TD>
</TR>
<TR bgcolor='#DCDCDC'>
<TD><span class='Estilo1'>Fecha de nacimiento</span></TD>
<TD><span class='Estilo1'>Correo electr&oacute;nico</span></TD>
</TR>
<TR>
<TR>
<TD>";


echo "$DIANACI_PERSONAL-$MESNACI_PERSONAL-$ANIONACI_PERSONAL";

echo "</TD>
<TD>
$CORREO_PERSONAL
</TD>
</TR>
<TR bgcolor='#DCDCDC'>
<TD><span class='Estilo1'>Tel&eacute;fono</span></TD>
<TD><span class='Estilo1'>Cargo</span></TD>
</TR>
<TR>
<TR>
<TD>
$TLF_PERSONAL
</TD>
<TD>$DESC_CARGO</TD>
</TR>

<TR>

<TD align='right'><span class='Estilo1'>Condici&oacute;n</span></TD>
<TD>
$DES_CONDICION</select></TD>
</TR>

</table>


";
}
?>


</body>
</html>
