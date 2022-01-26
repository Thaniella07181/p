<?php
	include 'conexion.php';

	ModificarUsuario($_POST['NombreAPrendiz'], $_POST['ApellidoAPrendiz'], $_POST['Tipo_documento_identificacion'], $_POST['Documento_identificacion'], $_POST['EmailAprendiz'], $_POST['TelAprendiz'], $_POST['FIELectiva'], $_POST['FFELectiva'], $_POST['TelAprendiz'],
                     $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['TelAprendiz'], $_POST['Id']);

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