<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RESTABLECER CONTRASE&Ntilde;A</title>
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
<div class="capa">
<div>
<?php 
include("../../conexion_datos.php");


echo "
<table border='0' align='center' width='100%'>
<TR>
<TD>
<A href='../../?empleo=3rbfe6ft6b&TYPE=PERSONAL'><font color='RED'><B>Regresar</B></font></A>
</TD>
</TR>
</table>
";
?>

</div>


<?php 

if(isset($_GET['token'])){
/*$CODIGO_EMPLEADO=$_GET['Newempleo'];
include("../../modelo/datosPersonal.php");*/

echo "<div style='margin:0 auto; width: 710px; margin-top: 60px;'>
<div class='capa2'>
<div>

</div>
<div style='margin-left: 100px; margin-top: -55px;'>
<font color='#000000'><b>Completa los siguientes campos para confirmar su identidad</b></font>
</div>
<div style='margin-left: 250px; margin-top: 30px;'>
RECUPERAR CONTRASE&Ntilde;A</div></div>

<div class='capa3'>
<br><br>
<form name='entrar' action='../../controlador/comprobar_identidad.php' method='POST'>

<table align='center' border='0' width='80%'>
<TR>
<TD align='right'><B>Cedula</B></TD>
<TD>
<input type='text' name='cedula' id='cedula' class='contact_form' required placeholder='Cedula'>
</TD>
</TR>
<TR>
<TD align='right'><B>Sexo</B></TD>
<TD>
<select name='sexo' id='sexo' class='contact_combo' required=''>";
		echo "<option value=''>- Sexo -</option>";
		echo "<option value='M'>-.  Masculino .</option>";
		echo "<option value='F'>-.  Femenino .</option>";
echo "</select>
</TD>
</TR>
<TR>
<TD align='right'><B>Fecha de nacimiento</B></TD>
<TD>";

echo "<select name='dia_naci' id='dia_naci' class='contact_combo' required=''>";
echo "<option value=''>-.  D&iacute;a .</option>";
for($x=1;$x<=31;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";
echo "<select name='mes_naci' id='mes_naci' class='contact_combo' required=''>";
echo "<option value=''>-.  Mes .</option>";
for($x=1;$x<=12;$x++){
if($x<=9)
$day="0".$x;
else
$day=$x;
echo "<option value='$day'>-.  $day .</option>";
}
echo "</select>";

echo "<select name='anio_naci' id='anio_naci' class='contact_combo' required=''>";
echo "<option value=''>-. A&ntilde;o .</option>";
$anio_a=date("Y");
for($x=1920;$x<=$anio_a-10;$x++){

echo "<option value='$x'>-.  $x .</option>";
}
echo "</select>";

echo "</TD>

</TR>
<TR>
<TD align='right'><B>Edad</B></TD>
<TD>
<input type='text' name='edad' id='edad' class='contact_form' required placeholder='Edad' pattern='[0-9]+' title='Solo se aceptan n&uacute;meros'>
</TD>
</TR>
<TR>
<TD align='center' colspan='2'>
<br><br>
<button class='submit' name='confirm' type='submit'  value='entrar' >Confirmar</button>
</TD>
</TR>
</table>
</form>
</div>
";
}
?>

</div>
</div>

</body>
</html>
