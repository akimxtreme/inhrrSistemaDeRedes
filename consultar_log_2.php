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
<script type="text/javascript">
			function showselect(str){
				var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("dependiente").innerHTML=xmlhttp.responseText;
					 }
				  }
			  	xmlhttp.open("GET","dependiente_gerencia.php?c="+str,true);
				xmlhttp.send();
			}
		</script>
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

<?php
$id=$_GET['id'];
$tabla=$_GET['tabla'];
?>

<?php
if($tabla == "log_host"){
$sql="SELECT * FROM $tabla WHERE id_host='$id'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$usuario_bd=$row['usuario'];
				$accion_bd=$row['accion'];
				$fecha_accion_bd=$row['fecha_accion'];
				$hora_accion_bd=$row['hora_accion'];
				
				$id_host_bd=$row['id_host'];
				$nomb_host_bd=$row['nomb_host'];
				$tipo_equipo_bd=$row['tipo_equipo'];
				$tipo_conexion_bd=$row['tipo_conexion'];
				$unidad_bd=$row['unidad'];
				$nombre_unidad_bd=$row['nombre_unidad'];
				$nomb_usuario_bd=$row['nomb_usuario'];
				$cedula_usuario_bd=$row['cedula_usuario'];
				}
echo "<form class='host_consulta' action=''  method='post'>";
// Titulo
echo "<h1 class='host'>Accion:" .  $accion_bd . "</h1>";

// Usuario Administrador (usuario_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Usuario Administrador</label>";
if ($usuario_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $usuario_bd . "'/>"; }
echo "</div>";

// Acción (accion_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Acción</label>";
if ($accion_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $accion_bd . "'/>"; }
echo "</div>";

// Fecha de Ejecución (fecha_accion_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Fecha de Ejecución</label>";
if ($fecha_accion_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $fecha_accion_bd . "'/>"; }
echo "</div>";

// Hora de Ejecución (hora_accion_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Hora de Ejecución</label>";
if ($hora_accion_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $hora_accion_bd . "'/>"; } 
echo "</div>";

// Nombre del Host (nomb_host)
echo "<div class='organizar'>";
echo "<label class='host'>Nombre de Host</label>";
if ($nomb_host_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $nomb_host_bd . "'/>"; }
echo "</div>";
// Tipo de Equipo (tipo_equipo)
echo "<div class='organizar'>";
echo "<label class='host'>Tipo de Equipo</label>";
if ($tipo_equipo_bd!='') {echo "<input class='host_2' type='text' name='tipo_equipo' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $tipo_equipo_bd . "'/>"; } 
echo "</div>";
// Tipo de Conexión (tipo_conexion)
echo "<div class='organizar'>";
echo "<label class='host'>Tipo de Conexión</label>";
if ($tipo_conexion_bd!='') {echo "<input class='host_2' type='text' name='tipo_conexion' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $tipo_conexion_bd . "'/>"; }
echo "</div>";
// Unidad (gerencia)
echo "<div class='organizar'>";
echo "<label class='host'>Unidad</label>";
if ($unidad_bd!='') {echo "<input class='host_2' type='text' name='gerencia' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $nombre_unidad_bd . "'/>"; }
echo "</div>";
// Personal (nomb_usuario) (nomb_usuario_otro)
echo "<div class='organizar'>";
echo "<label class='host'>Personal</label>";
if ($nomb_usuario_bd!='') {echo "<input class='host_2' type='text' name='nomb_usuario' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $nomb_usuario_bd . "'/>"; }
echo "</div>";
// Personal (cedula_usuario) 
echo "<div class='organizar'>";
echo "<label class='host'>Cédula de Personal</label>";
if ($cedula_usuario_bd!='') {echo "<input class='host_2' type='text' name='nomb_usuario' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $cedula_usuario_bd . "'/>"; } 
echo "</div>";

echo "<div class='organizar'>";
echo "<textarea class='host' name='nomb_usuario_otro' id='nomb_usuario_otro' onfocus='indique(this);' onblur='obligatorio(this);'></textarea>";
echo "</div>";
echo "</form>";				


}
if($tabla == "log_historico_host"){
$sql="SELECT * FROM $tabla WHERE id='$id'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$usuario_bd=$row['usuario'];
				$accion_bd=$row['accion'];
				$fecha_accion_bd=$row['fecha_accion'];
				$hora_accion_bd=$row['hora_accion'];
				
				$id_historico=$row['id'];
				$id_historico_host=$row['id_historico_host'];
				$nomb_host_bd=$row['nomb_host'];
				$fecha_falla=$row['fecha_falla'];
				$descripcion_falla=$row['descripcion_falla'];
				$solucion=$row['solucion'];
				$nomb_usuario_bd=$row['nomb_usuario'];
				$cedula_usuario_bd=$row['cedula_usuario'];
				}
echo "<form class='host_consulta' action=''  method='post'>";
// Titulo
echo "<h1 class='host'>Accion: " .  $accion_bd . "</h1>";

// Usuario Administrador (usuario_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Usuario Administrador</label>";
if ($usuario_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $usuario_bd . "'/>"; }
echo "</div>";

// Acción (accion_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Acción</label>";
if ($accion_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $accion_bd . "'/>"; }
echo "</div>";

// Fecha de Ejecución (fecha_accion_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Fecha de Ejecución</label>";
if ($fecha_accion_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $fecha_accion_bd . "'/>"; }
echo "</div>";

// Hora de Ejecución (hora_accion_bd)
echo "<div class='organizar'>";
echo "<label class='host'>Hora de Ejecución</label>";
if ($hora_accion_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $hora_accion_bd . "'/>"; } 
echo "</div>";

// Número de Histórico (nomb_host)
echo "<div class='organizar'>";
echo "<label class='host'>Número de Histórico</label>";
if ($id_historico!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $id_historico . "'/>"; }
echo "</div>";

// Código de la Falla (nomb_host)
echo "<div class='organizar'>";
echo "<label class='host'>Código de la Falla</label>";
if ($id_historico_host!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $id_historico_host . "'/>"; }
echo "</div>";

// Nombre del Host (nomb_host)
echo "<div class='organizar'>";
echo "<label class='host'>Nombre de Host</label>";
if ($nomb_host_bd!='') {echo "<input class='host_2' type='text' name='nomb_host' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $nomb_host_bd . "'/>"; }
echo "</div>";
// Fecha de la Falla (fecha_falla)
echo "<div class='organizar'>";
echo "<label class='host'>Fecha de la Falla</label>";
if ($fecha_falla!='') {echo "<input class='host_2' type='text' name='tipo_equipo' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $fecha_falla . "'/>"; } 
echo "</div>";
// Descripción de la Falla (descripcion_falla)
echo "<div class='organizar'>";
echo "<label class='host'>Descripción de la Falla</label>";
if ($descripcion_falla!='') {echo "<input class='host_2' type='text' name='tipo_conexion' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $descripcion_falla . "'/>"; }
echo "</div>";
// Solución (solucion)
echo "<div class='organizar'>";
echo "<label class='host'>Solución</label>";
if ($solucion!='') {echo "<input class='host_2' type='text' name='gerencia' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $solucion . "'/>"; }
echo "</div>";
// Personal (nomb_usuario) (nomb_usuario_otro)
echo "<div class='organizar'>";
echo "<label class='host'>Personal</label>";
if ($nomb_usuario_bd!='') {echo "<input class='host_2' type='text' name='nomb_usuario' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $nomb_usuario_bd . "'/>"; }
echo "</div>";
// Personal (cedula_usuario) 
echo "<div class='organizar'>";
echo "<label class='host'>Cédula de Personal</label>";
if ($cedula_usuario_bd!='') {echo "<input class='host_2' type='text' name='nomb_usuario' id='nomb_host' disabled='disabled' maxlength='8' onblur='obligatorio(this);' value='" . $cedula_usuario_bd . "'/>"; } 
echo "</div>";

echo "<div class='organizar'>";
echo "<textarea class='host' name='nomb_usuario_otro' id='nomb_usuario_otro' onfocus='indique(this);' onblur='obligatorio(this);'></textarea>";
echo "</div>";
echo "</form>";				
}


				
		

?>


<!-- InstanceEndEditable -->

</div>
<div class="host">
<div class="pie">
<a class="pie" href="destruir.php" title="Cerrar Sesión">Cerrar Sesión</a>
</div>
</div>
</body>
<!-- InstanceEnd --></html>