<?php
  
	$servidor="localhost";
	$usuario="root";
	$contrasena="";
	$bd="aguasdemonagas_casos";
	$host="localhost";  
    $name="aguasdemonagas_casos";  
    $user="root";  
    $pass="";  
    $filename=date("Y-m-d_H-i-s"); 
backup_tables($servidor,$usuario,$contrasena,$bd);




function backup_tables($host,$user,$pass,$name,$tables = '*')
{
   
   $link = mysql_connect($host,$user,$pass);
   mysql_select_db($name,$link);
   
   //get all of the tables
   if($tables == '*')
   {
      $tables = array();
      $result = mysql_query('SHOW TABLES');
      while($row = mysql_fetch_row($result))
      {
         $tables[] = $row[0];
      }
   }
   else
   {
      $tables = is_array($tables) ? $tables : explode(',',$tables);
   }
   
   //cycle through
   foreach($tables as $table)
   {
      $result = mysql_query('SELECT * FROM '.$table);
      $num_fields = mysql_num_fields($result);
	  
	  	/*<!--<font color="#FFDFAA">-->
			
		<!--<font color="#FFCC66">-->*/
     echo "<font color='#FFFFFF'>";
      $return.= 'DROP TABLE '.$table.';';
	 
      $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
      $return.= "\n\n".$row2[1].";\n\n";
      
   for ($i = 0; $i < $num_fields; $i++)
   
      {
         while($row = mysql_fetch_row($result))
         {
		
            $return.= 'INSERT INTO '.$table.' VALUES(';
            for($j=0; $j<$num_fields; $j++) 
            {
               $row[$j] = addslashes($row[$j]);
			   
			   echo "<font color='#FFFFFF'>";
			 
              $row[$j] = ereg_replace("\n","\\n",$row[$j]);
			 
			 echo "</font>";
			    
               if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
               if ($j<($num_fields-1)) { $return.= ','; }
            }
            $return.= ");\n";
         }
      }
      $return.="\n\n\n";
   }
    echo "</font>";
   //save file
   $handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
 
   fwrite($handle,$return);
   fclose($handle);
}

echo "<script language='JavaScript' type='text/javascript'>
		alert('RESPALDO DE LA BASE DE DATOS REALIZADO CON EXITO');		
		location='../vista/derecha.php?newProfsaes=7783276xebx3e6323263&fila=7evee7xbvc6eet';
		</script>";
?>

