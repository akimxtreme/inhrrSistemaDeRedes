<?php
//mysql_connect: Abre una conexión a un servidor MySQL
$conexion=mysql_connect('localhost','host','host')
or die ("NO SE PUEDE CONECTAR");

//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('host',$conexion);
@mysql_query("SET NAMES 'utf8'");
?>