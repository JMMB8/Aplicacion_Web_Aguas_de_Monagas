<?php


	$SERV = mysql_query("SELECT * FROM tipo_servicio WHERE id_tipo!='$IDENTIF_SERVI_CTE' AND condicion='A' ORDER BY descripcion ASC");
	

	echo "
	<select name='EL_SERVICIO' id='EL_SERVICIO' class='contact_combo' required=''>";
		echo "<option value='$IDENTIF_SERVI_CTE'>- $SELECT_SERVI_CTE -</option>";
		while ($DATUS = mysql_fetch_array($SERV)){
			echo "<option value='$DATUS[0]'>-.  $DATUS[1] .</option>";
		}
	echo "</select>
	";
	
?>
