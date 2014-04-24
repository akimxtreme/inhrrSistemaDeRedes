<?php
echo '<select class="host" name="nomb_usuario" id="nomb_usuario" onchange="otro(this);obligatorio(this);">';
include "conexion.php";

$sql="SELECT * FROM personal WHERE tipo='E' or tipo='V' or tipo='O' ORDER BY personal . nombres ASC"  ;
$seleccion=mysql_query($sql,$conexion);
	while ($fila = mysql_fetch_array($seleccion)){
		if($fila['codunifisica'] == $_GET['c']){
			
				echo "<option class='host'" . "value=" .$fila['cedula'] . ">" .$fila['nombres']. ' '. $fila['apellidos']. "</option>";
		}
		
	
}

if("Seleccione..." == $_GET['c']){
			
				echo "<option class='host'>Seleccione...</option>";
				
		}
echo "<option class='host' id='otro_nomb' change='otro(this);'>Otro...</option>";
echo '</select>';




?>
