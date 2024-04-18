<?php
$consul_emple=mysql_query("SELECT * FROM personal WHERE cedula='$CODIGO_EMPLEADO'");
$NUM=mysql_num_rows($consul_emple);

	if ($NUM==0){
	//$ID_PERSONAL=0;
	$CEDULA_PERSONAL="";
	$NOMBRE_PERSONAL="";
	$APELLIDO_PERSONAL="";
	$ID_SEXO="0";
	$DESC_SEXO="Sexo";
	$DIANACI_PERSONAL="0";
	$DDIANACI_PERSONAL="D&iacute;a";
	
	$MESNACI_PERSONAL="0";
	$DMESNACI_PERSONAL="Mes";
	
	$ANIONACI_PERSONAL="0";
	$DANIONACI_PERSONAL="A&ntilde;o";
	
	$EDAD_PERSONAL="0";
	$CORREO_PERSONAL="";
	$TLF_PERSONAL="";
	$ID_CONDICION="0";
	$DES_CONDICION="Condici&oacute;n";
	$IDENT_CARGO="";
	$DESC_CARGO="Cargo";
	$BOTON="REGISTRAR";
	}else{
	$CAMPOS_PERSONAL=mysql_fetch_row($consul_emple);
	//$ID_PERSONAL=$CAMPOS_PERSONAL[0];
	$CEDULA_PERSONAL=$CAMPOS_PERSONAL[0];
	$NOMBRE_PERSONAL=$CAMPOS_PERSONAL[1];
	$APELLIDO_PERSONAL=$CAMPOS_PERSONAL[2];
	$ID_SEXO=$CAMPOS_PERSONAL[3];
	
	if ($ID_SEXO=="M")
	$DESC_SEXO="M";
	else
	$DESC_SEXO="F";
	
	
	
	$dia_naci1=substr($CAMPOS_PERSONAL[4], 8, 2);
	$mes_naci1=substr($CAMPOS_PERSONAL[4], 5, 2);
	$year_naci1=substr($CAMPOS_PERSONAL[4], 0, 4);

	
	
	$DIANACI_PERSONAL=$dia_naci1;
	$DDIANACI_PERSONAL=$dia_naci1;
	
	$MESNACI_PERSONAL=$mes_naci1;
	$DMESNACI_PERSONAL=$mes_naci1;
	
	$ANIONACI_PERSONAL=$year_naci1;
	$DANIONACI_PERSONAL=$year_naci1;
	
	//****** CALCULAR EDAD *************
	$dia=date("d");
	$mes=date("m");
	$anno=date("Y");
	if ($mes_naci1>$mes){
	$EDAD_PERSONAL=$anno-$year_naci1-1;
	}
	else
	{
	if (($mes==$mes_naci1) and ($dia_naci1>$dia)){
	$EDAD_PERSONAL=$anno-$year_naci1-1;
	}
	else
	$EDAD_PERSONAL=$anno-$year_naci1;

	}
$ACTUALIZAR_EDAD=mysql_query("UPDATE personal SET edad='$EDAD_PERSONAL' WHERE id_personal='$CODIGO_EMPLEADO'");
//***********************************
	$CORREO_PERSONAL=$CAMPOS_PERSONAL[6];
	$TLF_PERSONAL=$CAMPOS_PERSONAL[7];
	$ID_CONDICION=$CAMPOS_PERSONAL[8];
	$DES_CONDICION="Condici&oacute;n";
	if($ID_CONDICION=="1"){
$DES_CONDICION="ACTIVO";
}else{
$DES_CONDICION="INACTIVO";
}
$BOTON="GUARDAR";
$IDENT_CARGO=$CAMPOS_PERSONAL[9];
include("campos_cargos.php");

	}
?>
