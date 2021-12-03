<?php
	include 'conexion.php';

	ModificarUsuario($_POST['nombre'], $_POST['usuario'], $_POST['contraseña'], $_POST['cargo'], $_POST['Id']);

	function ModificarUsuario( $nom, $usu, $email, $contra, $id_cargo, $id_usu)
	{
		$sentencia="UPDATE usuarios SET nombre='".$nom."', usuario='".$usu."', email='".$email."', contraseña='".$contra."', id_cargo='".$id_cargo."' WHERE Id='".$id_usu."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Usuario Modificado exitosamente");
	window.location.href='index.php';
</script>