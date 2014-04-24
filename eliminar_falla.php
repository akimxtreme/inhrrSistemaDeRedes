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
<form class="host" name="busqueda" method="post" action="" onsubmit="return buscar(this);">
<h1 class="host">Eliminar Falla</h1>
           
	<div class="organizar">
    <label class="host">Búsqueda</label>
    <select class="host" name="campo" id="campo" onchange="otro_f(this);">
    <option class="host">Seleccione...</option>
    <option class="host" value="nomb_host">Nombre de Host</option>
	<option class="host" value="nomb_usuario">Usuario</option>
    </select>
            </div>

<!-- Nombre del Host (nomb_host) -->
<div class="organizar" id="b_nomb_host">
<label class="host">Nombre de Host</label>
<select class="host" name="nomb_host" id="nomb_host" onchange="obligatorio(this);">
<option class="host">Seleccione...</option>
<?php
			// Selecciona de la tabla tipo_equipo los items disponibles
			$sql="SELECT distinct nomb_host FROM historico_host ORDER BY historico_host . nomb_host ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$nomb_host1=$row['nomb_host'];
echo "<option class='host' value='" .  $nomb_host1 . "'>" .  $nomb_host1 . '</option>';			
?>

<?php
}
?>
</select>
</div>



<!-- Personal (nomb_usuario) (nomb_usuario_otro) -->
<div class="organizar" id="b_nomb_usuario">
<label class="host">Personal</label>
<select class="host" name="nomb_usuario" id="nomb_usuario" onchange="otro(this);obligatorio(this);">
<option class="host">Seleccione...</option>
<?php

		// Selecciona de la tabla tipo_conexion los items disponibles
			$sql="SELECT distinct nomb_usuario from historico_host ORDER BY historico_host . nomb_usuario ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$nomb_usuario1=$row['nomb_usuario'];
							
?>
<option class="host" value="<?php echo $nomb_usuario1;?>"><?php echo $nomb_usuario1;?></option>
<?php
}
?>
</select>
</div>


            <div class="derecha">
            <input class="host_boton" type="submit" value="Buscar" name="busca"/>
            </div>
           
            </form>
            
<?php
if (@$_POST['busca']=='Buscar') {
	$campo= $_POST['campo'];
	$nomb_host=$_POST['nomb_host'];
	$gerencia=$_POST['gerencia'];
	$nomb_usuario=$_POST['nomb_usuario'];
	
?>
<table class="host">
	<tr class="host">
		<th class="host">Host</th>       
        <th class="host">Nombre de Usuario</th>
        <th class="host">Cédula</th>
        <th class="host">Nº de Falla</th>
        <th class="host">Fecha de la Falla</th>
        <th class="host">Ver Todo</th>
        
		
        </tr>
     <?php
    if ($campo=="nomb_host"){
	$sql="select * from historico_host where $campo like '$nomb_host'";
	}
	if ($campo=="nomb_usuario"){
	$sql="select * from historico_host where $campo like '$nomb_usuario'";
	}
	 /*******************/
	  $seleccion=mysql_query($sql,$conexion);
	  while ($row = mysql_fetch_array($seleccion)){
			$nomb_host_bd=$row['nomb_host'];
			$nomb_usuario_bd=$row['nomb_usuario'];
			$cedula_usuario_bd=$row['cedula_usuario'];
			$fecha_falla_bd=$row['fecha_falla'];
							
			?>
           
          
           <tr class="host">

                 <form action="eliminar_falla_2.php" method="get" >
                <td class="host"><?php echo $row['nomb_host']; ?></td>
				<td class="host"><?php echo $row['nomb_usuario']; ?></td>
				<td class="host"><?php echo $row['cedula_usuario']; ?></td>
                <td class="host"><?php echo "IF-00" . $row['id']; ?></td>
				<td class="host"><?php echo $row['fecha_falla']; ?></td>
				<td class="host">
                <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
                <input type="image" valign='middle' name='edita'  src='imagenes/eliminar.png' value="Editar" border="0"/>
                <div class="derecha">
            <!--<input type="submit" value="Editar" name="edita" />-->
            </div>
            </td>
                </form>
                
                
       <?php    
			
			
	  }
}
	
	  ?>
      </tr>
 
       
       </table>

</div>
<div class="host">

</div>
<!-- InstanceEndEditable -->

</div>
<div class="host">
<div class="pie">
<a class="pie" href="destruir.php" title="Cerrar Sesión">Cerrar Sesión</a>
</div>
</div>
</body>
<!-- InstanceEnd --></html>