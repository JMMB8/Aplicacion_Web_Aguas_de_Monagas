<?php
//conexion con el servidor
$CLAVE="";
$conexion=mysql_connect("localhost","root","$CLAVE") or die ("NO SE PUDO CONECTAR A LA BASE DE DATOS");
//Selección de la BD
mysql_select_db("aguasdemonagas_casos", $conexion) or die ("NO SE SELECCIONO NINGUNA BASE DE DATOS"); 

?>
 

