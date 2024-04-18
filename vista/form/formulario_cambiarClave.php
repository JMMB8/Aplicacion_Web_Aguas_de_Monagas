<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CAMBIAR CLAVE</title>
<link href="../../css/hojasEsilos.css" rel="stylesheet" type="text/css">
<link href="../../css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/principal.js"></script>

<style type="text/css">
<!--
.Estilo1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: italic;
}
.Estilo2 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
	color: #CCFFFF;
}

.Estilo3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
	color: #000000;
}
-->
</style>
</head>
<body>
<table border="0" align="center" width="80%">
<TR>
<TD><span class="Estilo1">CAMBIO DE CLAVE DE USUARIO</span></TD>
<TD align="right">
<A href="../derecha.php" title="Salir">
<img src="../../img/exit.jpg" width="90" height="60">
</A>
</TD>
</TR>
</table>
<?php 

if(isset($_GET['cambio'])){
include("../../conexion_datos.php");
/*$indent_maq=$_GET['Newmaq'];
include("../../modelo/datosMaquinas.php");*/

echo "
<CENTER><H2>Ingrese los datos</H2></CENTER>
<form name='entrar' action='../../controlador/cambiar_clave.php' method='POST'>
<table align='center' border='0' width='50%'>
<TR>
<TD align='right'>Cedula</TD>
<TD>
<input type='text' name='CEDULA' id='CEDULA' class='contact_form' required placeholder='Cedula de usuario'>
</TD>
</TR>
<TR>
<TD align='right'>Clave actual</TD>
<TD>
<input type='password' name='clave_actual' id='clave_actual' class='contact_form' required placeholder='Clave actual'>
</TD>
</TR>
<TR>
<TD align='right'>Nueva clave</TD>
<TD>
<input type='password' name='nueva_clave' id='nueva_clave' class='contact_form' required placeholder='Nueva clave'>
</TD>
</TR>
<TR>
<TD align='right'>Repita nueva clave</TD>
<TD>
<input type='password' name='nueva_claver' id='nueva_claver' class='contact_form' required placeholder='Escriba de nuevo la nueva clave'>
</TD>
</TR>
<TR>
<TD align='center' colspan='2'>
<br>
<button class='botoneraCielo' name='REGISTRO' type='submit'  value='entrar' >Cambiar clave</button>
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
