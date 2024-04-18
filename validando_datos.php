<?php
if(isset($_POST['accesosKey'])){
include("conexion_datos.php");
$cedula=$_POST['cedula'];
//$naciona=$_POST['naciona'];
$dia=$_POST['dia1'];
$mes=$_POST['mes1'];
$anio=$_POST['anio1'];
$fecha_naci=$anio."-".$mes."-".$dia;
//$id_mesascc=$_POST['id_mesascc'];
$id_cargos=$_POST['id_cargos'];

	$consulta=mysql_query("SELECT * FROM personal WHERE cedula='$cedula' AND fecha_naci='$fecha_naci' AND id_cargo='$id_cargos'");
	$n=mysql_num_rows($consulta);
	
		if($n!=0){
		//$NUM_INTG=mysql_fetch_row($consulta);
		
		$consulta1=mysql_query("SELECT * FROM cuenta_usuario WHERE cedula='$cedula'");
		$n1=mysql_num_rows($consulta1);
		
		if($n1==0){
		echo "<script language='JavaScript' type='text/javascript'>
		
location='cargardatosUsuarios.php?token=gf46f6fgegf4fbffyf&Newempleo=$cedula&ring=gdvcv&update&pasww=gfger4656434trefbggff&me=FGSGVDCcc&reg=rgfghgdhgfdgfdg535436&files=7575683393958uf75757342068763&row=rtrgdshfghf4675643trerfghfd&crg=$id_cargos&ghen=y4657929283733';
	</script>";
		}else{
		echo "<script language='JavaScript' type='text/javascript'>
		alert('LO SIENO UD. POSEE CUENTA DE USUARIO...');
location='registerusuario.php?token=gf46f6fgegf4fbffyfgdvcv&updatepasww=gfger4656434trefbggffrgfghgdhgfdgfdg535436&files=7575683393958uf75757342068763&row=rtry4657929283733';
	</script>";
		}
		
		}else{
		echo "<script language='JavaScript' type='text/javascript'>
		alert('DATOS INCORRECTOS...');
location='registerusuario.php?token=gf46f6fgegf4fbffyfgdvcv&updatepasww=gfger4656434trefbggffrgfghgdhgfdgfdg535436&files=7575683393958uf75757342068763&row=rtry4657929283733';
	</script>";
		}

}
?>
