<?php
	
	
	echo "
	<select name='id_parroq' id='id_parroq' class='contact_combo' required=''>";
	$EDOS = "SELECT * FROM parroquia WHERE id_parroquia!='$ID_PARROQ_SECTOR' ORDER BY nombre ASC";
	$resulEDOS = mysql_query($EDOS);
		echo "<option value='$ID_PARROQ_SECTOR'>- $SELECT_PARROQ_SECTOR -</option>";
		while ($FIL= mysql_fetch_array($resulEDOS)){
			echo "<option value='$FIL[0]'>- $FIL[1] </option>";
		}
	echo "</select>
	";
	
?>

			