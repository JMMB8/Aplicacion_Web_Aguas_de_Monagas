<?php

		$SQL_CARG=mysql_query("SELECT * FROM cargos WHERE id_cargo='$IDENT_CARGO'");
		$CG=mysql_num_rows($SQL_CARG);
		
			if($CG==0){
			$ID_CARGO=0;
			$DESC_CARGO="";
				$BOTON="REGISTRAR";
			}else{
			$CAMPO_CARGOS=mysql_fetch_row($SQL_CARG);
			$ID_CARGO=$CAMPO_CARGOS[0];
			$DESC_CARGO=$CAMPO_CARGOS[1];
			
			$BOTON="MODIFICAR";
			}

?>
