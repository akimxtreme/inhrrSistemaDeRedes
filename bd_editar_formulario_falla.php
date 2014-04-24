<?php
session_start();
?>
<link href="css/host.css" rel="stylesheet" type="text/css" />
<?php
include "conexion.php";

$privilegio = $_SESSION['privilegio'];
$usuario = $_SESSION['usuario'];
switch($privilegio){
			case '': 
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';break;
			}


if (@$_POST['equipo']=='Ejecutar Acción') {
	$equipo0= $_POST['equipo0'];
	$nuevo=$_POST['nuevo'];
	$accion1=$_POST['accion1'];
	$modificar=$_POST['modificar'];
	$equipo0 = strtoupper($equipo0);
	$nuevo = strtoupper($nuevo);
	$modificar = strtoupper($modificar);
	
	if($equipo0 =="AGREGAR NUEVO..."){
		$sql3 = "INSERT INTO falla (falla) VALUE ('$nuevo')";
		$ingreso=mysql_query($sql3,$conexion);
		}else {
			if($accion1=="Modificar"){
				$sql3="UPDATE falla SET falla='$modificar' WHERE id='$equipo0'";	
				$ingreso=mysql_query($sql3,$conexion);
				}
			if($accion1=="Eliminar"){
				$sql3="DELETE FROM falla WHERE id='$equipo0'";				
				$ingreso=mysql_query($sql3,$conexion);
				}
			
			}
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=edita_formulario_falla.php"></head></html>';
			?><script>alert("Ejecución Exitosa");</script><?
	
}

if (@$_POST['conexion']=='Ejecutar Acción') {
	$conexion0= $_POST['conexion0'];
	$nuevo2=$_POST['nuevo2'];
	$accion2=$_POST['accion2'];
	$modificar2=$_POST['modificar2'];
	$conexion0 = strtoupper($conexion0);
	$nuevo2 = strtoupper($nuevo2);
	$modificar2 = strtoupper($modificar2);
	
	if($conexion0 =="AGREGAR NUEVO..."){
		$sql3 = "INSERT INTO solucion (solucion) VALUE ('$nuevo2')";
		$ingreso=mysql_query($sql3,$conexion);
		}else {
			if($accion2=="Modificar"){
				$sql3="UPDATE solucion SET solucion='$modificar2' WHERE id='$conexion0'";	
				$ingreso=mysql_query($sql3,$conexion);
				}
			if($accion2=="Eliminar"){
				$sql3="DELETE FROM solucion WHERE id='$conexion0'";				
				$ingreso=mysql_query($sql3,$conexion);
				}
			
			}
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=edita_formulario_falla.php"></head></html>';
			?><script>alert("Ejecución Exitosa");</script><?
	
}


if(mysql_error()){ 
	echo 'Error de Conexion de Base de datos<br/>';
}

?>
