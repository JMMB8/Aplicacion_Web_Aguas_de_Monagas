<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIPOS</title>
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
<A href='../operacion_tipoTransporte.php?empleo=3rbfe6ft6b&TYPE=TRANSPORTES' title='Salir'><img src='../../img/salir.png' border='0' width='35' height='35'></A>
</TD>
</TR>
</table>
";
?>

</div>
<div>

<?php 

if(isset($_GET['Newmaq'])){
$IDENT_TIPO=$_GET['Newmaq'];
include("../../modelo/campos_tipotransporte.php");

echo "<div style='margin:0 auto; width: 710px; margin-top: 60px;'>
<div class='capa2'>
<div>

</div>
<div style='margin-left: 150px; margin-top: -55px;'>
</div>
<CENTER><H2>REGISTRAR/EDITAR DATOS TIPOS DE TRANSPORTES</H2></CENTER>

<div class='capa3'>
<br><br>
<form name='entrar' action='../../controlador/registrar_tipost.php' method='POST'>	
			
<input type='hidden' name='campo_unico' id='campo_unico' value='$ID_TIPOS'>
<table align='center' border='0' width='50%'>
<TR>
<TD>
<input type='text' name='modelo' id='modelo' class='contact_form1' required placeholder='Descripci&oacute;n del tipo transporte' onChange='javascript:this.value=this.value.toUpperCase();' value='$DESC_TIPOS'>
</TD>
</TR>
<TR>
<TD>
<select name='estatus' id='estatus' class='contact_combo' required='0'>";
if($ID_SELECT_MEDIDA==""){
echo "<option value='$ID_SELECT_TIPOS'>- $SELEC_SELECT_TIPOS -</option>";
	echo "<option value='A'>-.  ACTIVO .</option>";
echo "<option value='I'>-.  INACTIVO .</option>";
}else{
if($ID_SELECT_MEDIDA=="A"){
echo "<option value='$ID_SELECT_TIPOS'>- $SELEC_SELECT_TIPOS -</option>";
echo "<option value='I'>-.  INACTIVO .</option>";
}else{
echo "<option value='$ID_SELECT_TIPOS'>- $SELEC_SELECT_TIPOS -</option>";
	echo "<option value='A'>-.  ACTIVO .</option>";
}

}
	
	
echo "</select>
</TD>
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
