<?php
session_start();
?>
<?php
/*if(isset($_SESSION["nivel_contruvisores"]) && isset($_SESSION["logins_contruvisores"]) && isset($_SESSION["cedulaUsuario_contruvisores"])){
include("../controlador/conectar_bd.php");
	$NIVEL_USUARIO_CONSTRUV=$_SESSION["nivel_contruvisores"];
	$CEDULA_USUARIO_CONSTRUV=$_SESSION["cedulaUsuario_contruvisores"];
	$CEDULA_PERSONAL=$CEDULA_USUARIO_CONSTRUV;

		//$_SESSION["logins_contruvisores"]=$datus[3];
		
	include("../sql/campos_personal.php");*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AGUAS DE MONAGAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/ico" href="../images/ico/ico.jpg">
    <link href="../menu/estiloMenus.css" rel="stylesheet">
 <!-- <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet">
    <link href="../css/js/google-code-prettify/prettify.css" rel="stylesheet">-->
    
	<script src="../css1/js/jquery.js"></script>
    <script src="../css1/js/bootstrap-transition.js"></script>
    <script src="../css1/js/bootstrap-alert.js"></script>
    <script src="../css1/js/bootstrap-modal.js"></script>
    <script src="../css1/js/bootstrap-dropdown.js"></script>
    <script src="../css1/js/bootstrap-scrollspy.js"></script>
    <script src="../css1/js/bootstrap-tab.js"></script>
    <script src="../css1/js/bootstrap-tooltip.js"></script>
    <script src="../css1/js/bootstrap-popover.js"></script>
    <script src="../css1/js/bootstrap-button.js"></script>
    <script src="../css1/js/bootstrap-collapse.js"></script>
    <script src="../css1/js/bootstrap-carousel.js"></script>
 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script language="JavaScript" type="text/javascript">
function confirmar_respaldo()
{
    x=confirm('REALMENTE DESEA REALIZAR RESPALDO A LA BASE DE DATOS.?');
	if(x)
	{ header("Location: respaldar.php"); return true;}
	else
	{ return false; }
}

function mensaje()
{
    x=confirm('LO SIENTO UD. NO TIENE PERMISO PARA ESTA OPERACIÓN?');
	if(x)
	{ header("Location: centro.php"); return true;}
	else
	{ return false; }
}
</script>

<style type="text/css">
body {
	background-color: #FFF;
	/*background-image: url(../img/fondoP.png);*/
}
.Estilo1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	color: #000066;
	font-weight: bold;
	font-style: italic;
}
</style>
</head>
<body>
<table width="100%" border="0">
<tr>
<td>
<img src="../images/im3.jpg" width="80" height="60" border="0">
</td>
<td align="right">
  <span class="Estilo1">ATENCI&Oacute;N AL CIUDADANO Y GESTI&Oacute;N COMUNITARIA</span></td>
</tr>

  <tr>
    <td colspan="2">
    <?php
	$TIPO_PERSONAL=$_SESSION['LOGIN_ROL_SESION'];
		if($TIPO_PERSONAL==1){
		include("../menu/menuAdmin.php");
		}else{
		if($TIPO_PERSONAL==2){
		include("../menu/menuOperador.php");
		}/*else{
		include("menuProfe.php");
		}*/
		}
//

?>
    </td>
  </tr>
  <tr>
    <td colspan="2"><iframe src="inicio.php" frameborder="0" scrolling="yes" name="admin" width="100%" height="550"></iframe></td>
  </tr>
  <tr>
    <td colspan="2">
    <pre><center><strong><a href="" target="_blank" style="color:#000">AGUAS DE MONAGAS</a></strong></center></pre>
    </td>
  </tr>
</table>
</body>
</html>
<?php
/*}
else{
echo "<center><h1>ACCESO NO AUTORIZADO</h1></center>";

}*/
?>