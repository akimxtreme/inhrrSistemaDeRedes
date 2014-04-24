<?php
session_start();
?>
<link href="css/host.css" rel="stylesheet" type="text/css" />
<?php
$id_1=$_POST['id_1'];
include "conexion.php";
$privilegio = $_SESSION['privilegio'];
$usuario =$_SESSION['usuario'];
switch($privilegio){
			case '': 
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';break;
			}

/*Modificar Host */
// Variables del Formulario
$elimina=$_POST['elimina'];

if($elimina == 'Eliminar'){
	
				// Guardando Datos en la table log_host
				
				$sql="SELECT * FROM host WHERE id = '$id_1'";
				$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$id_host=$row['id'];
						$nomb_host=$row['nomb_host'];
						$tipo_equipo=$row['tipo_equipo'];
						$tipo_conexion=$row['tipo_conexion'];
						$unidad=$row['unidad'];
						$nombre_unidad=$row['nombre_unidad'];
						$nomb_usuario=$row['nomb_usuario'];
						$cedula_usuario=$row['cedula_usuario'];
						}
						
				
				$accion='ELIMINAR HOST';
				$cod_accion='1.3';
				date_default_timezone_set("America/Caracas") ; 
				$fecha_accion= date('d-m-Y');
				$hora_accion= date('h:i:s A');
				$sql = "INSERT INTO log_host (usuario, accion, cod_accion, fecha_accion, hora_accion, id_host, nomb_host, tipo_equipo, tipo_conexion, unidad, nombre_unidad, nomb_usuario, cedula_usuario) VALUE ('$usuario', '$accion', '$cod_accion', '$fecha_accion', '$hora_accion', '$id_host', '$nomb_host', '$tipo_equipo', '$tipo_conexion', '$unidad', '$nombre_unidad', '$nomb_usuario', '$cedula_usuario')";
				$ingreso=mysql_query($sql,$conexion);	
	
	
				# inicio - validaciones
							
					$sql="DELETE FROM host WHERE id='$id_1'";
					$ingreso=mysql_query($sql,$conexion);
					echo '<html><head><meta http-equiv="REFRESH" content="0; url=eliminar_host.php"></head></html>';
			?><script>alert("Host Eliminado");</script><?
			}
			

if(mysql_error()){ 
	echo 'Error de Conexion de Base de datos<br/>';
}
?>
