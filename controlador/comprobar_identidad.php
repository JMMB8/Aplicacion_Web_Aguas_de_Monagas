<?php
	if (isset($_POST['confirm'])){
include("../conexion_datos.php"); 
//include("../modelo/captura_datos_empleado.php"); 

	$cedula=$_POST['cedula'];
	$sexo=$_POST['sexo'];
	$dia_naci=$_POST['dia_naci'];
	$mes_naci=$_POST['mes_naci'];
	$anio_naci=$_POST['anio_naci'];
	$edad=$_POST['edad'];
	$fecha_nac=$anio_naci."-".$mes_naci."-".$dia_naci;
	$validar=mysql_query("SELECT * FROM personal WHERE cedula='$cedula' AND sexo='$sexo' AND fecha_naci='$fecha_nac' AND edad='$edad'");
	$nro=mysql_num_rows($validar);
	if($nro!=0){
	$validar1=mysql_query("SELECT * FROM cuenta_usuario WHERE cedula='$cedula'");
	$nro1=mysql_num_rows($validar1);
		if($nro1!=0){
echo "<script type>
location='../vista/form/formnuevapassword.php?files=gdgdgdge3454dget3r&codempl=$cedula&63dg45gfetevf&token=63632vc63v636cr656534v6546c&TYPE=gfdgfr4t6bcftbrt6rtb6et';
</script>";
		}else{
echo "<script type>
alert('UD. NO TIENE NINGUNA CUENTA DE USUARIO CREADA ');
location='../vista/form/restablecercontrasena.php?rows=gdgfdfrergygeg&files=gdgdgdge3454dget3r63dg45gfetevf&token=63632vc63v636cr656534v6546c&TYPE=gfdgfr4t6bcftbrt6rtb6et';
</script>";
		}
	
	
	}else{
echo "<script type>
	alert('DATOS INCORRECTOS $nro');
location='../vista/form/restablecercontrasena.php?files=gdgdgdge3454dget3r63dg45gfetevf&token=63632vc63v636cr656534v6546c&TYPE=gfdgfr4t6bcftbrt6rtb6et';
</script>";
	}
	
	
	}
?>
