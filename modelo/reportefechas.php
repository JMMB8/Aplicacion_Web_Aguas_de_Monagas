<?php
if(isset($_POST['REPORT'])){
include("../conexion_datos.php");
$dia_naci=$_POST['dia_naci'];
$mes_naci=$_POST['mes_naci'];
$anio_naci=$_POST['anio_naci'];

$FECHA_AMEN=$anio_naci."-".$mes_naci."-".$dia_naci;

$FECHA_LATIN=$dia_naci."-".$mes_naci."-".$anio_naci;

$buscar=mysql_query("SELECT * FROM alquiler WHERE fecha_reg LIKE '$FECHA_AMEN%'");
	$esta=mysql_num_rows($buscar);
	
	if($esta!=0){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reporte por fechas</title>
<style media="print" type="text/css">
#imprimir {
visibility:hidden
}
</style>
<style type="text/css">
.tabla{
width: 920px;
border-collapse:collapse;
background-color: #FFFFFF; 
}
.tabla td{
/*padding:1px;*/
border:1px solid black;

}

</style>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
}
-->

<!--
.Estilo2 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table border="0" align="center">
<tr>
<td><img src="../img/banner1.png" border="0" width="100%" height="80"></td>
</tr>
</table>
<center>
<h2>ALQUILERES REALIZADOS LA FECHA <?php echo "$FECHA_LATIN"; ?></h2>
</center>
<?php
while($CAMPOS_ALQUILER=mysql_fetch_row($buscar)){
$consul_cte=mysql_query("SELECT * FROM cliente WHERE codigo='$CAMPOS_ALQUILER[3]'");
$CAMPOS_CLIENTE=mysql_fetch_row($consul_cte);
?>
<table align="center" class="tabla">
<tr>
<td><b>N&uacute;mero</b></td><td><?php echo "$CAMPOS_ALQUILER[1]"; ?></td>
<td align="right"><b>Fecha</b></td><td><?php echo "$CAMPOS_ALQUILER[2]"; ?></td>
</tr>

<tr>
<td><b>Cliente</b></td><td><?php echo "$CAMPOS_CLIENTE[3] $CAMPOS_CLIENTE[4]"; ?></td>
<td align="right"><b>Cedula</b></td><td><?php echo "$CAMPOS_CLIENTE[1]"; ?></td>
</tr>
<tr>
<td colspan="4">
<?php
	$MOSTRAR=mysql_query("SELECT * FROM detalle_alquiler WHERE cod_alq='$CAMPOS_ALQUILER[1]'");
	//$n=mysql_num_rows($MOSTRAR);
		
		?>
<TABLE align="center" class="tabla">
		<TR bgcolor="#000000">
		<TD><span class="Estilo1">C&Oacute;DIGO</span></TD>
		<TD><span class="Estilo1">MAQUINA</span></TD>
		<TD><span class="Estilo1">TIPO ALQUILER</span></TD>
		<TD><span class="Estilo1">MATERIAL</span></TD>
		<TD align="center"><span class="Estilo1">CANTIDAD</span></TD>
		<TD align="center"><span class="Estilo1">PRECIO</span></TD>
		<TD align="center"><span class="Estilo1">SUB TOTAL</span></TD>
		</TR>
		<?php
		while($CAMP=mysql_fetch_row($MOSTRAR)){
	$indent_maq=$CAMP[2];
		include("../modelo/datosMaquinas.php");
		$query =mysql_query("SELECT * FROM tipo_alq WHERE id_tip_alq='$CAMP[3]'");
		$talq=mysql_fetch_row($query);
		
		$CODIGO_MATERIAL=$CAMP[4];
		include("../modelo/datosMaterial.php");
		?>
		<TR>
		<TD><span class="Estilo2"><?php echo "$CODIGO_MAQUINA"; ?></span></TD>
		<TD><span class="Estilo2"><?php echo "$MARCA_MAQUINA  $MODELO_MAQUINA"; ?></span></TD>
		<TD><span class="Estilo2"><?php echo "$talq[1]"; ?></span></TD>
		<TD><span class="Estilo2"><?php echo "$DESCRIPCION_MATERIAL ($DES_MEDIDA_MATERIAL)"; ?></span></TD>
		<TD align="center"><span class="Estilo2"><?php echo "$CAMP[5]"; ?></span></TD>
		<TD align="center"><span class="Estilo2"><?php echo "$CAMP[6]"; ?></span></TD>
		<TD align="center"><span class="Estilo2"><?php echo "$CAMP[7]"; ?></span></TD>
		</TR>
		
		<?php
		
		}
		
		?>
		<TR>
		
		<TD align="right" colspan="6"><b>Total</b></TD>
		<TD align="center"><?php echo "$CAMPOS_ALQUILER[5]"; ?></TD>
		
		</TR>
		</TABLE>
		
</td>
</tr>
</table>
<br><br>
<?php
}
?>

<br><br>
<center>
<label><input type='button' name='imprimir' id='imprimir' value='Imprimir' onClick='window.print();'/></label>
</center>

</body>
</html>
<?php
}else{
echo "<center><h2>NO EXISTEN REGISTRO PARA LA FECHA: $FECHA_LATIN</h2></center>";
}
}
?>