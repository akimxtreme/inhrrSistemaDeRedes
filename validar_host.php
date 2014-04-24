<?php
include "conexion.php";
$u = $_GET['u'];


$sql="SELECT * FROM host WHERE nomb_host= '$u'";
$seleccion=mysql_query($sql,$conexion);
	while ($fila = mysql_fetch_array($seleccion)){
		$nomb_host=$fila['nomb_host'];
		if($nomb_host=$u){
			
			echo "<input class='host_2' id='host_disponible' value='Nombre de Host Utilizado' readonly='readonly'/>";
			}
			
		}
		
		
		
	
	
		





?>
