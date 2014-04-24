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

include "conexion.php";
$id_1=$_POST['id_1'];
/*Modificar Host */
// Variables del Formulario
$edita=$_POST['edita'];
if($edita == 'Modificar'){
				# inicio - validaciones
				$nomb_host=$_POST['nomb_host'];
				$nomb_host = strtoupper($nomb_host);
				$fecha_falla=$_POST['fecha_falla'];
				$descripcion_falla=$_POST['descripcion_falla'];
				$solucion=$_POST['solucion'];
				
				$sql1="SELECT * FROM host WHERE nomb_host='$nomb_host'";
				$seleccion=mysql_query($sql1,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$nomb_usuario=$row['nomb_usuario'];
						$cedula_usuario=$row['cedula_usuario'];
						}
				
				
				
						$sql="UPDATE historico_host SET nomb_host='$nomb_host', fecha_falla='$fecha_falla', descripcion_falla='$descripcion_falla', solucion='$solucion', nomb_usuario='$nomb_usuario', cedula_usuario='$cedula_usuario'  WHERE id='$id_1'";
						$ingreso=mysql_query($sql,$conexion);
						
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
						
				
				$accion='MODIFICAR FALLA';
				$cod_accion='2.2';
				date_default_timezone_set("America/Caracas" ) ; 
				$fecha_accion= date('d-m-Y');
				$hora_accion= date('h:i:s A');
				$sql = "INSERT INTO log_historico_host (usuario, accion, cod_accion, fecha_accion, hora_accion, id_historico_host, nomb_host, nomb_usuario, cedula_usuario, fecha_falla, descripcion_falla, solucion) VALUE ('$usuario', '$accion', '$cod_accion', '$fecha_accion', '$hora_accion', '$id_host', '$nomb_host', '$nomb_usuario', '$cedula_usuario', '$fecha_falla', '$descripcion_falla', '$solucion')";
				$ingreso=mysql_query($sql,$conexion);
						
				
					
			
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=modificar_falla.php"></head></html>';
			?><script>alert("Modificado Exitosamente");</script><?
			}
			

if(mysql_error()){ 
	echo 'Error de Conexion de Base de datos<br/>';
}
?>
