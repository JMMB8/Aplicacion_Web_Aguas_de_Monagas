<?php
include("../conexion_datos.php");
$LA_TABLA="casos";
$ID_LA_TABLA="codigo";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RESUMEN</title>
<link rel="stylesheet" href="../css/estilosFormularioTablas.css">
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	color: #000000;
	font-weight: bold;
}

.Estilo2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
}

.Estilo3 {
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
<style type="text/css">
.tablas{
width: 800px;
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
<table align="center" width="60%" border="0">
<tr>
<td>
<img src="../images/im3.jpg" width="80" height="60" border="0">
</td>
<td align="right">
  <span class="Estilo1">ATENCI&Oacute;N AL CIUDADANO Y GESTI&Oacute;N COMUNITARIA</span></td>
</tr>
<tr>
<td colspan="2" align="center">
<h2>RESUMEN MENSUAL POR SERVICIOS</h2>
</td>
</tr>
</table>

<?php
if(isset($_GET['anios'])){
$anioActual=$_GET['anios'];	
}else
{
$anioActual=date("Y");
}
?>
<TABLE align="center" class="tablas">

<TR>
<TD colspan="5" align="center" bgcolor="#000000">
<span class="Estilo3"><?php echo "A&Ntilde;O: $anioActual"; ?></span>
</TD>
</TR>
<TR bgcolor="#0099FF">
<TD rowspan="2" align="center"><span class="Estilo1">MES</span></TD>
<?php
$servicios=mysql_query("SELECT * FROM  tipo_servicio WHERE condicion='A' ORDER BY descripcion ASC");
while($TIPOS=mysql_fetch_row($servicios)){
?>
<TD align="center" bgcolor="#000066"><span class="Estilo2"><?php echo "$TIPOS[1]"; ?></span></TD>
<?php
}
?>
<TD align="center">TOTAL</TD>
</TR>
<TR bgcolor="#CCCCCC">
<TD align="center"><span class="Estilo1">RECIBIDAS</span></TD>
<TD align="center"><span class="Estilo1">RECIBIDAS</span></TD>
<TD align="center"><span class="Estilo1">RECIBIDAS</span></TD>
<TD align="center"><span class="Estilo1">RECIBIDAS</span></TD>
</TR>
<?php

for($x=1;$x<=12;$x++){
if($x==1){
	$mont="ENERO";
	$LIM_MES=31;
	}
	if($x==2){
	$mont="FEBRERO";
	/*if($anio%4==0)
$LIM_MES=29;
else
$LIM_MES=28;*/
	}
	if($x==3){
	$mont="MARZO";
	$LIM_MES=31;
	}
	if($x==4){
		$mont="ABRIL";
			$LIM_MES=30;
		}
	if($x==5){
	$mont="MAYO";
		$LIM_MES=31;
		}
	if($x==6){
	$mont="JUNIO";
		$LIM_MES=30;
	}
	if($x==7){
	$mont="JULIO";
		$LIM_MES=31;
	}
	if($x==8){
	$mont="AGOSTO";
		$LIM_MES=31;
	}
	if($x==9){
	$mont="SEPTIEMBRE";
		$LIM_MES=30;
	}
	if($x==10){
	$mont="OCTUBRE";
		$LIM_MES=31;
	}
	if($x==11){
	$mont="NOVIEMBRE";
		$LIM_MES=30;
	}
	if($x==12){
	$mont="DICIEMBRE";
		$LIM_MES=31;
	}
	
	if($x<=9)
	$elmes="0".$x;
	else
	$elmes=$x;
	$El_mes=$anioActual."-".$elmes;

?>
<TR>
<TD bgcolor="#00CCFF"><span class="Estilo1"><?php echo "$mont"; ?></span></TD>
<?php
$CONT=0;
$servicios1=mysql_query("SELECT * FROM  tipo_servicio WHERE condicion='A' ORDER BY descripcion ASC");
while($TIPOS1=mysql_fetch_row($servicios1)){
	$senten=mysql_query("SELECT * FROM $LA_TABLA WHERE fecha LIKE '$El_mes%' AND id_tipo='$TIPOS1[0]'");
	$contador=mysql_num_rows($senten);
	
?>
<TD align="center"><B><?php echo "$contador"; ?></B></TD>
<?php
$CONT=$CONT+$contador;

}

?>
<TD align="center"><B><?php echo "$CONT"; ?></B></TD>
</TR>
<?php

}

?>
<TR bgcolor="#666699">
<TD align="right"><span class="Estilo1">TOTAL</span></TD>
<?php
$COUNTER=0;
//$anios=date("Y");
$servicios3=mysql_query("SELECT * FROM  tipo_servicio WHERE condicion='A' ORDER BY descripcion ASC");
while($TIPOS3=mysql_fetch_row($servicios3)){
$senten12=mysql_query("SELECT * FROM $LA_TABLA WHERE fecha LIKE '$anioActual%' AND id_tipo='$TIPOS3[0]'");
	$contadorres=mysql_num_rows($senten12);
?>
<TD align="center"><span class="Estilo1"><?php echo "$contadorres"; ?></span></TD>
<?php
$COUNTER=$COUNTER+$contadorres;
}
?>
<TD align="center"><span class="Estilo1"><?php echo "$COUNTER"; ?></span></TD>
</TR>
</TABLE>
<br>
<center>
<label><input type='button' name='imprimir' id='imprimir' value='Imprimir' onClick='window.print();'/></label>
</center>
</body>
</html>
