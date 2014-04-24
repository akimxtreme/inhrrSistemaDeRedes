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

/*Agregar Host a la BD*/
// Variables del Formulario
$agrega=$_POST['agrega'];
isset($agrega);
if($agrega == 'Agregar'){
				# inicio - validaciones
				$nomb_host=$_POST['nomb_host'];
				$nomb_host = strtoupper($nomb_host);
				$tipo_equipo=$_POST['tipo_equipo'];
				$tipo_conexion=$_POST['tipo_conexion'];
				$gerencia=$_POST['gerencia'];
				$nomb_usuario=$_POST['nomb_usuario'];
				$cedula_usuario= $nomb_usuario;
				$nomb_usuario_otro=$_POST['nomb_usuario_otro'];
					if ($nomb_usuario=="Otro..."){
					$nomb_usuario=$nomb_usuario_otro;
					$nomb_usuario = strtoupper($nomb_usuario);
					$cedula_usuario='';
					$sql = "INSERT INTO host (nomb_host, tipo_equipo,tipo_conexion, unidad, nomb_usuario, cedula_usuario ) VALUE ('$nomb_host', '$tipo_equipo', '$tipo_conexion', '$gerencia', '$nomb_usuario', '$cedula_usuario')";
					$ingreso=mysql_query($sql,$conexion);
					}else {
						$sql="SELECT * FROM personal WHERE cedula = '$nomb_usuario'";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$cedula_usuario=$row['cedula'];	
						$nombres=$row['nombres'];
						$apellidos=$row['apellidos'];					
						$nomb_usuario = $nombres . " " . $apellidos;
						$sql = "INSERT INTO host (nomb_host, tipo_equipo,tipo_conexion, unidad, nomb_usuario, cedula_usuario ) VALUE ('$nomb_host', '$tipo_equipo', '$tipo_conexion', '$gerencia', '$nomb_usuario', '$cedula_usuario')";
						$ingreso=mysql_query($sql,$conexion);
						}
					}
					$sql="SELECT * FROM unidad WHERE codunidad = '$gerencia'";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$nombre_unidad=$row['unidad'];
						$sql="UPDATE host SET nombre_unidad='$nombre_unidad' WHERE nomb_host='$nomb_host'";
						$ingreso=mysql_query($sql,$conexion);
						}
						
				// Guardando Datos en la table log_host
				
				$sql="SELECT * FROM host WHERE nomb_host = '$nomb_host'";
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
						
				
				$accion='AGREGAR HOST';
				$cod_accion='1.1';
				date_default_timezone_set("America/Caracas" ) ; 
				$fecha_accion= date('d-m-Y');
				$hora_accion= date('h:i:s A');
				$sql = "INSERT INTO log_host (usuario, accion, cod_accion, fecha_accion, hora_accion, id_host, nomb_host, tipo_equipo, tipo_conexion, unidad, nombre_unidad, nomb_usuario, cedula_usuario) VALUE ('$usuario', '$accion', '$cod_accion', '$fecha_accion', '$hora_accion', '$id_host', '$nomb_host', '$tipo_equipo', '$tipo_conexion', '$unidad', '$nombre_unidad', '$nomb_usuario', '$cedula_usuario')";
				$ingreso=mysql_query($sql,$conexion);
				// mayúsculas
				
					/*echo ".....";
					echo $nomb_host;
					echo ".....";
					echo $tipo_equipo;
					echo ".....";
					echo $tipo_conexion;
					echo ".....";
					echo $gerencia;
					echo ".....";
					echo $nomb_usuario;
					*/
					
			// Agregando a la tabla host
			//$sql = "INSERT INTO host (nomb_host) VALUES ($nomb_host)";
			/*$sql = "INSERT INTO host (nomb_host, tipo_equipo,tipo_conexion, unidad, nomb_usuario, cedula_usuario ) VALUE ('$nomb_host', '$tipo_equipo', '$tipo_conexion', '$gerencia', '$nomb_usuario', '$cedula_usuario')";
			$ingreso=mysql_query($sql,$conexion);
			unset ($nomb_usuario,$tipo_equipo, $tipo_conexion, $gerencia,$nomb_usuario, $fecha_falla, $descripcion_falla, $solucion , $agrega );*/
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=agregar_host.php"></head></html>';
			?><script>alert("Host Agregado");</script><?
		
			}
			

if(mysql_error()){ 
	echo 'Error de Conexion de Base de datos<br/>';
}

?>
