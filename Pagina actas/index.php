<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cenigraf actas</title>
	<link rel="stylesheet" href="">

</head>

<body class="log" style="margin:0;
	color:#0a0b0f;
	background: rgba(255, 230, 192, 0.966);
	font:600 16px/18px 'Open Sans',sans-serif;">
<center>
    <form action="controlador/validacionlogin.php" method="POST">	
        <h1>INICIO SESION</h1>
        <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
        <p>Contraseña <input type="password" name="contrasena" placeholder="ingrese su contraseña"></p>
        <input type="submit" value="Ingresar">
    </form>
</center>
</body>
</html>