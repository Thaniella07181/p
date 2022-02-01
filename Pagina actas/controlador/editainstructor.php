<?php
	include 'conexion.php';

	ModificarInstructor($_POST['NombreInstructor'], $_POST['ApellidosInstructor'], $_POST['Cedula'], $_POST['Telefono'], $_POST['Asignatura'], $_POST['FichaAsignada'], $_POST['idInstructor']);

	function ModificarInstructor( $nomi, $apei, $cedi, $teli, $asigni, $fichi, $idinst)
	{
		include 'conexion.php';
	 $sentencia="UPDATE instructor SET NombreInstructor='".$nomi."', ApellidosInstructor='".$apei."', Cedula='".$cedi."', Telefono='".$teli."', Asignatura='".$asigni."', FichaAsignada='".$fichi."' WHERE idInstructor='".$idinst."' ";
		mysqli_query($conn,$sentencia);
	}

?>

<script type="text/javascript">
	alert("Usuario Modificado exitosamente");
	window.location.href='../vista/tablainstructor.php';
</script>