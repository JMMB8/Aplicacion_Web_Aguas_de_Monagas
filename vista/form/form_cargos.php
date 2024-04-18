<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CARGOS</title>
<link href="../../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/principal.js"></script>

<style type="text/css">
<!--
.Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	font-size: 16px;
	font-style: italic;
	color: #000000;
}
-->
</style>
</head>
<body>
<table border="0" align="center" width="100%" bgcolor="#990000">
<tr>
<td bgcolor="#000066" height="7"></td>
</tr>
</table>

<?php 
include("../../conexion_datos.php");

echo "
<table border='0' align='center' width='100%'>
<TR>
<TD width='30%'>
<A href='../page_cargos.php?empleo=3rbfe6ft6b&TYPE=REGISTROS' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Complete los datos del formulario, o edite los mismo, ya sea para registrar o modificar el registro del Cargo.
</TD>
</TR>
</table>
";
?>



<?php 

if(isset($_GET['Newmaq'])){
$IDENT_CARGO=$_GET['Newmaq'];
include("../../modelo/campos_cargos.php");

echo "
<form name='entrar' action='../../controlador/registrar_cargos.php' method='POST'>	
<input type='hidden' name='campo_unico' id='campo_unico' value='$ID_CARGO'>
<table align='center' border='0' width='50%' bgcolor='#CCCCFF'>
<TR>
<TD colspan='2' align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>REGISTRAR/EDITAR DATOS CARGOS</FONT></h2></TD>
</TR>
<TR>
<TD>
<input type='text' name='modelo' id='modelo' class='contact_form1' required placeholder='Descripci&oacute;n del cargo' onChange='javascript:this.value=this.value.toUpperCase();' value='$DESC_CARGO'>
</TD>

</TR>
<TR>
<TD align='center' colspan='2'>
<br><br>
<button class='botoneraCielo' name='REGISTRO' type='submit'  value='entrar'>$BOTON</button>
</TD>
</TR>
</table>
</form>

";
}
?>



</body>
</html>
