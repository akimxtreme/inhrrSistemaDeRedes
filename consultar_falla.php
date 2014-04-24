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
<h1 class="host">Consulta de Log</h1>
           
	<div class="organizar">
    <label class="host">Búsqueda</label>
    <select class="host" name="campo" id="campo" onchange="otro(this);">
    <option class="host">Seleccione...</option>
    <option class="host" value="log_host">Log (Módulo de Host)</option>
    <option class="host" value="log_falla">Log (Módulo de Fallas)</option>
    </select>
    </div>

    <div class="derecha">
    <input class="host_boton" type="submit" value="Buscar" name="busca"/>
    </div>
</form>
            
<?php
if (@$_POST['busca']=='Buscar') {
	$campo= $_POST['campo'];
			
?>
<table class="host">
	<tr class="host">
		<th class="host">Usuario</th>       
        <th class="host">Acción</th>
        <th class="host">Fecha de la Acción</th>
        <th class="host">Hora de la Acción</th>
        <th class="host">Codigo del Host</th>
        <th class="host">Ver todo</th>
		</tr>
     
<?php
$sql="select * from $campo";
    
	 /****************FALTAAAAAAAAAAAAAAAAAA***/
	  $seleccion=mysql_query($sql,$conexion);
	  while ($row = mysql_fetch_array($seleccion)){
			$usuario_bd=$row['usuario'];
			$accion_bd=$row['accion'];
			$fecha_accion_bd=$row['fecha_accion'];
			$hora_accion_bd=$row['hora_accion'];
			$id_host_bd=$row['id_host'];
			?>
           
          
           <tr class="host_2">

                 <form action="consultar_log_2.php" method="get" >
                <td class="host"><?php echo $usuario_bd; ?></td>
                <td class="host"><?php echo $accion_bd; ?></td>
                <td class="host"><?php echo $fecha_accion_bd; ?></td>
                <td class="host"><?php echo $hora_accion_bd; ?></td>
                <td class="host"><?php echo $id_host_bd; ?></td>
				
                <td class="host">
                <input type='hidden' name='id' value='<?php echo $id_host_bd; ?>'>
                <input type="image" valign='middle' name='edita'  src='imagenes/consultar.png' value="Editar" border="0"/>
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