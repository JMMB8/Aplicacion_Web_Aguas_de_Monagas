<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NUEVA CONTRASE&Ntilde;A</title>
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
<A href='../../?searfe565xwfe=3rbfe6ft6b&TYPE=4766hyrfgfhfdhfgdhgfhdh'><font color='RED'><B>Inicio</B></font></A>
</TD>
</TR>
</table>
";
?>

</div>
<div>

<?php 

if(isset($_GET['files'])){
$codempl=$_GET['codempl'];
/*$indent_maq=$_GET['Newmaq'];
include("../../modelo/datosMaquinas.php");*/

echo "<div style='margin:0 auto; width: 710px; margin-top: 60px;'>
<div class='capa2'>
<div>

</div>
<div style='margin-left: 150px; margin-top: -55px;'>
</div>
<div style='margin-left: 250px; margin-top: 30px;'>
NUEVA CONTRASE&Ntilde;A</div></div>

<div class='capa3'>
<br><br>
<form name='entrar' action='../../controlador/cambiar_clave2.php' method='POST'>
<input type='hidden' name='codempl' id='codempl' class='contact_form' value='$codempl'>
<table align='center' border='0' width='50%'>
<TR>
<TD align='center'>
<input type='password' name='nueva_clave' id='nueva_clave' class='contact_form' required placeholder='Nueva contrase&ntilde;a'>
</TD>
</TR>
<TR>
<TD align='center'>
<input type='password' name='nueva_claver' id='nueva_claver' class='contact_form' required placeholder='Escriba de nuevo la nueva contrase&ntilde;a'>
</TD>
</TR>
<TR>
<TD align='center'>
<br>
<button class='submit' name='REGISTRO' type='submit'  value='entrar'>Guardar</button>
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
