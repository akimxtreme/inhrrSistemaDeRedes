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
<script type="text/javascript">
			function validar_host(str){
				var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("validar_host").innerHTML="";
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
					 document.getElementById("validar_host").innerHTML=xmlhttp.responseText;
					 }
				  }
			  	xmlhttp.open("GET",'validar_host_modifica.php?u='+ document.getElementById("nomb_host").value+'&o='+ document.getElementById("nombre_host").value);
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
?>

<?php
$sql="SELECT * FROM host  WHERE id='$id'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$nomb_host_bd=$row['nomb_host'];
				$tipo_equipo_bd=$row['tipo_equipo'];
				$tipo_conexion_bd=$row['tipo_conexion'];
				$unidad_bd=$row['unidad'];
				$nombre_unidad_bd=$row['nombre_unidad'];
				$nomb_usuario_bd=$row['nomb_usuario'];
				$cedula_usuario_bd=$row['cedula_usuario'];
				}
				

if(@$_POST['planilla_completa']=='Agregar'){
	if($nombrebs!='' & $sector_pertenece!=''){
		$sql="UPDATE datos_de_banco_sangre SET nombre='$nombre' WHERE usuario='$usuario'";	
		$ingreso=mysql_query($sql,$conexion);
		
		}
}
		

?>

<form class="host" action="bd_modificar_host.php" onsubmit="return agregar(this);" method="post">
<!-- Titulo -->
<h1 class="host">Editar Host</h1>


<!-- Nombre del Host (nomb_host) -->
<div class="organizar">
<label class="host">Nombre de Host</label>
<?php if ($nomb_host_bd!='') {
	echo "<input class='host' type='text' name='nomb_host' id='nomb_host' maxlength='8' onblur='obligatorio(this);' onkeyup='validar_host(this.value);' value='" . $nomb_host_bd . "'/>";
	echo "<input class='host' type='hidden' id='nombre_host' readonly='readonly' value='" . $nomb_host_bd . "'/>";
	} ?>
<div id="validar_host"><input class='host_2' id='host_disponible' readonly='readonly' /></div>
</div>

<!-- Tipo de Equipo (tipo_equipo) -->
<div class="organizar">
<label class="host">Tipo de Equipo</label>
<select class="host" name="tipo_equipo" id="tipo_equipo" onchange="obligatorio(this);">
<?php if ($tipo_equipo_bd!='') echo "<option class='host'value='"; echo $tipo_equipo_bd; echo "'>"; echo $tipo_equipo_bd; echo "</option>"; ?>
<option class="host">Seleccione...</option>
<?php
			// Selecciona de la tabla tipo_equipo los items disponibles
			$sql="SELECT * FROM tipo_equipo";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$tipo_equipo1=$row['tipo_equipo'];
echo "<option class='host' value='" .  $tipo_equipo1 . "'>" .  $tipo_equipo1 . '</option>';			
?>

<?php
}
?>
</select>
</div>

<!-- Tipo de Conexión (tipo_conexion) -->
<div class="organizar">
<label class="host">Tipo de Conexión</label>
<select class="host" name="tipo_conexion" id="tipo_conexion" onchange="obligatorio(this);">
<?php if ($tipo_conexion_bd!='') echo "<option class='host'value='"; echo $tipo_conexion_bd; echo "'>"; echo $tipo_conexion_bd; echo "</option>"; ?>
<option class="host">Seleccione...</option>
<?php
			// Selecciona de la tabla tipo_conexion los items disponibles
			$sql="SELECT * FROM tipo_conexion";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$tipo_conexion1=$row['tipo_conexion'];
				
?>
<option class="host" value="<?php echo $tipo_conexion1;?>"><?php echo $tipo_conexion1;?></option>
<?php
}
?>
</select>
</div>

<!-- Unidad (gerencia) -->
<div class="organizar">
<label class="host">Unidad</label>
<select class="host" name="gerencia" id="gerencia" onChange="showselect(this.value);obligatorio(this);">
<?php if ($unidad_bd!='') echo "<option class='host'value='"; echo $unidad_bd; echo "'>"; echo $nombre_unidad_bd; echo " (" . $unidad_bd . ")"; echo "</option>"; ?>
<?php

		// Selecciona de la tabla tipo_conexion los items disponibles
			$sql="SELECT * FROM unidad ORDER BY unidad . unidad ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$unidad=$row['unidad'];
			$codunidad=$row['codunidad'];
				
?>
<option class="host" value="<?php echo $codunidad;?>"><?php echo $unidad;?><?php echo " (" . $codunidad . ")";?></option>
<?php
}
?>

</select>
</div>

<!-- Personal (nomb_usuario) (nomb_usuario_otro) -->
<div class="organizar">
<label class="host">Personal</label>
<div id="dependiente">
<select class="host" name="nomb_usuario" id="nomb_usuario"  onchange="otro(this);obligatorio(this);">
<?php if ($nomb_usuario_bd!='') {
			echo "<option class='host'value='"; echo $cedula_usuario_bd; echo "'>"; echo $nomb_usuario_bd; echo "</option>";
			$sql= "SELECT * FROM personal WHERE codunidad LIKE '$unidad_bd' AND cedula != '$cedula_usuario_bd'";
			//$sql="SELECT * FROM personal WHERE  ORDER BY unidad . unidad ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			echo "<option class='host' value='". $row['cedula'].  "'>".$row['nombres']. ' '. $row['apellidos']. "</option>";
			}
			echo "<option class='host' id='otro_nomb' change='otro(this);'>Otro...</option>";
			} 
?>
</select>
</div>
</div>
<div class="organizar">
<textarea class="host" name="nomb_usuario_otro" id="nomb_usuario_otro" onfocus="indique(this);" onblur="obligatorio(this);"></textarea>
</div>
<!-- ENVIAR -->
<div class="derecha">
<input class="host_boton" type="hidden" value="<?php echo $id; ?>" name="id_1"/>
<input class="host_boton" type="submit" value="Modificar" name="edita"/>
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