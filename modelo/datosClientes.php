<?php
$consul_cte=mysql_query("SELECT * FROM contactos WHERE cedula='$CODIGO_CLIENTE'");
$NUM=mysql_num_rows($consul_cte);

	if ($NUM==0){
	
	$CEDULA_CLIENTE="";
	$NOMBRE_CLIENTE="";
	$TLF_CLIENTE="";
	$DIRECC_CLIENTE="";
	$CORREO_CLIENTE="";
	$ID_PARROQ_CTE="";
	$SELECT_PARROQ_CTE="Seleccione";
	$ID_SECTOR_CTE="";
	$SELECT_SECTOR_CTE="Seleccione";
	$BOTON="REGISTRAR";
	
	
	}else{
	$CAMPOS_CLIENTE=mysql_fetch_row($consul_cte);
	$CEDULA_CLIENTE=$CAMPOS_CLIENTE[0];
	$NOMBRE_CLIENTE=$CAMPOS_CLIENTE[1];
	$TLF_CLIENTE=$CAMPOS_CLIENTE[2];
	$DIRECC_CLIENTE=$CAMPOS_CLIENTE[3];
	$CORREO_CLIENTE=$CAMPOS_CLIENTE[4];
	$ID_PARROQ_CTE=$CAMPOS_CLIENTE[5];
	$IDENT_PARROQUIA=$ID_PARROQ_CTE;
	include("campos_parroquia.php");
	$SELECT_PARROQ_CTE=$DESC_PARROQUIA;
	
	$ID_SECTOR_CTE=$CAMPOS_CLIENTE[6];
	$IDENT_SECTOR=$ID_SECTOR_CTE;
	include("campos_sectores.php");
	$SELECT_SECTOR_CTE=$DESC_SECTOR;
	
$BOTON="GUARDAR";

	}
?>
