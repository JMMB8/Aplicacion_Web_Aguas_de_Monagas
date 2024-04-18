<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DERECHA</title>
<script language="JavaScript" type="text/javascript">
function confirmar_respaldo()
{
    x=confirm('REALMENTE DESEA REALIZAR RESPALDO A LA BASE DE DATOS.?');
	if(x)
	{ header("Location: respaldar.php"); return true;}
	else
	{ return false; }
}

function mensaje()
{
    x=confirm('LO SIENTO UD. NO TIENE PERMISO PARA ESTA OPERACIÓN?');
	if(x)
	{ header("Location: centro.php"); return true;}
	else
	{ return false; }
}
</script>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
	color: #000099;
	font-weight: bold;
}
-->

<!--
.Estilo2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	color: #000033;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php
	if(isset($_GET['backup'])){
	?>
	<TABLE align="center" border="0">
	<tr>
	<td colspan="3" align="center">
	<H2>PROCESANDO LOS DATOS DEL RESPALDO</H2>
	<img src="../img/reinicio.gif" width="100" height="100">
	<?php
	include("../controlador/respaldarBD.php");
	?>
	</td>
	</tr>
	</TABLE>
	<?php	
	}
	?>
</body>
</html>
