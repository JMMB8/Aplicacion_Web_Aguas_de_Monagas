<?php

include("../conexion_datos.php");
	$id_estado=$_POST['id_estado'];
	$CIUD = "SELECT * FROM ciudad WHERE id_edo='$id_estado' ORDER BY nombre ASC";
	$RESCIU = mysql_query($CIUD);
	
	echo "
	<select name='id_ciudad' id='id_ciudad' class='contact_combo' required=''>";
		while ($MUNP = mysql_fetch_array($RESCIU)){
			echo "<option value='$MUNP[0]'>-.  $MUNP[1] .</option>";
		}
	echo "</select>
	";
	
?>
