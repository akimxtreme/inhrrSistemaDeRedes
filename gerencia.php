<?php
include "conexion.php";
		// Selecciona de la tabla tipo_conexion los items disponibles
			$sql="SELECT * FROM unidad ORDER BY unidad . unidad ASC";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$unidad=$row['unidad'];
			$codunidad=$row['codunidad'];
				
?>
<option class="host" value="<?php echo $codunidad;?>"><?php echo $unidad;?><?php echo " (" . $codunidad . ")";?></option>
<?php
}
?>