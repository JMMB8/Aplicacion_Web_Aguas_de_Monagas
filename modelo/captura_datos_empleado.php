<?php
	$campo_unico=$_POST['campo_unico'];
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$sexo=$_POST['sexo'];
	$dia_naci=$_POST['dia_naci'];
	$mes_naci=$_POST['mes_naci'];
	$anio_naci=$_POST['anio_naci'];
	
	$fecha_nac=$anio_naci."-".$mes_naci."-".$dia_naci;
	
	$correo=$_POST['correo'];
	$tlf=$_POST['tlf'];
	$estatus=$_POST['estatus'];
	$id_cargos=$_POST['id_cargos'];
	
	//****** CALCULAR EDAD *************
	$dia=date("d");
	$mes=date("m");
	$anno=date("Y");
	if ($mes_naci>$mes){
	$EDAD_PERSONAL=$anno-$anio_naci-1;
	}
	else
	{
	if (($mes==$mes_naci) and ($dia_naci>$dia)){
	$EDAD_PERSONAL=$anno-$anio_naci-1;
	}
	else
	$EDAD_PERSONAL=$anno-$anio_naci;

	}

//***********************************
?>
