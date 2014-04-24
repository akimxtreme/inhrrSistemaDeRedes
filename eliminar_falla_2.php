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
$sql="SELECT * FROM historico_host  WHERE id='$id'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_array($seleccion)){
				$nomb_host_bd=$row['nomb_host'];
				$nomb_usuario_bd=$row['nomb_usuario'];
				$cedula_usuarion_bd=$row['cedula_usuario'];
				$fecha_falla_bd=$row['fecha_falla'];
				$descripcion_falla_bd=$row['descripcion_falla'];
				$solucion_bd=$row['solucion'];
				$administrador_bd=$row['administrador'];
				}
			


		

?>

<form class="host" action="bd_eliminar_falla.php" onsubmit="return editar_f(this);" method="post">
<!-- Titulo -->
<h1 class="host">Modificar Falla</h1>


<!-- Nombre del Host (nomb_host) -->
<div class="organizar">
<label class="host_sub">Nombre de Host</label>
<select class="host" name="nomb_host" id="nomb_host"  onchange="otro(this);obligatorio(this);">
<?php if ($nomb_host_bd!='') {
			echo "<option class='host'value='"; echo $nomb_host_bd; echo "'>"; echo $nomb_host_bd; echo "</option>";
			//echo "<option class='host'>Seleccione...</option>";
			$sql="SELECT * FROM host WHERE nomb_host !='$nomb_host_bd' ORDER BY host . nomb_host ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$nomb_host1=$row['nomb_host'];
			$tipo_equipo1=$row['tipo_equipo'];
			echo "<option class='host' value='" .  $nomb_host1 . "'>" . $nomb_host1 . " - - " . "(".$tipo_equipo1. ")" . '</option>';			
			}
			} 
?>
</select>
<!-- Fecha (fecha_falla) -->
    <div class="organizar">
	<label class="host_sub">Fecha</label>
    <?php if ($fecha_falla_bd!='') {
	echo "<input class='host' type='text' name='fecha_falla' id='ingreso' readonly='readonly' id='lanzador' onblur='obligatorio(this);' value='" . $fecha_falla_bd . "'/>";
	} ?>
  
    <!-- script que define y configura el calendario--> 
	<script type="text/javascript"> 
   		Calendar.setup({ 
    	inputField     :    "ingreso",     // id del campo de texto 
     	ifFormat     :     "%d-%m-%Y",     // formato de la fecha que se escriba en el campo de texto 
     	button     :    "lanzador"     // el id del botón que lanzará el calendario 
		}); 
	</script>
    </div>
<!-- Descripción de la Falla (descripcion_falla) -->
<div class="organizar">
<label class="host_sub">Descripción de la Falla:</label>
<select class="host" name="descripcion_falla" id="descripcion_falla"  onchange="otro(this);obligatorio(this);">
<?php if ($descripcion_falla_bd!='') {
			echo "<option class='host'value='"; echo $descripcion_falla_bd; echo "'>"; echo $descripcion_falla_bd; echo "</option>";
			echo "<option class='host'>Seleccione...</option>";
			$sql="SELECT distinct falla FROM falla WHERE falla !='$descripcion_falla_bd' ORDER BY falla . falla ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				echo "<option class='host'>".$row['falla']. "</option>";
			}
			
			} 
?>
</select>
</div>

<!-- Solución (solucion) -->
<div class="organizar">
<label class="host_sub">Solución:</label>
<select class="host" name="solucion" id="solucion"  onchange="otro(this);obligatorio(this);">
<?php if ($solucion_bd!='') {
			echo "<option class='host'value='"; echo $solucion_bd; echo "'>"; echo $solucion_bd; echo "</option>";
			echo "<option class='host'>Seleccione...</option>";
			$sql="SELECT distinct solucion FROM solucion WHERE solucion !='$solucion_bd' ORDER BY solucion . solucion ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			echo "<option class='host'>".$row['solucion']. "</option>";
			}
			
			} 
?>
</select>
</div>
<!-- ENVIAR -->
<div class="derecha">
<input class="host_boton" type="hidden" value="<?php echo $id; ?>" name="id_1"/>
<input class="host_boton_elimina" type="submit" value="Eliminar" name="elimina"/>
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