<?php
if(isset($_GET['listcte'])){
include("../conexion_datos.php");
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clientes</title>
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
</head>
<body>
<table border="0" align="center">
<tr>
<td><img src="../img/banner1.png" border="0" width="100%" height="80"></td>
</tr>
</table>
<center>
<h2>LISTADO DE LA CLIENTELA</h2>
</center>
<?php
$SQL1=mysql_query("SELECT * FROM cliente WHERE estatus='1' ORDER BY nombres ASC");
?>
<table align="center" class="tabla">
<tr bgcolor="#000000">
<td align="center"><font color="#FFFFFF"><b>N&deg;</b></font></td>
<td><font color="#FFFFFF"><b>CEDULA</b></font></td>
<td><font color="#FFFFFF"><b>NOMBRES</b></font></td>
<td><font color="#FFFFFF"><b>REPRESENTANTE</b></font></td>
<td><font color="#FFFFFF"><b>TLF.</b></font></td>
<td><font color="#FFFFFF"><b>DIRECCI&Oacute;N</b></font></td>
<td><font color="#FFFFFF"><b>CORREO</b></font></td>
</tr>
<?php
	$c=0;
	while($ROWS=mysql_fetch_row($SQL1)){
	$c++;
$CODIGO_CLIENTE=$ROWS[0];
include("../modelo/datosClientes.php");
	?>
<tr>
<td align="center"><b><?php echo "$c"; ?></b></td>
<td><b><?php echo "$CEDULA_CLIENTE"; ?></b></td>
<td><b><?php echo "$NOMBRE_CLIENTE"; ?></b></td>
<td><b><?php echo "$REPRES_CLIENTE"; ?></b></td>
<td><b><?php echo "$TLF_CLIENTE"; ?></b></td>
<td><b><?php echo "$DIRECC_CLIENTE"; ?></b></td>
<td><b><?php echo "$CORREO_CLIENTE"; ?></b></td>
</tr>
	<?php
	}
?>
</table>
<br><br>
<center>
<label><input type='button' name='imprimir' id='imprimir' value='Imprimir' onClick='window.print();'/></label>
</center>
</body>
</html>
<?php
}
?>