<?php
session_start();
?>
<?php
include "conexion.php";
/*Validacion del formulario para solicitar cuenta */
// Obtencion de variables
$usuario1= $_POST['usuario'];
$contrasenia1= $_POST['contrasenia'];
//minusculas
$usuario = strtoupper ($usuario);
$contrasenia = strtoupper ($contrasenia);
// encriptando la contraseña en md5

//$contrasenia = md5 ( $contrasenia ); 

//validando accesos
// Administradores
$sql = "SELECT * FROM usuario WHERE usuario='$usuario1' AND contrasenia='$contrasenia1'";
$q=mysql_query($sql,$conexion);
$cont=mysql_num_rows($q);
if($cont>=1){
	
	while ($fila = mysql_fetch_array($q)){
	$usuario = $fila['usuario'];
	$privilegio = $fila['privilegio'];
		$_SESSION['usuario']= $usuario;
		$_SESSION['privilegio']= $privilegio;
		echo '<html><head><meta http-equiv="REFRESH" content="0; url=principal.php"></head></html>';
		?><script>alert("Espacio - Administraci\u00f3n");</script><?
}
}else{
echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
		?><script>alert("Datos No V\u00e1lidos");</script><?
}
?>