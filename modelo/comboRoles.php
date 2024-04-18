<?php
	
	$query = "SELECT * FROM roles WHERE estatus='1' ORDER BY tipos ASC";
	$resul = mysql_query($query);
	
	echo "
	<select name='id_rol' id='id_rol' class='contact_combo' required=''>";
		echo "<option value=''>-	Tipo de usuario -</option>";
		while ($row = mysql_fetch_array($resul)){
			echo "<option value='$row[0]'>-.  $row[1] .</option>";
		}
	echo "</select>
	";
	
?>
