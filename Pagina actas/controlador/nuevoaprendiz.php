<?php
include ("conexion.php");
         
        $idA=$_POST['idAprendiz'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellidos'];
        $tipo=$_POST['tipo_documento'];
        $documento=$_POST['documento'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $fechailec=$_POST['iniciolec'];
        $fechaflec=$_POST['finlec'];
        $fechai=$_POST['inicio'];
        $fechaf=$_POST['fin'];
        $estado =$_POST['estado'];
        $alternativa =$_POST['tipo'];
        $empresa =$_POST['empresa'];
        $estadoA =$_POST['estadoA'];
        $ficha =$_POST['ficha'];
        $programa =$_POST['programa'];
        $nivel =$_POST['nivel'];
        $instructor =$_POST['instructor'];
        


        if ($_POST['registrar']) {
     $insertar="INSERT INTO `aprendiz` (`idAprendiz`, `NombreAPrendiz`, `ApellidoAPrendiz`, `Tipo_documento_identificacion`, `Documento_identificacion`, `EmailAprendiz`, `TelAprendiz`, `FIELectiva`, `FFELectiva`, `FIProductiva`, `FFEProductiva`, `EstadoAPCA`, `TipoAlternativa`, `NombreEmpresa`, `EstadoA_idEstadoA`, `FICHA_idFICHA`, `FICHA_Programa_idPrograma`, `FICHA_Programa_Nivel Formacion_idNivel Formacion`, `Instructor_idInstructor`) 
                                         VALUES ('$idA', '$nombre', '$apellido', '$tipo', '$documento', '$email', '$telefono',  '$fechailec', '$fechaflec', '$fechai', '$fechaf', '$estado', '$alternativa', '$empresa', $estadoA, $ficha, $programa, $nivel, $instructor)";
             mysqli_query($conn,$insertar);
            }
             header("location:../vista/ingresaraprendiz.php")
             /*if ($resultado) {
                 echo "<script>alert('se ha subido su informacion'); window.location='editar.php'</script>";
             }  else{
    echo "error al ingresar datos";
   }*/
   
?>