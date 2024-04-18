<?php
$conn =new mysqli('localhost', 'root', '' , 'aguasdemonagas_casos');



$query = '';
$sqlScript = file('../BD/aguasdemonagas_casos.sql');
foreach ($sqlScript as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}
		
	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
		$query= '';		
	}
}
//echo '<div class="success-response sql-import-response">IMPORTACI&Oacuten;N DE LA BASE DE DATOS, HA SIDO EXITOSO...</div>';

echo "<script type>
	alert('IMPORTACI&Oacuten;N DE LA BASE DE DATOS, HA SIDO EXITOSO');
	location='../vista/inicio.php?empleo=3rbfe6ft6b&TYPE=sfsdfdgdsdgfgs';
		</script>";



?>

