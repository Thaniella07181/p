<?php
	include 'conexion.php';

	ModificarUsuario($_POST['nombre'], $_POST['usuario'], $_POST['email'], $_POST['contrasena'], $_POST['cargo'], $_POST['Id']);

	function ModificarUsuario( $nom, $usu, $email, $contra, $id_cargo, $id_usu)
	{
		include 'conexion.php';
	    $sentencia="UPDATE usuarios SET nombre='".$nom."', usuario='".$usu."', email='".$email."', contrasena='".$contra."', id_cargo='".$id_cargo."' WHERE Id='".$id_usu."' ";
		mysqli_query($conn,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Usuario Modificado exitosamente");
	window.location.href='../vista/Usuarios.php';
</script>