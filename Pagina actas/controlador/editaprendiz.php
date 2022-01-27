<?php
	include 'conexion.php';

	ModificarAprendiz($_POST['NombreAPrendiz'], $_POST['ApellidoAPrendiz'], $_POST['Tipo_documento_identificacion'], $_POST['Documento_identificacion'], $_POST['EmailAprendiz'], $_POST['TelAprendiz'], $_POST['FIELectiva'], $_POST['FFELectiva'], $_POST['FIProductiva'],
                     $_POST['FFEProductiva'], $_POST['EstadoAPCA'], $_POST['TipoAlternativa'], $_POST['NombreEmpresa'], $_POST['estadoA'], $_POST['ficha'], $_POST['programa'], $_POST['nivel'], $_POST['instructor'], $_POST['idAprendiz']);

	function ModificarAprendiz( $noma, $apea, $tda, $da, $emaila, $tela, $fielec, $ffelec, $fipro, $ffpro, $estadoapca, $tpa, $nome, $estadoa, $ficha, $programa, $nivel, $inst, $idapren)
	{
		include 'conexion.php';
	 $sentencia="UPDATE aprendiz SET NombreAPrendiz='".$noma."', ApellidoAPrendiz='".$apea."', Tipo_documento_identificacion='".$tda."', Documento_identificacion='".$da."', EmailAprendiz='".$emaila."', TelAprendiz='".$tela."', FIELectiva='".$fielec."', FFELectiva='".$ffelec."', FIProductiva='".$fipro."', FFEProductiva='".$ffpro."', EstadoAPCA='".$estadoapca."', TipoAlternativa='".$tpa."', NombreEmpresa='".$nome."', EstadoA_idEstadoA='".$estadoa."', FICHA_idFICHA='".$ficha."', FICHA_Programa_idPrograma='".$programa."', `FICHA_Programa_Nivel Formacion_idNivel Formacion`='".$nivel."', Instructor_idInstructor='".$inst."' WHERE idAprendiz='".$idapren."' ";
		mysqli_query($conn,$sentencia);
	}

?>

<script type="text/javascript">
	alert("Usuario Modificado exitosamente");
	window.location.href='../vista/reposteaprendices.php';
</script>