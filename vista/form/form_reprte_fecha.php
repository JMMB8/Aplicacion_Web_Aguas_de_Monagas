<?php
{
?>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 16px;
	font-weight: bold;
	color: #990000;
}
-->
</style>

<form name='entrar' action='../../modelo/reportefechas.php' method='POST' target="_blank">
<table align='center' border='0' width='50%'>
<TR>
<TD align='center'>
  <span class="Estilo1">Generar reporte por fecha</span></TD>
</TR>
<TR>
<TD align='center'>
<?php


echo "<select name='dia_naci' id='dia_naci' class='contact_combo' required=''>";
echo "<option value=''>-.  D&iacute;a .</option>";
for($x=1;$x<=31;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";
echo "<select name='mes_naci' id='mes_naci' class='contact_combo' required=''>";
echo "<option value=''>-.  Mes .</option>";
for($x=1;$x<=12;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";
$anio_a=date("Y");
echo "<select name='anio_naci' id='anio_naci' class='contact_combo'>";
echo "<option value='$anio_a'>-. $anio_a .</option>";

for($x=($anio_a-1);$x<=($anio_a-1);$x++){

echo "<option value='$x'>-.  $x .</option>";
}
echo "</select>";
?>
</TD>
</TR>

<TR>
<TD align='center'>
<br>
<button class='submit' name='REPORT' type='submit'  value='entrar' >Generar reporte</button>
</TD>
</TR>
</table>
</form>
<?php
}
?>