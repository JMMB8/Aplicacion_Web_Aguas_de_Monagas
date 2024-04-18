<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRANSPORTES</title>
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
<td background="../../img/cuadrito1.png" height="7"></td>
</tr>
</table>
<div class="capa">
<div>
<?php 
include("../../conexion_datos.php");

echo "
<table border='0' align='center' width='100%'>
<TR>
<TD>
<A href='../operaciones_maquinarias.php?inic_maq=3rbfe6ft6b&TYPE=TRANSPORTES' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
</TR>
</table>
";
?>

</div>
<div>

<?php 

if(isset($_GET['Newmaq'])){
$indent_maq=$_GET['Newmaq'];
include("../../modelo/datosMaquinas.php");

echo "<div style='margin:0 auto; width: 710px; margin-top: 60px;'>
<div class='capa2'>
<div>

</div>
<div style='margin-left: 150px; margin-top: -55px;'>
</div>
<div style='margin-left: 250px; margin-top: 30px;'>
REGISTRO Y CONTROL DE TRANSPORTES</div></div>

<div class='capa3'>
<br><br>
<form name='entrar' action='../../controlador/registrar_maquina.php' method='POST'>
<input type='hidden' name='campo_unico' id='campo_unico' value='$ID_MAQUINA'>
<table align='center' border='0' width='50%'>
<TR>
<TD>
<input type='text' name='codigo_maq' id='codigo_maq' class='contact_form' required placeholder='Código/Placa del transporte' value='$CODIGO_MAQUINA' onChange='javascript:this.value=this.value.toUpperCase();'>
</TD>
<TD>
<input type='text' name='marca' id='marca' class='contact_form1' required placeholder='Marca' onChange='javascript:this.value=this.value.toUpperCase();' value='$MARCA_MAQUINA'>
</TD>
</TR>
<TR>
<TD>
<input type='text' name='modelo' id='modelo' class='contact_form1' required placeholder='Modelo' onChange='javascript:this.value=this.value.toUpperCase();' value='$MODELO_MAQUINA'>
</TD>
<TD>
<input type='text' name='color' id='color' class='contact_form1' required placeholder='Color' onChange='javascript:this.value=this.value.toUpperCase();' pattern='[A-Za-z]+' title='Solo se aceptan letras' value='$COLOR_MAQUINA'>
</TD>
</TR>
<TR>
<TD>
<input type='text' name='serial' id='serial' class='contact_form1' required placeholder='Serial' onChange='javascript:this.value=this.value.toUpperCase();' value='$SERIAL_MAQUINA'>
</TD>
<TD>
<input type='text' name='anio' id='anio' class='contact_form' required placeholder='A&ntilde;o' pattern='[0-9]+' maxlength='4' title='Solo se aceptan n&uacute;meros' value='$ANIO_MAQUINA'>
</TD>
</TR>
<TR>
<TD>";
include ("../../modelo/comboTipo_maq.php");
echo "</TD>
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
<button class='submit' name='REGISTRO' type='submit'  value='entrar' >$BOTON</button>
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
