<?php

	echo "<select name='dia2' id='dia2' class='contact_combo' required=''>";
		echo "<option value='$iddiaRepar'>- $selectdiaRepar -</option>";
		for($j=1;$j<=31;$j++){
		if($j<=9)
		$da="0".$j;
		else
		$da=$j;
			echo "<option value='$da'>-.  $da .</option>";
		}
	echo "</select>
	";
	$dms=date("m");
	echo "<select name='mes2' id='mes2' class='contact_combo' required=''>";
		echo "<option value='$idmesRepar'>- $selectmesRepar -</option>";
		for($j=1;$j<=12;$j++){
		if($j<=9)
		$da="0".$j;
		else
		$da=$j;
			echo "<option value='$da'>-.  $da .</option>";
		}
	echo "</select>
	";
	
	echo "<select name='anio2' id='anio2' class='contact_combo' required=''>";
		//echo "<option value=''>- A&ntilde;o -</option>";
	

			echo "<option value='$idanioRepar'>-.  $selectanioRepar .</option>";

	echo "</select>
	";
?>
