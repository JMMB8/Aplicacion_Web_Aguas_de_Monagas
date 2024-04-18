<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IZQUIERDA</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	color: #FFFF00;
	font-weight: bold;
}
-->

<!--
.Estilo2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#0033CC">
<table border="0">
<tr>
<td>
  <span class="Estilo1">PARROQUIAS</span></td>
</tr>
<?php
include("../conexion_datos.php");
$parro=mysql_query("SELECT * FROM parroquia WHERE condicion='A'");
$c=0;
while($datos=mysql_fetch_row($parro)){
$c++;
$senten=mysql_query("SELECT * FROM casos WHERE id_parroquia='$datos[0]'");
	$REPARADAS=mysql_num_rows($senten);
?>
<tr>
<td>
  <span class="Estilo2"><?php echo "$datos[1] ($REPARADAS)"; ?></span></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
