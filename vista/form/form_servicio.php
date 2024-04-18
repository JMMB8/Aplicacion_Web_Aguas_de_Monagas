<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SERVICIOS</title>
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
<A href='../page_servicios.php?empleo=3rbfe6ft6b&TYPE=REGISTROS' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Complete los datos del formulario, o edite los mismo, ya sea para registrar o modificar el registro del Servicio.
</TD>
</TR>
</table>
";
?>



<?php 

if(isset($_GET['Newmaq'])){
$IDENT_SERVICIO=$_GET['Newmaq'];
include("../../modelo/campos_servicio.php");
echo "<form name='entrar' action='../../controlador/registrar_servicio.php' method='POST'>	
<input type='hidden' name='campo_unico' id='campo_unico' value='$ID_SERVICIO'>
<table align='center' border='0' width='50%' bgcolor='#CCCCFF'>
<TR>
<TD align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>REGISTRAR/EDITAR DATOS DEL SERVICIO</FONT></h2></TD>
</TR>
<TR>
<TD><span class='Estilo1'>Descripci&oacute;n del servicio</span></TD>
</TR>
<TR>
<TD>
<input type='text' name='modelo' id='modelo' class='contact_form1' required placeholder='Descripci&oacute;n del servicio' onChange='javascript:this.value=this.value.toUpperCase();' value='$DESC_SERVICIO'>
</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Condici&oacute;n del servicio</span></TD>
</TR>
<TR>
<TD>
<select name='estatus' id='estatus' class='contact_combo' required=''>";

		if($ID_CONDICIONSERV==""){
		echo "<option value='$ID_CONDICIONSERV'>- $DES_CONDICIONSERV -</option>";
		echo "<option value='A'>-.  ACTIVO .</option>";
		echo "<option value='I'>-.  INACTIVO .</option>";
		}else{
		if($ID_CONDICIONSERV=="A"){
			echo "<option value='$ID_CONDICIONSERV'>- $DES_CONDICIONSERV -</option>";
		echo "<option value='I'>-.  INACTIVO .</option>";
		}else{
			echo "<option value='$ID_CONDICIONSERV'>- $DES_CONDICIONSERV -</option>";
		echo "<option value='A'>-.  ACTIVO .</option>";
		
		}
		}
	
	
echo "</select>
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
