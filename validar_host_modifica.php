<?php
include "conexion.php";
$u = $_GET['u'];
$o = $_GET['o'];

$sql="SELECT * FROM host WHERE nomb_host != '$o'";
$seleccion=mysql_query($sql,$conexion);
	while ($fila = mysql_fetch_array($seleccion)){
		if($fila['nomb_host'] == $_GET['u']){
			echo "<input class='host_2' id='host_disponible' value='Nombre de Host Utilizado' readonly='readonly'/>";
			}
		}
		
		
		
	
	
		





?>
