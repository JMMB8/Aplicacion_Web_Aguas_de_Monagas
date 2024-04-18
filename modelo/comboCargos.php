<?php
	
	$query = "SELECT * FROM cargos ORDER BY descripcion ASC";
	$resul = mysql_query($query);
	
	echo "
	<select name='id_cargos' id='id_cargos' class='contact_combo' required=''>";
		echo "<option value='$IDENT_CARGO'>-	$DESC_CARGO -</option>";
		while ($row = mysql_fetch_array($resul)){
			echo "<option value='$row[0]'>-.  $row[1] .</option>";
		}
	echo "</select>
	";
	
?>
