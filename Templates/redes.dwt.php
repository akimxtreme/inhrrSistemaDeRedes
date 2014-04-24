<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="../imagenes/minilogo.png"/>
<link href="../css/host.css" rel="stylesheet" type="text/css" />
<script src="../js/host.js" type="text/javascript"></script>
<!-- TemplateBeginEditable name="doctitle" -->
<title>Host - Redes</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<!-- TemplateBeginEditable name="scripts" -->scripts<!-- TemplateEndEditable -->
<div class="host"><img src="../imagenes/banner.png" title="Sistema para el Control de Host" alt="Sistema para el Control de Host"/></div>
<div class="host">
<div id="menu">
<ul class="menu">
<li class="nivel1" class="principal"><a href="../principal.php" class="nivel1" id="principal"><img class="principal" src="../imagenes/principal.png" title="Principal"/></a>
  <li class="nivel1"><a href="#" class="nivel1">Host</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 1<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="../agregar_host.php">Agregar Host</a></li>
		<li><a href="../modificar_host.php">Modificar Host</a></li>
        <li><a href="../eliminar_host.php">Eliminar Host</a></li>
        <li><a href="../consultar_host.php">Consultar Host</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li class="nivel1"><a href="#" class="nivel1">Histórico de Fallas</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 2<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="../agregar_falla.php">Agregar Falla</a></li>
		<li><a href="../modificar_falla.php">Modificar Falla</a></li>
		<li><a href="../eliminar_falla.php">Eliminar Falla</a></li>
		<li><a href="../consultar_falla.php">Consultar Falla</a></li>
		
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Log</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 3<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="../consultar_log.php">Consultar Log</a></li>
        
		
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Cuentas</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 4<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="../agregar_cuenta.php">Agregar Cuenta</a></li>
		<li><a href="../modificar_cuenta.php">Modificar Cuenta</a></li>
		<li><a href="../eliminar_cuenta.php">Eliminar Cuenta</a></li>
		<li><a href="../consultat_cuenta.php">Consultar Cuenta</a></li>
	</ul>
<li class="nivel1"><a href="#" class="nivel1">Editar Formularios</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 4<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="../edita_formulario_host.php">Editar Formulario de Host</a></li>
		<li><a href="../edita_formulario_falla.php">Editar Formulario de Fallas</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</ul>
</div>
</div>
<div class="host"><!-- TemplateBeginEditable name="contenido" -->contenido<!-- TemplateEndEditable -->

</div>
<div class="host">
<div class="pie">
<a class="pie" href="../destruir.php" title="Cerrar Sesión">Cerrar Sesión</a>
</div>
</div>
</body>
</html>