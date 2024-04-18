<?php
include("../conexion_datos.php");
$LA_TABLA="casos";
$ID_LA_TABLA="codigo";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DERECHA</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: italic;
}
.Estilo2 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
	color: #CCFFFF;
}

.Estilo3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
	color: #000000;
}
-->
</style>
</head>

<body>
<table align="center" border="0" width="80%">
<TR>
<TD><span class="Estilo1">CASOS POR REPARAR</span></TD>
</TR>
</table>
<?php
$SQL1=mysql_query("SELECT * FROM $LA_TABLA WHERE fecha_rep='0000-00-00' ORDER BY fecha ASC");
	$total1=mysql_num_rows($SQL1);
?>
<TABLE align="center" border="1" width="90%">
<tr bgcolor="#000033">
<td align="center"><span class="Estilo2">N&deg; CASO</span></td>
<td><span class="Estilo2">CLIENTE</span></td>
<td align="center"><span class="Estilo2">SERVICIO</span></td>
<td align="center"><span class="Estilo2">DESCRIPCI&Oacute;N</span></td>
<td align="center"><span class="Estilo2">FECHA PROGRAMADA</span></td>
<td align="center"><span class="Estilo2">FECHA REPARACI&Oacute;N</span></td>
<td align="center"><span class="Estilo2">PARROQUIA</span></td>
<td align="center"><span class="Estilo2">SECTOR</span></td>

</tr>

<?php
$c=0;
while($datos=mysql_fetch_row($SQL1)){
$c++;

if($c%2==0)
$color="#E9E9E9";
else
$color="#F5F5F5";
$CODIGO_CLIENTE=$datos[4];
include("../modelo/datosClientes.php");
$IDENT_SERVICIO=$datos[5];
include("../modelo/campos_servicio.php");

	$dia_p=substr($datos[8], 8, 2);
	$mes_p=substr($datos[8], 5, 2);
	$year_p=substr($datos[8], 0, 4);
	
	
	$dia_p1=substr($datos[9], 8, 2);
	$mes_p1=substr($datos[9], 5, 2);
	$year_p1=substr($datos[9], 0, 4);
	$IDENT_PARROQUIA=$datos[2];
include("../modelo/campos_parroquia.php");
	
	$IDENT_SECTOR=$datos[3];
include("../modelo/campos_sectores.php");
?>
<tr <?php echo "bgcolor='$color'"; ?>>
<td align="center"><span class='Estilo3'><?php echo "$datos[0]"; ?></span></td>
<td><span class="Estilo3"><?php echo "$NOMBRE_CLIENTE"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$DESC_SERVICIO"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$datos[6]"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$dia_p-$mes_p-$year_p"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$dia_p1-$mes_p1-$year_p1"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$DESC_PARROQUIA"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$DESC_SECTOR"; ?></span></td>
</tr>
<?php
}

//}
?>
</TABLE>
</body>
</html>
