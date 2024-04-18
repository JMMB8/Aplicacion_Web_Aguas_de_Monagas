<?php
echo "<table border='0' width='100%' bgcolor='#CCCCFF'>
<TR>
<TD><span class='Estilo1'>Nombre y Apellido</span></TD>
<TD><span class='Estilo1'>Tel&eacute;fono</span></TD>
</TR>

<TR>
<TD><input type='text' name='nombre' id='nombre' class='contact_form1' readonly value='$NOMBRE_CLIENTE'></TD>
<TD><input type='text' name='tlf' id='tlf' class='contact_form' readonly  value='$TLF_CLIENTE'></TD>
</TR>

<TR>
<TD><span class='Estilo1'>Correo Electr&oacute;nico</span></TD>
<TD><span class='Estilo1'>Direcci&oacute;n de habitaci&oacute;n</span></TD>
</TR>
<TR>
<TD>
<input type='text' name='correo' id='correo' class='contact_form1' readonly value='$CORREO_CLIENTE'>
</TD>
<TD>
<textarea name='dir' id='dir' class='contact_textareas' readonly onChange='javascript:this.value=this.value.toUpperCase();'>$DIRECC_CLIENTE</textarea>
</TD>
</TR>
	</table>";
?>
