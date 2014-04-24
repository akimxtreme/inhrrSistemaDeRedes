<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="imagenes/minilogo.png"/>
<link href="css/host.css" rel="stylesheet" type="text/css" />
<script src="js/host.js" type="text/javascript"></script>
<title>Host - Redes</title>
</head>

<body>
<div class="host">
<form class="host" action="ingreso.php" onsubmit="return ingreso(this);" method="post">
<!-- Titulo -->
<h1 class="host">Módulo de Acceso</h1>


<!-- Usuario (usuario) -->
<div class="organizar">
<label class="host">Usuario</label>
<input class="host" type="text" name="usuario" id="usuario" onblur="obligatorio(this);" />
</div>
<!-- Contraseña (usuario) -->
<div class="organizar">
<label class="host">Contraseña</label>
<input class="host" type="password" name="contrasenia" id="contrasenia" onblur="obligatorio(this);" maxlength="30" />
</div>

<!-- ENVIAR -->
<div class="derecha">
<input class="host_boton" type="submit" value="Ingresar" name="ingresa"/>
</div>
</form>

</div>
</body>
</html>