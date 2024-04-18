<?php
	echo "
	<select name='id_parroq' id='id_parroq' class='contact_combo' required=''  onchange='Filtrar_sectores()'>";
	$resulEDOS = mysql_query("SELECT * FROM parroquia WHERE id_parroquia!='$ID_PARROQ_CTE' AND condicion='A' ORDER BY nombre ASC");
		echo "<option value='$ID_PARROQ_CTE'>- $SELECT_PARROQ_CTE -</option>";
		while ($FIL= mysql_fetch_array($resulEDOS)){
			echo "<option value='$FIL[0]'>- $FIL[1] </option>";
		}
	echo "</select>
	";
	
?>
