<?php
	{	
?>
<div id="menu">
<ul>
  <li class="nivel1"><a href="#" class="nivel1">Registros</a>

	<ul>

		<li><A href="../vista/operaciones_maquinarias.php?inic_maq=3rbfe6ft6b&TYPE=MAQUINARIAS" target="centro_bajo">Maquinarias</A></li>
		<!--<li><A href="../vista/operacionempleado.php?empleo=3rbfe6ft6b&TYPE=PERSONAL" target="centro_bajo">Personal</A></li>-->
		<li><A href="../vista/operacioncliente.php?cte=3rbfe6ft6b&TYPE=CLIENTE" target="centro_bajo">Clientes</A></li>
		<li><A href="../vista/operacionmaterial.php?mater=3rbfe6ft6b&TYPE=PLANTELES" target="centro_bajo">Material</A></li>
		
	</ul>

  </li>
<li class="nivel1"><a href="#" class="nivel1">Procesos</a>
<ul>
		<li><a href="../vista/buscarforAlquiler.php?forAlq=7376773h766r66r46r737&TYPE=USUARIOS">Alquilar</a></li>
		<!--<li><a href="../vista/buscarforAlquiler.php?searchAlq=7376773h766r66r46r737&TYPE=USUARIOS">Anular alquiler</a></li>-->
		
	</ul>  
  
</li>
  <li class="nivel1"><a href="#" class="nivel1">Consultar</a>
  <ul>
		<li><a href="../modelo/maquinarias.php?token=bfff565ew4r643vcb4646&listmaq=dgyd6w6747breytbyerewew673f&row=dg43c6bfbbb666r&sql=bf64646br6f66b34cs" target="_blank">Maquinarias</a></li>
		<li><a href="../modelo/nominapersonal.php?token=bfff565ew4r643vcb4646&listnom=dgyd6w6747breytbyerewew673f&row=dg43c6bfbbb666r&sql=bf64646br6f66b34cs" target="_blank">Personal</a></li>
		<li><a href="../modelo/clientela.php?token=bfff565ew4r643vcb4646&listcte=dgyd6w6747breytbyerewew673f&row=dg43c6bfbbb666r&sql=bf64646br6f66b34cs" target="_blank">Clientes</a></li>
		<li><a href="../modelo/lismaterial.php?token=bfff565ew4r643vcb4646&listmat=dgyd6w6747breytbyerewew673f&row=dg43c6bfbbb666r&sql=bf64646br6f66b34cs" target="_blank">Materiales</a></li>
	</ul> 
  
</li>
  
	<li class="nivel1"><a href="../pages/pagenotas.php?CONSULNOTAS=3rbfe6ft6b&TYPE=NOTAS" class="nivel1" target="centro_bajo">Reportes</a>
	<ul>
		<li><a href="../vista/form/generarReporte.php?optionf=1&TYPE=USUARIOS">Alquiler por fecha</a></li>
		<li><a href="../vista/form/generarReporte.php?optionm=7376773h766r66r46r737&TYPE=USUARIOS">Alquiler por mes</a></li>
		<li><a href="../vista/form/generarReporte.php?optiont=7376773h766r66r46r737&TYPE=USUARIOS">Tipo alquiler</a></li>
	</ul>
	
	</li>
	
	

 <li class="nivel1"><a href="../vista/centro.php" class="nivel1" onClick="return mensaje()">Respaldar B.D</a>
</li>

<li class="nivel1"><a href="#" target="centro_bajo" class="nivel1">Seguridad</a>
	<ul>
		
		<li><a href="../vista/form/formulario_cambiarClave.php?cambio=7376773h766r66r46r737&TYPE=USUARIOS">Cambiar Clave</a></li>
		
	</ul>
	</li>

<li class="nivel1"><a href="../cerrarSesion.php" class="nivel1" target="_top"><font color="#000066"><b>Cerrar sesi&oacute;n</b></font></a>

	<!--<ul>
	<li><A href="../pages/pagesecciones.php?newSecc=6374d3d6&file=ervce6rc6vbere6r&rows=83cbgdgettexgs&TYPE=RELACI&Oacute;N ASIGNATURA" target="centro_bajo">Asignaturas/A&ntilde;o</A></li>
	<li><A href="../pages/operaciones_estudiantes.php?gradoAlumno=3rbfe6ft6b&TYPE=ESTUDIANTES" target="centro_bajo">Reportes</A></li>
	</ul>
-->
</li>
</ul>
</div>

<?php
	}
		
?>
