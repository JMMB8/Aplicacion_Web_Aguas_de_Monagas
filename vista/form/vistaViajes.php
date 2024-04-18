<?php
session_start();
?>
<?php

if (isset($_SESSION['loginsesion']) && isset($_SESSION['tipo_rol'])){
//include("../conexion_datos.php");
$nivel_acceso=$_SESSION['tipo_rol'];
$cedula_acceso=$_SESSION["cedulaAdmin"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Traslados</title>
<link rel="stylesheet" href="../../css/men_1.css" type="text/css"/>
<link href="../../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript" src="../../js/funciones.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../../js/xhr.js"></script>
 <script type="text/javascript" src="js/principal.js"></script>
 <script language="JavaScript" type="text/javascript">
 function Filtrar_ciudades() {
			CargadorAjax.CargadorContenidos('../../modelo/lasciudades.php', 'mostrador', 'POST', 'id_estado='+$('id_estado').value);
	}
	</script>

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
<!--Modals de  Carga-->
	<div id="pdvsaCapaTransparente" onDblClick="modalCargando(0);"></div>

	<!--Grande-->
	<div id="pdvsaCargaGrande" onDblClick="modalCargaGrande(0);"></div>
	
	<!--Mediano-->
	<div id="pdvsaCargaMediana" onDblClick="modalCargaMediano(0);"></div>
	
	<!--Pequeno-->
	<div id="pdvsaCargaPequena" onDblClick="modalCargaPequeno(0);"></div>
	
<table border="0" align="center" width="100%" bgcolor="#990000">
<tr>
<td background="../../img/cuadrito1.png" height="7"></td>
</tr>
</table>
<?php 
include("../../conexion_datos.php");


echo "
<table border='0' align='center' width='100%'>
<TR>
<TD>
<A href='../centro.php?empleo=3rbfe6ft6b&TYPE=PERSONAL' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
</TR>
</table>
";
?>


<?php 

if(isset($_GET['searchAlq'])){
$ID_TRASLADOS=$_GET['searchAlq'];
include("../../modelo/campos_traslados.php");
$color="#F5F5F5";
echo "
<CENTER><H2>CONSULTA</H2></CENTER>
<br>
<form name='entrar' action='../centro.php' method='POST'>
<input type='hidden' name='campo_unico' id='campo_unico' value='$CLAVE_PRIMARIA'>
<table align='center' border='0' width='80%'>
<TR>
<TD colspan='3'><B>C&oacute;digo</B></TD>
</TR>
<TR bgcolor='$color'>
<TD colspan='3'>
$CODIGO_TRASLADO
</TD>
";

echo "
</TR>";
echo "<TR  bgcolor='$color'>
<TD colspan='3'><B>Transporte</B></TD>
</TR>";
echo "<TR>
<TD colspan='3'>
PLACA: $CAMPOS_TRANSPOR[1] $CAMPOS_TRANSPOR[2] $CAMPOS_TRANSPOR[3]  COLOR: $CAMPOS_TRANSPOR[4]  SERIAL: $CAMPOS_TRANSPOR[5]
</TD>
</TR>";
echo "<TR  bgcolor='$color'>
<TD colspan='3'><B>Conductor del transporte</B></TD>
</TR>";
echo "<TR>
<TD colspan='3'>
CEDULA:  $CAMPOS_CHOFER[0] $CAMPOS_CHOFER[1] $CAMPOS_CHOFER[2] SEXO: $CAMPOS_CHOFER[3]  EDAD:  $CAMPOS_CHOFER[5]
</TD>
</TR>";
echo "<TR  bgcolor='$color'>
<TD><B>Estado destino</B></TD><TD><B>Ciudad destino</B></TD><TD><B>Lugar destino</B></TD>
</TR>";

echo "<TR>
<TD>
$NOMBRE_ESTADO
</TD><TD>

$NOMBRE_CIUDAD 
</TD><TD>$LUGAR_TRASLADO</TD>
</TR>";
echo "<TR  bgcolor='$color'>
<TD colspan='3'><B>Fecha de salida</B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>Tipo de hidrocarburo</B></TD>
</TR><TR><TD colspan='3'>";
echo "$ID_DIA_SALIDA-$ID_MES_SALIDA-$ID_ANIO_SALIDA";

echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

echo "$NOMBRE_TIPOCARG</TD>
</TR>";
echo "<TR  bgcolor='$color'>
<TD><B>Cantidad</B></TD><TD colspan='2'><B>Indique alguna observaci&oacute;n de la salida</B></TD>
</TR>";
echo "<TR>
<TD>$CANTIDAD_TIPO_CARGA_TRASLADO</TD>
<TD colspan='2'>
$OBSERV_SALIDA_TRASLADO
</TD>
</TR>";
echo "<TR  bgcolor='$color'><TD colspan='3'><B>Fecha de Entrada</B></TD></TR>";
echo "<TR>
<TD colspan='3'>"; 
echo "$ID_DIA_ENTRADA-$ID_MES_ENTRADA-$ID_ANIO_ENTRADA";

echo "</TD></TR>";
echo "<TR  bgcolor='$color'><TD colspan='3'><B>Indique alguna observaci&oacute;n de entrada</B></TD></TR>";

echo "<TR><TD colspan='3'>$OBSERV_ENTRADA_TRASLADO</TD></TR>";



echo "<TR  bgcolor='$color'>
<TD><B>Condici&oacute;n del viaje</B></TD><TD colspan='2'>";

echo " $SELECT_ESTATUS 
</TD>
</TR>";
echo "<TR>
<TD align='center' colspan='3'>
<br><br>
<button class='submit' name='REGISTRO' type='submit'  value='entrar'>SALIR</button>
</TD>
</TR>
</table>
</form>

";
}
?>


</body>
</html>
 <?php
}
else
{
echo "<center>ACCESO NO AUTORIZADO, EL USUARIO DEBE INICIAR SESI&Oacute;N</center>";
}
?>