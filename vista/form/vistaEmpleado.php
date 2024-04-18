<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EMPLEADO</title>
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
<td background="../../img/cuadrito1.png" height="7"></td>
</tr>
</table>
<div class="capa">
<div>
<?php 
include("../../conexion_datos.php");


/*echo "
<table border='0' align='center' width='100%'>
<TR>
<TD>
<A href='../operacionempleado.php?empleo=3rbfe6ft6b&TYPE=PERSONAL' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
</TR>
</table>
";*/
?>

</div>
<div>

<?php 

if(isset($_GET['Newempleo'])){
$CODIGO_EMPLEADO=$_GET['Newempleo'];
include("../../modelo/datosPersonal.php");
$color="#F5F5F5";
echo "<div style='margin:0 auto; width: 710px; margin-top: 60px;'>
<div class='capa2'>
<div>

</div>
<div style='margin-left: 150px; margin-top: -55px;'>
</div>
<div style='margin-left: 250px; margin-top: 30px;'>
CONSULTAR DATOS DE CHOFER</div></div>

<div class='capa3'>
<br><br>
<form name='entrar' action='../centro.php' method='POST'>
<input type='hidden' name='campo_unico' id='campo_unico' value='$CEDULA_PERSONAL'>
<table align='center' border='0' width='50%'>
<TR bgcolor='$color'>
<TD><b>C&eacute;dula</b></TD><TD><b>Nombres</b></TD>
</TR>
<TR>
<TD>
$CEDULA_PERSONAL
</TD>
<TD>
$NOMBRE_PERSONAL
</TD>
</TR>
<TR bgcolor='$color'>
<TD><b>Apellidos</b></TD><TD><b>Sexo</b></TD>
</TR>
<TR>
<TD>
$APELLIDO_PERSONAL
</TD>
<TD>
 $DESC_SEXO ";
echo "
</TD>
</TR>
<TR bgcolor='$color'>
<TD><b>Fecha de naci.</b></TD><TD><b>E-mail</b></TD>
</TR>
<TR>
<TD>";

echo "$DDIANACI_PERSONAL-$MESNACI_PERSONAL-$DANIONACI_PERSONAL";

echo "</TD>
<TD>
$CORREO_PERSONAL
</TD>
</TR>
<TR bgcolor='$color'>
<TD><b>Tel&eacute;fono</b></TD><TD><b>Cargo</b></TD>
</TR>
<TR>
<TD>
$TLF_PERSONAL
</TD>
<TD>$DESC_CARGO</TD>
</TR>

<TR>
<TD align='right'><b>Estado:</b></TD><TD>$DES_CONDICION</TD>
</TR>
<TR>
<TD align='center' colspan='2'>
<br><br>
<button class='submit' name='REGISTRO' type='submit'  value='entrar' >SALIR</button>
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
