<?php
	
	echo "<select name='dia1' id='dia1' class='contact_combo' required=''>";
		echo "<option value='$dday'>- $sdday -</option>";
		for($j=1;$j<=31;$j++){
		if($j<=9)
		$da="0".$j;
		else
		$da=$j;
			echo "<option value='$da'>-.  $da .</option>";
		}
	echo "</select>
	";
	
	echo "<select name='mes1' id='mes1' class='contact_combo' required=''>";
		echo "<option value='$dms'>- $sdms -</option>";
		for($j=1;$j<=12;$j++){
		if($j<=9)
		$da="0".$j;
		else
		$da=$j;
			echo "<option value='$da'>-.  $da .</option>";
		}
	echo "</select>
	";
	
	echo "<select name='anio1' id='anio1' class='contact_combo' required=''>";
		//echo "<option value=''>- A&ntilde;o -</option>";
		$date=date("Y");
			echo "<option value='$dys'>-.  $sdys .</option>";

	echo "</select>
	";
?>
