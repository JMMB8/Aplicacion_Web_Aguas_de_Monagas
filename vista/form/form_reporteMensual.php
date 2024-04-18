<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
<title>REPORTES</title>
</head>
<body>

<?php 
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
<CENTER>
<H3>GENERAR REPORTE DE LAS SALIDAS MENSUALES DE LOS TRANSPORTES</H3>
(Indique el mes y el a&ntilde;o)
</CENTER>

<table align="center" border="0">
<tr>
<td colspan="4">
<form name='entrar' action='../../reportes/reportesalidasmensual.php' method='POST' target="_blank">
<?php
/*$DIASALIDA_TRANSP="";
$DDIASALIDA_TRANSP="D&iacute;A";
echo "<select name='dia_salida' id='dia_salida' class='contact_combo' required=''>";
echo "<option value='$DIASALIDA_TRANSP'>-.  $DDIASALIDA_TRANSP .</option>";
for($x=1;$x<=31;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";*/
$MESSALIDA_TRANSP="";
$DMESSALIDA_TRANSP="Mes";
echo "<select name='mes_salida' id='mes_salida' class='contact_combo' required='0'>";
echo "<option value='$MESSALIDA_TRANSP'>-.  $DMESSALIDA_TRANSP .</option>";
echo "<option value='01'>-.  ENERO .</option>";
echo "<option value='02'>-.  FEBRERO .</option>";
echo "<option value='03'>-.  MARZO .</option>";
echo "<option value='04'>-.  ABRIL .</option>";
echo "<option value='05'>-.  MAYO .</option>";
echo "<option value='06'>-.  JUNIO .</option>";
echo "<option value='07'>-.  JULIO .</option>";
echo "<option value='08'>-.  AGOSTO .</option>";
echo "<option value='09'>-.  SEPTIEMBRE .</option>";
echo "<option value='10'>-.  OCTUBRE .</option>";
echo "<option value='11'>-.  NOVIEMBRE .</option>";
echo "<option value='12'>-.  DICIEMBRE .</option>";

echo "</select>";
$ANIOSALIDA_TRANSP=date("Y");
$DANIOSALIDA_TRANSP=$ANIOSALIDA_TRANSP;
echo "<select name='anio_salida' id='anio_salida' class='contact_combo' required='0'>";
echo "<option value='$ANIOSALIDA_TRANSP'>-. $DANIOSALIDA_TRANSP .</option>";
/*$anio_a=date("Y");
for($x=1920;$x<=$anio_a-10;$x++){

echo "<option value='$x'>-.  $x .</option>";
}*/
echo "</select>";
?>
<button class='submit' name='bus' type='submit'  value='entrar'>GENERAR</button>
</form>
</td>
</tr>
</table>
</body>
</html>
