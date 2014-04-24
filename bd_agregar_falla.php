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
				$fecha_falla=$_POST['fecha_falla'];
				$descripcion_falla=$_POST['descripcion_falla'];
				$descripcion_falla_otro=$_POST['descripcion_falla_otro'];
					if ($descripcion_falla=="Otro..."){
					$descripcion_falla=$descripcion_falla_otro;
					}
				$solucion=$_POST['solucion'];
				$solucion_otro=$_POST['solucion_otro'];
					if ($solucion=="Otro..."){
					$solucion=$solucion_otro;
					}
				$sql="SELECT * FROM host WHERE nomb_host='$nomb_host'";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$nomb_usuario=$row['nomb_usuario'];
			$cedula_usuario=$row['cedula_usuario'];
			global $nomb_usuario;
			global $cedula_usuario;
			}
				
				
				
			$sql = "INSERT INTO historico_host (nomb_host, nomb_usuario, cedula_usuario, fecha_falla, descripcion_falla, solucion, administrador) VALUE ('$nomb_host', '$nomb_usuario', '$cedula_usuario', '$fecha_falla', '$descripcion_falla', '$solucion', '$usuario')";
			$ingreso=mysql_query($sql,$conexion);
			
			// Log de fallas
			
			// Guardando Datos en la table log_host
			
				 $sql = "SELECT * FROM historico_host";  // sentencia sql
   	 			 $ingreso = mysql_query($sql,$conexion);
   				 $num = mysql_num_rows($ingreso); // obtenemos el número de filas
				 				 		 				
				$sql1="SELECT * FROM historico_host WHERE id='$num'";
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
						
				
				$accion='AGREGAR FALLA';
				$cod_accion='2.1';
				date_default_timezone_set("America/Caracas" ) ; 
				$fecha_accion= date('d-m-Y');
				$hora_accion= date('h:i:s A');
				$sql = "INSERT INTO log_historico_host (usuario, accion, cod_accion, fecha_accion, hora_accion, id_historico_host, nomb_host, nomb_usuario, cedula_usuario, fecha_falla, descripcion_falla, solucion) VALUE ('$usuario', '$accion', '$cod_accion', '$fecha_accion', '$hora_accion', '$id_host', '$nomb_host', '$nomb_usuario', '$cedula_usuario', '$fecha_falla', '$descripcion_falla', '$solucion')";
				$ingreso=mysql_query($sql,$conexion);
			
			
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=agregar_falla.php"></head></html>';
			?><script>alert("Host de Falla Agregado");</script><?
		
			}
			

if(mysql_error()){ 
	echo 'Error de Conexion de Base de datos<br/>';
}

?>
