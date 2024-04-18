<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRAR USUARIO</title>
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

<?php 
include("../../conexion_datos.php");


echo "
<table border='0' align='center' width='100%'>
<TR>
<TD>
<A href='../buscarUsuario.php?searchusuar=3rbfe6ft6b&TYPE=PERSONAL' title='Cerrar'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
</TR>
</table>
";
?>



<?php 

if(isset($_POST['bus']) || isset($_GET['bus'])){
if(isset($_POST['bus']))
$CODIGO_EMPLEADO=$_POST['campo'];

if(isset($_GET['bus']))
$CODIGO_EMPLEADO=$_GET['bus'];

$consul_emple=mysql_query("SELECT * FROM personal WHERE cedula='$CODIGO_EMPLEADO'");
$NUM=mysql_num_rows($consul_emple);
//include("../../modelo/datosPersonal.php");
if ($NUM!=0){

	$CAMPOS_PERSONAL=mysql_fetch_row($consul_emple);
	$CEDULA_PERSONAL=$CAMPOS_PERSONAL[0];
	$NOMBRE_PERSONAL=$CAMPOS_PERSONAL[1];
	$APELLIDO_PERSONAL=$CAMPOS_PERSONAL[2];
echo "
<CENTER><H2>CREAR CUENTA DE USUARIO</H2></CENTER>
<form name='entrar' action='../../controlador/registrar_usuario.php' method='POST'>
<table align='center' border='0' width='50%'>
<TR>
<TD>
<input type='text' name='cedula' id='cedula' class='contact_form' readonly value='$CEDULA_PERSONAL'>
</TD>
<TD>
<input type='text' name='apellido' id='apellido' class='contact_form1' readonly value='$NOMBRE_PERSONAL $APELLIDO_PERSONAL'>
</TD>
</TR>
<TR>

</TR>
<TR>
<TD colspan='2'>";

include("../../modelo/comboRoles.php");
echo "</TD>
</TR>
<TR>
<TD colspan='2'>
<input type='text' name='usuario' id='usuario' class='contact_form1' required placeholder='Nombre de usuario'>
</TD>
</TR>
<TR>
<TD colspan='2'>
<input type='password' name='clave' id='clave' class='contact_form1' required placeholder='Clave de usuario'>
</TD>
</TR>
<TR>
<TD colspan='2'>
<input type='password' name='claver' id='claver' class='contact_form1' required placeholder='Escriba de nuevo la clave de usuario'>
</TD>
</TR>
<TR>
<TD align='center' colspan='2'>
<button class='submit' name='REGISTRO' type='submit'  value='entrar'>Crear cuenta</button>
</TD>
</TR>
</table>
</form>

";
}else{
echo "<center><h2>EL REGISTRO NO EXISTE</h2></center>";
}
}
?>


</body>
</html>
