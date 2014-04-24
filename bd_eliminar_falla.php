<?php
session_start();
?>
<link href="css/host.css" rel="stylesheet" type="text/css" />
<?php
$privilegio = $_SESSION['privilegio'];
$usuario =$_SESSION['usuario'];
switch($privilegio){
			case '': 
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';break;
			}
$id_1=$_POST['id_1'];
include "conexion.php";

/*Modificar Host */
// Variables del Formulario
$elimina=$_POST['elimina'];

if($elimina == 'Eliminar'){
				# inicio - validaciones
				
				// Guardando Datos en la table log_historico_host
				$sql1="SELECT * FROM historico_host WHERE id='$id_1'";
				$seleccion=mysql_query($sql1,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$id_host=$row['id'];
						$nomb_host=$row['nomb_host'];
						$nomb_usuario=$row['nomb_usuario'];
						$cedula_usuario=$row['cedula_usuario'];
						$fecha_falla=$row['fecha_falla'];
						$descripcion_falla=$row['descripcion_falla'];
						$solucion=$row['solucion'];
						}
						
				
				$accion='ELIMINAR FALLA';
				$cod_accion='2.3';
				date_default_timezone_set("America/Caracas" ) ; 
				$fecha_accion= date('d-m-Y');
				$hora_accion= date('h:i:s A');
				$sql = "INSERT INTO log_historico_host (usuario, accion, cod_accion, fecha_accion, hora_accion, id_historico_host, nomb_host, nomb_usuario, cedula_usuario, fecha_falla, descripcion_falla, solucion) VALUE ('$usuario', '$accion', '$cod_accion', '$fecha_accion', '$hora_accion', '$id_host', '$nomb_host', '$nomb_usuario', '$cedula_usuario', '$fecha_falla', '$descripcion_falla', '$solucion')";
				$ingreso=mysql_query($sql,$conexion);
							
					$sql="DELETE FROM historico_host WHERE id='$id_1'";
					$ingreso=mysql_query($sql,$conexion);
					echo '<html><head><meta http-equiv="REFRESH" content="0; url=eliminar_falla.php"></head></html>';
			?><script>alert("Falla Eliminada Exitosamente");</script><?
			}
			

if(mysql_error()){ 
	echo 'Error de Conexion de Base de datos<br/>';
}
?>
