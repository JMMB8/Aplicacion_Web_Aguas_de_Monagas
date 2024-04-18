<?php
include("../conexion_datos.php");
?>


<?php

if(isset($_GET['dropAlum'])){
$CODGELIM=$_GET['dropAlum'];
$borrar=mysql_query("DELETE FROM personal WHERE cedula='$CODGELIM'");
echo "<script language='JavaScript' type='text/javascript'>
		alert('EL REGISTRO DEL EMPLEADO FUE ELIMINADO');
		</script>";
}

	
 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PERSONAL</title>
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
    x=confirm('REALMENTE DESEA ELIMINAR EL REGISTRO DEL EMPLEADO.?');
	if(x)
	{ header("Location: page_personal.php"); return true;}
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
<table border="0" width="100%">
<TR>
<TD><span class="Estilo1">MODULO DEL PERSONAL</span></TD>
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
$senten="SELECT * FROM personal WHERE nombres LIKE '%$campo%' OR apellidos LIKE '%$campo%' ORDER BY nombres ASC";
}else
{
$senten="SELECT * FROM personal ORDER BY nombres ASC";
}
$SQL1=mysql_query($senten);
	$total1=mysql_num_rows($SQL1);
?>
<TABLE align="center" border="1" width="90%">
<tr>
<td colspan="5">
<form name="fm1" action="page_personal.php" method="POST">
<input type='text' class="contact_form1" name='campo' id='campo' placeholder="Nombre de la persona" required onChange="javascript:this.value=this.value.toUpperCase();">
<button class="submit" name="boton_buscar" type='submit'>Buscar</button>
</form>
</td>
<td align="right" colspan="4">
<A href="form/formulario_empleado.php?Newempleo=fdh57hhfdghghuytdhg56546hgfghdfg">
<img src="../img/nuevos.png">
</A>
</td>
</tr>
<?php
if(isset($_POST['boton_buscar'])){
?>
<tr bgcolor="#000033">
<td><span class="Estilo2">CEDULA</span></td>
<td><span class="Estilo2">NOMBRES Y APELLIDOS</span></td>
<td align="center"><span class="Estilo2">SEXO</span></td>
<td align="center"><span class="Estilo2">TEL&Eacute;FONO</span></td>
<td align="center"><span class="Estilo2">CARGO</span></td>
<td align="center"><span class="Estilo2">CONDICI&Oacute;N</span></td>
<td align="center" colspan="3"><span class="Estilo2">ACCI&Oacute;N</span></td>
</tr>
<?php
	$c=0;
	while($ROWS=mysql_fetch_row($SQL1)){
	$c++;
if($c%2==0)
$color="#E9E9E9";
else
$color="#F5F5F5";

$CODIGO_EMPLEADO=$ROWS[0];
include("../modelo/datosPersonal.php");
	?>
	<tr <?php echo "bgcolor='$color'"; ?>>
<td align="center"><b><?php echo "$CEDULA_PERSONAL"; ?></b></td>
<td><b><?php echo "$NOMBRE_PERSONAL $APELLIDO_PERSONAL"; ?></b></td>
<td align="center"><b><?php echo "$DESC_SEXO"; ?></b></td>
<td align="center"><b><?php echo "$TLF_PERSONAL"; ?></b></td>
<td align="center"><b><?php echo "$DESC_CARGO"; ?></b></td>
<td align="center"><b><?php echo "$DES_CONDICION"; ?></b></td>
<td align="center"><?php echo "
<A href='./form/formulario_empleado.php?Newempleo=$ROWS[0]' title='Editar datos'>
<img src='../img/editae.png'>
</A>
";
 ?></td>
<td align="center"><?php 
echo "
<A href='page_personal.php?dropAlum=$ROWS[0]' title='Eliminar registro' onClick='return confirmar_eliminar3()'>
<img src='../img/eliminar.png'></A>";

 ?></td>
 <td align="center"><?php echo "
<A href='./form/tablaDatosPersonal.php?Newempleo=$ROWS[0]' title='Ver registro'>
<img src='../img/b_view.png'>
</A>
";
 ?></td>
</tr>

<?php
}
}
?>
</TABLE>

</body>
</html>
