    <?php
	include "conexion.php";
    // primero conectamos siempre a la base de datos mysql
    $sql = "SELECT * FROM historico_host";  // sentencia sql
    $result = mysql_query($sql, $conexion);
    $numero = mysql_num_rows($result); // obtenemos el número de filas
	$a = $numero +1; 
    echo 'El número de registros de la tabla es: '.$numero.'--'. $a;  // imprimos en pantalla el número generado
    ?>

