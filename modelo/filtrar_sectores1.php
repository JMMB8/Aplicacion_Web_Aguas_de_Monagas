<?php
include("../conexion_datos.php");
	$id_parroq=$_POST['id_parroq'];
	$resul1= mysql_query("SELECT * FROM sectores WHERE id_parroquia='$id_parroq' ORDER BY nombre ASC");
	$nn=mysql_num_rows($resul1);
	
		if($nn!=0){
	
	echo "<SELECT name='id_sectores' id='id_sectores' class='contact_combo'>";

		while ($row1 = mysql_fetch_array($resul1)){
			echo "<option value='$row1[0]'>-. $row1[1] .</option>";
		}
	echo "</select>";
	
	}else{
	echo "No hay registros";
	}
	
?>
