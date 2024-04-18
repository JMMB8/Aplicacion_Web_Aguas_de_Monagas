<?php
include("../conexion_datos.php");
$LA_TABLA="casos";
$ID_LA_TABLA="codigo";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RESUMEN POR PARROQUIAS</title>
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
width: 900px;
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
<table border="0" width="100%">
<TR>
<TD><span class="Estilo1">RESUMEN POR PARROQUIAS Y  SERVICIOS</span></TD>
<TD align="right">
<A href="../vista/derecha.php" title="Salir">
<img src="../img/exit.jpg" width="90" height="60">
</A>
</TD>
</TR>
</table>

<?php
if(isset($_POST['boton_buscar'])){
$anioActual=$_POST['anio'];
$mes=$_POST['mes'];
$id_parroq=$_POST['id_parroq'];
$ELMES=$anioActual."-".$mes;
$IDENT_PARROQUIA=$id_parroq;
include("../modelo/campos_parroquia.php");
}else
{
$anioActual=date("Y");
$mes=date("m");
$DESC_PARROQUIA="";
}

if($mes=="01"){
	$mont="ENERO";
	$LIM_MES=31;
	}
	if($mes=="02"){
	$mont="FEBRERO";

	}
	if($mes=="03"){
	$mont="MARZO";
	$LIM_MES=31;
	}
	if($mes=="04"){
		$mont="ABRIL";
			$LIM_MES=30;
		}
	if($mes=="05"){
	$mont="MAYO";
		$LIM_MES=31;
		}
	if($mes=="06"){
	$mont="JUNIO";
		$LIM_MES=30;
	}
	if($mes=="07"){
	$mont="JULIO";
		$LIM_MES=31;
	}
	if($mes=="08"){
	$mont="AGOSTO";
		$LIM_MES=31;
	}
	if($mes=="09"){
	$mont="SEPTIEMBRE";
		$LIM_MES=30;
	}
	if($mes=="10"){
	$mont="OCTUBRE";
		$LIM_MES=31;
	}
	if($mes=="11"){
	$mont="NOVIEMBRE";
		$LIM_MES=30;
	}
	if($mes=="12"){
	$mont="DICIEMBRE";
		$LIM_MES=31;
	}
?>
<TABLE align="center" class="tablas">
<TR>
<TD colspan="8">
<form name="entrar" action="reporteparroquias.php" method="POST">
<?php
$ID_PARROQ_SECTOR="";
$SELECT_PARROQ_SECTOR="Parroquia";
include("../modelo/comboParroquias.php");
?>

<?php
echo "<select name='mes' id='mes' class='contact_combo' required=''>";
		echo "<option value=''>- Mes -</option>";
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
?>
<?php
$dater=date("Y");
echo "<select name='anio' id='anio' class='contact_combo' required=''>";
		echo "<option value='$dater'>- $dater -</option>";
		for($j=date("Y")-1;$j>=date("Y")-2;$j--)
		echo "<option value='$j'>- $j -</option>";
	echo "</select>";
?>
<button class="botoneraCielo" name="boton_buscar" id="boton_buscar" type='submit' value='entrar'>Consultar</button>
</form>
</TD>
<TD align="right" colspan="3">
<?php
if(isset($_POST['boton_buscar'])){
echo "<A href='reporteparroquiasimpress.php?token=vcxbcfhd64577fdh&mes=$mes&parroq=$id_parroq&tip=bc5yyvc&anios=$anioActual&rows=fdsfbsf748hdggfdhg7t5yhfh&fis=dvfbvxbcvbxvcbveyr4yrgfhdh' target='_blank'>
<img src='../img/b_print.png' width='30' height='26'>
</A>";
}
?>
</TD>
</TR>
<TR>
<TD colspan="11" align="center" bgcolor="#000000">
<span class="Estilo3"><?php echo "PARROQUIA: $DESC_PARROQUIA &nbsp;&nbsp;&nbsp;&nbsp; $mont DEL  $anioActual"; ?></span>
</TD>
</TR>
<?php
if(isset($_POST['boton_buscar'])){
?>
<TR bgcolor="#0099FF">
<TD rowspan="2" align="center"><span class="Estilo1">SECTORES</span></TD>
<?php
$servicios=mysql_query("SELECT * FROM  tipo_servicio WHERE condicion='A' ORDER BY descripcion ASC");
$C=0;
while($TIPOS=mysql_fetch_row($servicios)){
$C++;
if($C%2==0)
$color="#CC9900";
else
$color="#99CC33";
?>
<TD align="center" <?php echo "bgcolor='$color'"; ?> colspan="3"><span class="Estilo2"><?php echo "$TIPOS[1]"; ?></span></TD>
<?php
}
?>
<TD align="center">TOTAL</TD>
</TR>
<TR bgcolor="#CCCCCC">
<TD align="center"><span class="Estilo1">R</span></TD>
<TD align="center"><span class="Estilo1">S/R</span></TD>
<TD align="center" bgcolor="#00CCFF"><span class="Estilo1">T</span></TD>
<TD align="center"><span class="Estilo1">R</span></TD>
<TD align="center"><span class="Estilo1">S/R</span></TD>
<TD align="center" bgcolor="#00CCFF"><span class="Estilo1">T</span></TD>
<TD align="center"><span class="Estilo1">R</span></TD>
<TD align="center"><span class="Estilo1">S/R</span></TD>
<TD align="center" bgcolor="#00CCFF"><span class="Estilo1">T</span></TD>
<TD align="center"><span class="Estilo1">RECIBIDAS</span></TD>
</TR>
<?php
$LOSSECTORE=mysql_query("SELECT * FROM sectores WHERE id_parroquia='$id_parroq' ORDER BY nombre ASC");
while($DATOS_SECTOR=mysql_fetch_row($LOSSECTORE)){

	
	/*if($x<=9)
	$elmes="0".$x;
	else
	$elmes=$x;
	$El_mes=$anioActual."-".$elmes;*/

?>
<TR>
<TD bgcolor="#00CCFF"><span class="Estilo1"><?php echo "$DATOS_SECTOR[1]"; ?></span></TD>
<?php
$CONT=0;
$servicios1=mysql_query("SELECT * FROM  tipo_servicio WHERE condicion='A' ORDER BY descripcion ASC");
while($TIPOS1=mysql_fetch_row($servicios1)){
	$senten=mysql_query("SELECT * FROM $LA_TABLA WHERE fecha LIKE '$ELMES%' AND id_parroquia='$id_parroq' AND id_sector='$DATOS_SECTOR[0]' AND id_tipo='$TIPOS1[0]' AND fecha_rep!='0000-00-00'");
	$REPARADAS=mysql_num_rows($senten);
	
	$senten1=mysql_query("SELECT * FROM $LA_TABLA WHERE fecha LIKE '$ELMES%' AND id_parroquia='$id_parroq' AND id_sector='$DATOS_SECTOR[0]' AND id_tipo='$TIPOS1[0]' AND fecha_rep='0000-00-00'");
	$SINREPARAR=mysql_num_rows($senten1);
	$TTAL=$REPARADAS+$SINREPARAR;
	
	/*$SQL_PARQ=mysql_query("SELECT * FROM $LA_TABLA WHERE fecha LIKE '$ELMES%' AND id_parroquia='$id_parroq' AND id_tipo='$TIPOS1[0]' AND fecha_rep!='0000-00-00'");
	$TOTALREPARADAS=mysql_num_rows($SQL_PARQ);*/
?>
<TD align="center"><B><?php echo "$REPARADAS"; ?></B></TD>
<TD align="center"><B><?php echo "$SINREPARAR"; ?></B></TD>
<TD align="center" bgcolor="#00CCFF"><B><?php echo "$TTAL"; ?></B></TD>
<?php
$CONT=$CONT+$TTAL;

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
$FECHA_SIN_REP="0000-00-00";
/*$LOSSECTORE1=mysql_query("SELECT * FROM sectores WHERE id_parroquia='$id_parroq' ORDER BY nombre ASC");
while($DATOS_SE1=mysql_fetch_row($LOSSECTORE1)){*/
$servicios3=mysql_query("SELECT * FROM  tipo_servicio WHERE condicion='A' ORDER BY descripcion ASC");
while($TIPOS3=mysql_fetch_row($servicios3)){

$sentenA=mysql_query("SELECT * FROM casos WHERE fecha LIKE '$ELMES%' AND id_parroquia='$id_parroq' AND id_tipo='$TIPOS3[0]' AND fecha_rep!='$FECHA_SIN_REP'");
	$REPARADAS1=mysql_num_rows($sentenA);
	
	$senten1A=mysql_query("SELECT * FROM casos WHERE fecha LIKE '$ELMES%' AND id_parroquia='$id_parroq' AND id_tipo='$TIPOS3[0]' AND fecha_rep='0000-00-00'");
	
	$SINREPARAR1=mysql_num_rows($senten1A);
	$TTAL1=$REPARADAS1+$SINREPARAR1;
?>
<TD align="center"><span class="Estilo1"><?php echo "$REPARADAS1"; ?></span></TD>
<TD align="center"><span class="Estilo1"><?php echo "$SINREPARAR1"; ?></span></TD>
<TD align="center"><span class="Estilo1"><?php echo "$TTAL1"; ?></span></TD>
<?php
$COUNTER=$COUNTER+$TTAL1;
}
//}
?>
<TD align="center"><span class="Estilo1"><?php echo "$COUNTER"; ?></span></TD>
</TR>
<?php
}
?>
</TABLE>
</body>
</html>
