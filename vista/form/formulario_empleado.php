<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRAR EMPLEADO</title>
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
<td bgcolor="#000066" height="7" ></td>
</tr>
</table>
<?php 
include("../../conexion_datos.php");
echo "
<table border='0' align='center' width='100%'>
<TR>
<TD width='30%'>
<A href='../page_personal.php?empleo=3rbfe6ft6b&TYPE=PERSONAL' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
<TD  align='right'>
Complete los datos del formulario, o edite los mismo, ya sea para registrar o modificar los registros.
</TD>
</TR>
</table>
";
?>



<?php 

if(isset($_GET['Newempleo'])){
$CODIGO_EMPLEADO=$_GET['Newempleo'];
include("../../modelo/datosPersonal.php");

echo "
<form name='entrar' action='../../controlador/registrar_empleado.php' method='POST'>
<input type='hidden' name='campo_unico' id='campo_unico' value='$CEDULA_PERSONAL'>
<table align='center' border='0' width='60%' bgcolor='#CCCCFF'>
<TR>
<TD colspan='2' align='center' bgcolor='#000000'><h2><FONT color='#FFFFFF'>REGISTRO DEL  PERSONAL</FONT></h2></TD>
</TR>
<TR>
<TD><span class='Estilo1'>C&eacute;dula</span></TD>
<TD><span class='Estilo1'>Nombres</span></TD>
</TR>
<TR>
<TD>
<input type='text' name='cedula' id='cedula' class='contact_form' required placeholder='Cedula' value='$CEDULA_PERSONAL' maxlength='8'>
</TD>
<TD>
<input type='text' name='nombre' id=n'nombre' class='contact_form1' required placeholder='Nombres' onChange='javascript:this.value=this.value.toUpperCase();' value='$NOMBRE_PERSONAL' pattern='[A-Za-z]+' title='Solo se aceptan letras'>
</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Apellidos</span></TD>
<TD><span class='Estilo1'>Sexo</span></TD>
</TR>
<TR>
<TR>
<TD>
<input type='text' name='apellido' id='apellido' class='contact_form1' required placeholder='Apellidos' onChange='javascript:this.value=this.value.toUpperCase();' value='$APELLIDO_PERSONAL' pattern='[A-Za-z]+' title='Solo se aceptan letras'>
</TD>
<TD>
<select name='sexo' id='sexo' class='contact_combo' required='0'>";
		echo "<option value='$ID_SEXO'>- $DESC_SEXO -</option>";
		echo "<option value='M'>-.  Masculino .</option>";
		echo "<option value='F'>-.  Femenino .</option>";
echo "</select>
</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Fecha de nacimiento</span></TD>
<TD><span class='Estilo1'>Correo electr&oacute;nico</span></TD>
</TR>
<TR>
<TR>
<TD>";

echo "<select name='dia_naci' id='dia_naci' class='contact_combo' required='0'>";
echo "<option value='$DIANACI_PERSONAL'>-.  $DDIANACI_PERSONAL .</option>";
for($x=1;$x<=31;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";
echo "<select name='mes_naci' id='mes_naci' class='contact_combo' required='0'>";
echo "<option value='$MESNACI_PERSONAL'>-.  $DMESNACI_PERSONAL .</option>";
for($x=1;$x<=12;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";

echo "<select name='anio_naci' id='anio_naci' class='contact_combo' required='0'>";
echo "<option value='$ANIONACI_PERSONAL'>-. $DANIONACI_PERSONAL .</option>";
$anio_a=date("Y");
for($x=1920;$x<=$anio_a-10;$x++){

echo "<option value='$x'>-.  $x .</option>";
}
echo "</select>";

echo "</TD>
<TD>
<input type='text' name='correo' id='correo' class='contact_form1' required placeholder='Correo electr&oacute;nico' value='$CORREO_PERSONAL'>
</TD>
</TR>
<TR>
<TD><span class='Estilo1'>Tel&eacute;fono</span></TD>
<TD><span class='Estilo1'>Cargo</span></TD>
</TR>
<TR>
<TR>
<TD>
<input type='text' name='tlf' id='tlf' class='contact_form' required placeholder='Tel&eacute;fono' onChange='javascript:this.value=this.value.toUpperCase();' value='$TLF_PERSONAL' pattern='[0-9]+' title='Solo se aceptan n&uacute;meros'>
</TD>
<TD>";
include("../../modelo/comboCargos.php");
echo "</TD>
</TR>

<TR>

<TD align='right'><span class='Estilo1'>Condici&oacute;n</span></TD>
<TD>
<select name='estatus' id='estatus' class='contact_combo' required='0'>";
		echo "<option value='$ID_CONDICION'>- $DES_CONDICION -</option>";
		
		echo "<option value='1'>-.  ACTIVO .</option>";
		echo "<option value='2'>-.  INACTIVO .</option>";
	
	
echo "</select></TD>
</TR>
<TR>
<TD align='center' colspan='2'>
<br><br>
<button class='botoneraCielo' name='REGISTRO' type='submit'  value='entrar' >$BOTON</button>
</TD>
</TR>
</table>
</form>

";
}
?>


</body>
</html>
