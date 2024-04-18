<?php

		$SQL_SECTOR=mysql_query("SELECT * FROM sectores WHERE id_sector='$IDENT_SECTOR'");
		$CSS=mysql_num_rows($SQL_SECTOR);
		
			if($CSS==0){
			$ID_SECTOR=0;
			$DESC_SECTOR="";
			$ID_PARROQ_SECTOR="";
			$SELECT_PARROQ_SECTOR="Seleccione";
				$BOTON="REGISTRAR";
			}else{
			$CAMPO_SECTOR=mysql_fetch_row($SQL_SECTOR);
			$ID_SECTOR=$CAMPO_SECTOR[0];
			$DESC_SECTOR=$CAMPO_SECTOR[1];
			$ID_PARROQ_SECTOR=$CAMPO_SECTOR[2];
			$SQL_PARROQUIA1=mysql_query("SELECT * FROM parroquia WHERE id_parroquia='$ID_PARROQ_SECTOR'");
			$CAMPO_PARROQUIA1=mysql_fetch_row($SQL_PARROQUIA1);
			$SELECT_PARROQ_SECTOR=$CAMPO_PARROQUIA1[1];
			
			$BOTON="MODIFICAR";
			}

?>
