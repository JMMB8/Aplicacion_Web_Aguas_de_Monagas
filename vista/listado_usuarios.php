<?php
{
?>
<center>
<table border="0" width="80%">
<TR>
<TD><span class="Estilo1">CONSULTA DE LAS CUENTAS DE USUARIOS</span></TD>
<TD align="right">
<A href="derecha.php" title="Salir">
<img src="../img/exit.jpg" width="90" height="60">
</A>
</TD>
</TR>
</table>
<table align="center" class="tablas">

<?php
if(isset($_POST['bus']) || isset($_GET['allusua'])){
//$numP=$_GET['Newestudiantes'];
?>
<tr>
<td colspan="6" bgcolor="#BBBBBB">
<?php


if(isset($_POST['bus'])){
$campo=$_POST['campo'];
//$senten="SELECT * FROM personal WHERE nombres LIKE '%$campo%' OR apellidos LIKE '%$campo%' ORDER BY nombres ASC";
}else
{
$senten="SELECT * FROM cuenta_usuario ORDER BY cedula ASC";
}
?>
</td>
</tr>
<?php
}
	$SQL1=mysql_query($senten);
	$total1=mysql_num_rows($SQL1);
?>
<tr>
<td colspan="6">
<b>Personal registrado: <?php echo "$total1"; ?></b>
</td>
</tr>
<tr bgcolor="#000066">
<td><font color="#FFFFFF"><b>NOMBRES</b></font></td>
<td><font color="#FFFFFF"><b>APELLIDOS</b></font></td>
<td><font color="#FFFFFF"><b>TIPO USUARIO</b></font></td>
<td><font color="#FFFFFF"><b>USUARIO</b></font></td>
<td align="center" colspan="2"><font color="#FF9F00"><b>ACCI&Oacute;N</b></font></td>
</tr>
<?php
	$c=0;
	while($ROWS=mysql_fetch_row($SQL1)){
	$c++;
if($c%2==0)
$color="#E9E9E9";
else
$color="#F5F5F5";
$consul_emple=mysql_query("SELECT * FROM personal WHERE cedula='$ROWS[1]'");
$CAMPOS_PERSONAL=mysql_fetch_row($consul_emple);
$NOMBRE_PERSONAL=$CAMPOS_PERSONAL[1];
	$APELLIDO_PERSONAL=$CAMPOS_PERSONAL[2];

	$resul = mysql_query("SELECT * FROM roles WHERE id_rol='$ROWS[2]'");
	$ROWS1=mysql_fetch_row($resul);
	?>
	<tr <?php echo "bgcolor='$color'"; ?>>
<td><b><?php echo "$NOMBRE_PERSONAL"; ?></b></td>
<td><b><?php echo "$APELLIDO_PERSONAL"; ?></b></td>
<td><b><?php echo "$ROWS1[1]"; ?></b></td>
<td><b><?php echo "$ROWS[3]"; ?></b></td>
<td align="center"><?php 
echo "
<A href='cuentas_usuarios.php?dropAlum=$ROWS[0]' title='Eliminar registro' onClick='return confirmar_eliminar3()'>
<img src='../img/eliminar.png'></A>";

 ?></td>
 
 <td align="center"><?php 
echo "
<A href='cuentas_usuarios.php?reinic=$ROWS[0]' title='Reiniciar clave' onClick='return confirmar_eliminar4()'>
<img src='../img/reinicio.gif'></A>";

 ?></td>
</tr>
	<?php
	}
?>
</table>
</center>
<?php
}
?>
