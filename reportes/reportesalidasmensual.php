<?php
include("../conexion_datos.php");
$mes=$_POST['mes_salida'];
$anios=$_POST['anio_salida'];
if($mes=="01"){
	$mont="Enero";
	$LIM_MES=31;
	}
	if($mes=="02"){
	$mont="Febrero";
	if($anio%4==0)
$LIM_MES=29;
else
$LIM_MES=28;
	}
	if($mes=="03"){
	$mont="Marzo";
	$LIM_MES=31;
	}
	if($mes=="04"){
		$mont="Abril";
			$LIM_MES=30;
		}
	if($mes=="05"){
	$mont="Mayo";
		$LIM_MES=31;
		}
	if($mes=="06"){
	$mont="Junio";
		$LIM_MES=30;
	}
	if($mes=="07"){
	$mont="Julio";
		$LIM_MES=31;
	}
	if($mes=="08"){
	$mont="Agosto";
		$LIM_MES=31;
	}
	if($mes=="09"){
	$mont="Septiembre";
		$LIM_MES=30;
	}
	if($mes=="10"){
	$mont="Octubre";
		$LIM_MES=31;
	}
	if($mes=="11"){
	$mont="Noviembre";
		$LIM_MES=30;
	}
	if($mes=="12"){
	$mont="Diciembre";
		$LIM_MES=31;
	}
 
  $meses=$anios."-".$mes;
  // echo "$meses"; 
  $SQL1=mysql_query("SELECT * FROM traslados WHERE fecha_salida LIKE '$meses%' ORDER BY fecha_salida ASC");
  $NUM=mysql_num_rows($SQL1);
  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REPORTE MENSUAL</title>
<style type="text/css">
.tablas{
width: 1200px;
border-collapse:collapse;
background-color: #FFFFFF; 
}
.tablas td{
/*padding:1px;*/
border:1px solid black;

}
</style>

<style media="print" type="text/css">
#imprimir {
visibility:hidden
}
</style>
</head>
<body>

<table border="0" align="center" width="80%">
<TR>
<TD><img src="../img/banner2.png" border="0" width="100%" height="80"></TD>
</TR>
</table>
<center>
<?php echo "<H3>SALIDAS EN EL MES: $mont DEL $anios TOTAL: $NUM</h3>"; ?>
</center>
<TABLE align="center"  class="tablas">
<tr background="../img/cuadrito1.png">
<td><font color="#FFFFFF"><b>TRANSPORTE</b></font></td>
<td align="center"><font color="#FFFFFF"><b>CHOFER</b></font></td>
<td align="center"><font color="#FFFFFF"><b>FECHA SALAIDA</b></font></td>
<td align="center"><font color="#FFFFFF"><b>ESTADO DESTINO</b></font></td>
<td align="center"><font color="#FFFFFF"><b>CIUDAD</b></font></td>
<td align="center"><font color="#FFFFFF"><b>TIPO DE CARGA.</b></font></td>
</tr>
<?php
	$c=0;
	while($ROWS=mysql_fetch_row($SQL1)){
	$c++;
if($c%2==0)
$color="#E9E9E9";
else
$color="#F5F5F5";

$ID_TRASLADOS=$ROWS[0];
include("../modelo/campos_traslados.php");
	?>
	<tr <?php echo "bgcolor='$color'"; ?>>

<td><b><?php echo "$CAMPOS_TRANSPOR[1] $CAMPOS_TRANSPOR[2] $CAMPOS_TRANSPOR[3]"; ?></b></td>
<td align="center"><b><?php echo "$CAMPOS_CHOFER[1] $CAMPOS_CHOFER[2]"; ?></b></td>
<td align="center"><b><?php echo "$ID_DIA_SALIDA-$ID_MES_SALIDA-$ID_ANIO_SALIDA"; ?></b></td>
<td align="center"><b><?php echo "$NOMBRE_ESTADO"; ?></b></td>
<td align="center"><b><?php echo "$NOMBRE_CIUDAD"; ?></b></td>
<td align="center"><b><?php echo "$NOMBRE_TIPOCARG"; ?></b></td>
</tr>
	<?php
	}
?>
</TABLE>
<br>
<center>
<label><input type='button' name='imprimir' id='imprimir' value='Imprimir' onClick='window.print();'/></label>
</center>
</body>
</html>
