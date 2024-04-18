<?php
	
/*	$EDOS = "SELECT * FROM estados ORDER BY nombre ASC";
	$resulEDOS = mysql_query($EDOS);*/
	
	echo "
	<select name='id_estado' id='id_estado' class='contact_combo' required=''  onchange='Filtrar_ciudades()'>";
	$EDOS = "SELECT * FROM estados WHERE id_edo!='$EDO_TRASLADO' ORDER BY nombre ASC";
	$resulEDOS = mysql_query($EDOS);
		echo "<option value='$EDO_TRASLADO'>- $NOMBRE_ESTADO -</option>";
		while ($FIL= mysql_fetch_array($resulEDOS)){
			echo "<option value='$FIL[0]'>- $FIL[1] </option>";
		}
	echo "</select>
	";
	
?>
