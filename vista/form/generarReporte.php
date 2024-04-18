<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GENERAR REPORTES</title>
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
<A href='../centro.php?searchusuar=3rbfe6ft6b&TYPE=PERSONAL'><font color='RED'><B>Regresar</B></font></A>
</TD>
</TR>
</table>
";
?>

</div>
<div>

<?php 

if(isset($_GET['TYPE'])){
/*$indent_maq=$_GET['Newmaq'];
include("../../modelo/datosMaquinas.php");*/

echo "<div style='margin:0 auto; width: 710px; margin-top: 60px;'>
<div class='capa2'>
<div>

</div>
<div style='margin-left: 150px; margin-top: -55px;'>
</div>
<div style='margin-left: 250px; margin-top: 30px;'>
GENERACIÓN DE REPORTES</div></div>

<div class='capa3'>
<BR><BR>";
if(isset($_GET['optionf'])){
//REPORTE FECHA
include("form_reprte_fecha.php");
}else{
if(isset($_GET['optionm'])){
//REPORTE MES
include("form_reprte_mes.php");
}else{
//REPORTE TIPO ALQUILER
include("form_reprte_tipo_alq.php");
}
}
echo "
</div>
";
}
?>

</div>
</div>

</body>
</html>
