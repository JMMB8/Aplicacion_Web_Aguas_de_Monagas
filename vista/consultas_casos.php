<?php
include("../conexion_datos.php");
$LA_TABLA="casos";
$ID_LA_TABLA="codigo";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CONSULTAR</title>
<link href="../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/estilosFormularioTablas.css">
 <script language="JavaScript" type="text/JavaScript" src="../js/funciones.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../js/xhr.js"></script>
<script language="JavaScript" type="text/javascript">
 
function mensaje()
{
    x=confirm('LO SIENTO UD. NO TIENE PERMISO PARA ESTA OPERACIÓN?');
	if(x)
	{ header("Location: centro.php"); return true;}
	else
	{ return false; }
}

	function confirmar_eliminar3()
{
    x=confirm('REALMENTE DESEA ELIMINAR EL REGISTRO.?');
	if(x)
	{ header("Location: consultas_casos.php"); return true;}
	else
	{ return false; }
}

	
</script>
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
<div id="pdvsaCapaTransparente" onDblClick="modalCargando(0);"></div>

	<!--Grande-->
	<div id="pdvsaCargaGrande" onDblClick="modalCargaGrande(0);"></div>
	
	<!--Mediano-->
	<div id="pdvsaCargaMediana" onDblClick="modalCargaMediano(0);"></div>
	
	<!--Pequeno-->
	<div id="pdvsaCargaPequena" onDblClick="modalCargaPequeno(0);"></div>
<?php
if(isset($_GET['dropAlum'])){
$CODGELIM=$_GET['dropAlum'];
$borrar=mysql_query("DELETE FROM $LA_TABLA WHERE $ID_LA_TABLA='$CODGELIM'");
echo "<script language='JavaScript' type='text/javascript'>
		alert('EL REGISTRO HA SIDO ELIMINADO');
	
		</script>";
}

 ?>
<table border="0" width="100%">
<TR>
<TD><span class="Estilo1">MODULO PARA LA CONSULTAS DE CASOS</span></TD>
<TD align="right">
<A href="derecha.php" title="Salir">
<img src="../img/exit.jpg" width="90" height="60">
</A>
</TD>
</TR>
</table>
<?php
if(isset($_POST['boton_buscar'])){
$mes=$_POST['mes'];
$id_parroq=$_POST['id_parroq'];
//$id_sector=$_GET['id_sector'];
// AND id_sector='$id_sector'
	$El_mes=date("Y")."-".$mes;
	$senten="SELECT * FROM $LA_TABLA WHERE fecha LIKE '$El_mes%' AND id_parroquia='$id_parroq' ORDER BY fecha DESC";
	
}else
{
$senten="SELECT * FROM $LA_TABLA ORDER BY fecha ASC";
}
$SQL1=mysql_query($senten);
	$total1=mysql_num_rows($SQL1);
?>
<TABLE align="center" border="1" width="90%">
<tr>
<td colspan="9">
<span class="Estilo3">Indique el mes y la parroquia, para consultar los casos y realizar su edici&oacute;n o eliminaci&oacute;n.</span>
</td>
</tr>
<form name="entrar" action="consultas_casos.php" method="POST">
<tr>
<td colspan="2">
 
<!--<form name="fm1" action="page_reparaciones.php" method="POST">-->

Mes:
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
</td>
<td colspan="2">
Parroquia: 
<?php
$ID_PARROQ_CTE="";
$SELECT_PARROQ_CTE="Seleccione";
include("../modelo/comboParroquias_filtro.php");
?>
</td>


<!--<td colspan="2">

<?php
/*$ID_SECTOR_CTE="";
$SELECT_SECTOR_CTE="Seleccione";
echo "<div id='filtroSectores'>
Sector: <select name='id_sectores' id='id_sectores' class='contact_combo'>";
		echo "<option value='$ID_SECTOR_CTE'>-. $SELECT_SECTOR_CTE .</option>";
	echo "</select>
</div>";*/
?>
</td>-->
<td colspan="5">
<button class="botoneraCielo" name="boton_buscar" id="boton_buscar" type='submit' value='entrar'>Buscar</button>
</form>
</td>
</tr>

<?php
if(isset($_POST['boton_buscar'])){
	if($total1!=0){
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
 // echo "$mont";
  $IDENT_PARROQUIA=$id_parroq;
  include("../modelo/campos_parroquia.php");

/*$IDENT_SECTOR=$id_sector;
include("../modelo/campos_sectores.php");*/
echo "
<tr>
<td colspan='2'>
 <span class='Estilo1'>MES: </span>$mont
</td>
<td colspan='7'>
 <span class='Estilo1'>PARROQUIA: </span>$DESC_PARROQUIA
</td>

</tr>
";
/*<td colspan='4'>
<span class='Estilo1'>SECTOR: </span>$DESC_SECTOR
</td>*/	
?>
<tr bgcolor="#000033">
<td align="center"><span class="Estilo2">N&deg; CASO</span></td>
<td><span class="Estilo2">CLIENTE</span></td>
<td><span class="Estilo2">CEDULA</span></td>
<td align="center"><span class="Estilo2">SERVICIO</span></td>
<td align="center"><span class="Estilo2">DESCRIPCI&Oacute;N</span></td>
<td align="center"><span class="Estilo2">FECHA PROGRAMADA</span></td>
<td align="center"><span class="Estilo2">FECHA REPARACI&Oacute;N</span></td>
<td align="center"><span class="Estilo2">SECTOR</span></td>
<td align="center" colspan="2"><span class="Estilo2">ACCI&Oacute;N</span></td>
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
	$IDENT_SECTOR=$datos[3];
include("../modelo/campos_sectores.php");
?>
<tr <?php echo "bgcolor='$color'"; ?>>
<td align="center"><span class='Estilo3'><?php echo "$datos[0]"; ?></span></td>
<td><span class="Estilo3"><?php echo "$NOMBRE_CLIENTE"; ?></span></td>
<td><span class="Estilo3"><?php echo "$CEDULA_CLIENTE"; ?></span></td>

<td align="center"><span class="Estilo3"><?php echo "$DESC_SERVICIO"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$datos[6]"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$dia_p-$mes_p-$year_p"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$dia_p1-$mes_p1-$year_p1"; ?></span></td>
<td align="center"><span class="Estilo3"><?php echo "$DESC_SECTOR"; ?></span></td>

<td align="center">
<?php echo "
<A href='form/formulario_editarcaso.php?arrowscasos=$datos[0]&TYPE=CASOS' title='EDITAR REGISTRO'>
<img src='../img/editae.png'>
</A>
"; ?>
</td>
<td align="center">
<?php 
echo "
<A href='consultas_casos.php?dropAlum=$datos[0]' title='Eliminar registro' onClick='return confirmar_eliminar3()'>
<img src='../img/eliminar.png'>
</A>";
?>
</td>

</tr>
<?php
}
}else{
echo "<CENTER><H2>NO EXISTEN REGISTROS</H2></CENTER>";
}
}
?>
</TABLE>

</body>
</html>
