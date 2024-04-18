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

<form name='entrar' action='../../modelo/reportemeses.php' method='POST' target="_blank">
<table align='center' border='0' width='50%'>
<TR>
<TD align='center'>
  <span class="Estilo1">Generar reporte por mes</span></TD>
</TR>
<TR>
<TD align='center'>
<?php
echo "<select name='mes_naci' id='mes_naci' class='contact_combo' required=''>";
echo "<option value=''>-.  Mes .</option>";
echo "<option value='01'>-.  Enero .</option>";
echo "<option value='02'>-.  Febrero .</option>";
echo "<option value='03'>-.  Marzo .</option>";
echo "<option value='04'>-.  Abril .</option>";
echo "<option value='05'>-.  Mayo .</option>";
echo "<option value='06'>-.  Junio .</option>";
echo "<option value='07'>-.  Julio .</option>";
echo "<option value='08'>-.  Agosto .</option>";
echo "<option value='09'>-.  Septiembre .</option>";
echo "<option value='10'>-.  Octubre .</option>";
echo "<option value='11'>-.  Noviembre .</option>";
echo "<option value='12'>-.  Diciembre .</option>";

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