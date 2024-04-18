<?php
include("../conexion_datos.php");
$LA_TABLA="cargos";
$ID_LA_TABLA="id_cargo";
$ORDEN_TABLA="descripcion";
//$parro=mysql_query("SELECT * FROM $LA_TABLA ORDER BY $ORDEN_TABLA ASC");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>cargos</title>
<link rel="stylesheet" href="../css/estilosFormularioTablas.css">
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
    x=confirm('REALMENTE DESEA ELIMINAR EL REGISTRO DEL CARGO.?');
	if(x)
	{ header("Location: page_cargos.php"); return true;}
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

<?php
if(isset($_GET['dropAlum'])){
$CODGELIM=$_GET['dropAlum'];
$borrar=mysql_query("DELETE FROM cargos WHERE id_cargo='$CODGELIM'");
echo "<script language='JavaScript' type='text/javascript'>
		alert('EL REGISTRO DEL CARGO FUE ELIMINADO');
	
		</script>";
}

 ?>
<table border="0" width="100%">
<TR>
<TD><span class="Estilo1">MODULO PARA LA GESTI&Oacute;N DE LOS CARGOS DEL PERSONAL</span></TD>
<TD align="right">
<A href="derecha.php" title="Salir">
<img src="../img/exit.jpg" width="90" height="60">
</A>
</TD>
</TR>
</table>
<?php


if(isset($_POST['boton_buscar'])){
$campo=$_POST['campo'];
$senten="SELECT * FROM $LA_TABLA WHERE $ORDEN_TABLA LIKE '%$campo%' ORDER BY $ORDEN_TABLA ASC";
}else
{
$senten="SELECT * FROM $LA_TABLA ORDER BY $ORDEN_TABLA ASC";}
$SQL1=mysql_query($senten);
	$total1=mysql_num_rows($SQL1);
?>
<TABLE align="center" border="1" width="80%">
<tr>
<td colspan="3">
<form name="fm1" action="page_cargos.php" method="POST">
<input type='text' class="contact_form1" name='campo' id='campo' placeholder="Descripci&oacute;n del cargo" required onChange="javascript:this.value=this.value.toUpperCase();">
<button class="submit" name="boton_buscar" type='submit'>Buscar</button>
</form>
</td>
<td align="right" colspan="3">
<A href="form/form_cargos.php?Newmaq=0&TYPE=CARGOS" title="REGISTRO NUEVO  CARGO">
<img src="../img/nuevos.png">
</A></td>
</tr>
<tr bgcolor="#000033">
<td><span class="Estilo2">N&deg;</span></td>
<td><span class="Estilo2">DESCRIPCI&Oacute;N DEL CARGO</span></td>
<td align="center" colspan="2"><span class="Estilo2">ACCI&Oacute;N</span></td>
</tr>
<?php
$c=0;
while($ROWS=mysql_fetch_row($SQL1)){
$c++;
if($c%2==0)
$color="#E9E9E9";
else
$color="#F5F5F5";
?>
<tr <?php echo "bgcolor='$color'"; ?>>
<td align="center"><span class='Estilo3'><?php echo "$c"; ?></span></td>
<td><span class='Estilo3'><?php echo "$ROWS[1]"; ?></span></td>
<td align='center'>
<?php echo "
<A href='form/form_cargos.php?Newmaq=$ROWS[0]&TYPE=CARGOS'>
<img src='../img/editae.png'>
</A>
"; ?>
</td>
<td align='center'>
<?php 
echo "
<A href='page_cargos.php?dropAlum=$ROWS[0]' title='Eliminar registro' onClick='return confirmar_eliminar3()'>
<img src='../img/eliminar.png'>
</A>";
?>
</td>
</tr>
<?php
}
?>

</TABLE>

</body>
</html>
