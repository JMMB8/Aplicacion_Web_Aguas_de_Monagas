<?php
	$dday=date("d");
	echo "<select name='dia' id='dia' class='contact_combo' required=''>";
		echo "<option value='$dday'>- $dday -</option>";
		/*for($j=1;$j<=31;$j++){
		if($j<=9)
		$da="0".$j;
		else
		$da=$j;
			echo "<option value='$da'>-.  $da .</option>";
		}*/
	echo "</select>
	";
	$dms=date("m");
	echo "<select name='mes' id='mes' class='contact_combo' required=''>";
		echo "<option value='$dms'>- $dms -</option>";
		/*for($j=1;$j<=12;$j++){
		if($j<=9)
		$da="0".$j;
		else
		$da=$j;
			echo "<option value='$da'>-.  $da .</option>";
		}*/
	echo "</select>
	";
	$dys=date("Y");
	echo "<select name='anio' id='anio' class='contact_combo' required=''>";
		echo "<option value='$dys'>- $dys -</option>";
		/*$date=date("Y");
			echo "<option value='$date'>-.  $date .</option>";
*/
	echo "</select>
	";
?>
