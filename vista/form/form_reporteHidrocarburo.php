<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
<title>REPORTES</title>
</head>
<body>

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
<CENTER>
<H3>GENERAR REPORTE SEG&Uacute;N EL TIPO DE HIDROCARBURO QUE SE TRANSPORTA</H3>
(Seleccione el Hidrocarburo)
</CENTER>

<table align="center" border="0">
<tr>
<td colspan="4">
<form name='entrar' action='../../reportes/reportetipohidrocarburo.php' method='POST' target="_blank">
<?php

echo "<select name='hidro' id='hidro' class='contact_combo' required=''>";
$hidro=mysql_query("SELECT * FROM material ORDER BY descripcion ASC");
while($FILES=mysql_fetch_row($hidro)){
echo "<option value='$FILES[0]'>-.  $FILES[2] .</option>";
}


echo "</select>";

?>
<button class='submit' name='bus' type='submit'  value='entrar'>GENERAR</button>
</form>
</td>
</tr>
</table>
</body>
</html>
