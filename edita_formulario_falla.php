<?php
session_start();
?>
<?php
$privilegio = $_SESSION['privilegio'];
$usuario =$_SESSION['usuario'];
switch($privilegio){
			case '': 
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';break;
			}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/redes.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="imagenes/minilogo.png"/>
<link href="css/host.css" rel="stylesheet" type="text/css" />
<script src="js/host.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Host - Redes</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!-- InstanceBeginEditable name="scripts" -->
<script src="js/host.js" type="text/javascript"></script>
<link href="css/calendario.css" type="text/css" rel="stylesheet">
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-es.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>
<?php
include "conexion.php";
?>

<!-- InstanceEndEditable -->
<div class="host"><img src="imagenes/banner.png" title="Sistema para el Control de Host" alt="Sistema para el Control de Host"/></div>
<div class="host">
<div id="menu">
<ul class="menu">
<li class="nivel1" class="principal"><a href="principal.php" class="nivel1" id="principal"><img class="principal" src="imagenes/principal.png" title="Principal"/></a>
  <li class="nivel1"><a href="#" class="nivel1">Host</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 1<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="agregar_host.php">Agregar Host</a></li>
		<li><a href="modificar_host.php">Modificar Host</a></li>
        <li><a href="eliminar_host.php">Eliminar Host</a></li>
        <li><a href="consultar_host.php">Consultar Host</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li class="nivel1"><a href="#" class="nivel1">Histórico de Fallas</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 2<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="agregar_falla.php">Agregar Falla</a></li>
		<li><a href="modificar_falla.php">Modificar Falla</a></li>
		<li><a href="eliminar_falla.php">Eliminar Falla</a></li>
		<li><a href="consultar_falla.php">Consultar Falla</a></li>
		
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Log</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 3<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="consultar_log.php">Consultar Log</a></li>
        
		
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Cuentas</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 4<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="agregar_cuenta.php">Agregar Cuenta</a></li>
		<li><a href="modificar_cuenta.php">Modificar Cuenta</a></li>
		<li><a href="eliminar_cuenta.php">Eliminar Cuenta</a></li>
		<li><a href="consultat_cuenta.php">Consultar Cuenta</a></li>
	</ul>
<li class="nivel1"><a href="#" class="nivel1">Editar Formularios</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 4<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="edita_formulario_host.php">Editar Formulario de Host</a></li>
		<li><a href="edita_formulario_falla.php">Editar Formulario de Fallas</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</ul>
</div>
</div>
<div class="host"><!-- InstanceBeginEditable name="contenido" -->
<form class="host" action="bd_editar_formulario_falla.php" onsubmit="return agregar_equipo(this);" method="post">
<!-- Titulo -->
<h1 class="host">Fallas</h1>

<!-- Tipo de Equipo (tipo_equipo) -->
<div class="organizar">
<label class="host">Fallas</label>
<select class="host" name="equipo0" id="equipo0" onchange="obligatorio(this);accion(this);">
<option class="host">Seleccione...</option>
<?php
			// Selecciona de la tabla tipo_equipo los items disponibles
			$sql="SELECT * FROM falla";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$falla1=$row['falla'];
			$id_falla1=$row['id'];
echo "<option class='host' value='" .  $id_falla1 . "'>" .  $falla1 . '</option>';			
?>

<?php
}
?>
<option class="host">Agregar Nuevo...</option>
</select>
</div>
<!-- Agregar Nuevo (nuevo) -->
<div class="organizar" id="b_tipo_equipo">
<label class="host">Agregar Nuevo</label>
<input class="host" type="text" name="nuevo" id="nuevo" onblur="obligatorio(this);"/>
</div>
<!-- Acción (accion1) -->
<div class="organizar" id="equipo1">
<label class="host">Acción</label>
<select class="host" name="accion1" id="accion1" onchange="obligatorio(this);accion(this);">
<option class="host">Seleccione...</option>
<option class="host" value="Modificar">Modificar</option>
<option class="host">Eliminar</option>
</select>
</div>
<!-- Ingrese (modificar) -->
<div class="organizar" id="b_tipo_equipo2">
<label class="host">Ingrese</label>
<input class="host" type="text" name="modificar" id="modificar" onblur="obligatorio(this);"/>
</div>

<!-- ENVIAR -->
<div class="derecha">
<input class="host_boton" type="submit" value="Ejecutar Acción" name="equipo"/>
</div>
</form>

<div class="host"></div>
<form class="host" action="bd_editar_formulario_falla.php" onsubmit="return agregar_conexion(this);" method="post">
<!-- Titulo -->
<h1 class="host">Soluciones</h1>

<!-- Tipo de Conexión (conexion0) -->
<div class="organizar">
<label class="host">Soluciones</label>
<select class="host" name="conexion0" id="conexion0" onchange="obligatorio(this);accion(this);">
<option class="host">Seleccione...</option>
<?php
			// Selecciona de la tabla tipo_conexion los items disponibles
			$sql="SELECT * FROM solucion";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$solucion1=$row['solucion'];
			$id_solucion1=$row['id'];
echo "<option class='host' value='" .  $id_solucion1 . "'>" .  $solucion1 . '</option>';			
?>

<?php
}
?>
<option class="host">Agregar Nuevo...</option>
</select>
</div>
<!-- Agregar Nuevo (nuevo) -->
<div class="organizar" id="b_tipo_conexion">
<label class="host">Agregar Nuevo</label>
<input class="host" type="text" name="nuevo2" id="nuevo2" onblur="obligatorio(this);"/>
</div>
<!-- Acción (accion1) -->
<div class="organizar" id="conexion1">
<label class="host">Acción</label>
<select class="host" name="accion2" id="accion2" onchange="obligatorio(this);accion(this);">
<option class="host">Seleccione...</option>
<option class="host" value="Modificar">Modificar</option>
<option class="host">Eliminar</option>
</select>
</div>
<!-- Ingrese (modificar) -->
<div class="organizar" id="b_tipo_conexion2">
<label class="host">Ingrese</label>
<input class="host" type="text" name="modificar2" id="modificar2" onblur="obligatorio(this);"/>
</div>

<!-- ENVIAR -->
<div class="derecha">
<input class="host_boton" type="submit" value="Ejecutar Acción" name="conexion"/>
</div>
</form>

<!-- InstanceEndEditable -->

</div>
<div class="host">
<div class="pie">
<a class="pie" href="destruir.php" title="Cerrar Sesión">Cerrar Sesión</a>
</div>
</div>
</body>
<!-- InstanceEnd --></html>