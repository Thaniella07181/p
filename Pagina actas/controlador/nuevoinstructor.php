<?php
include ("conexion.php");
         
        $idInst=$_POST['idInstructor'];
        $nombre=$_POST['NombreInstructor'];
        $apellido=$_POST['ApellidosInstructor'];
        $cedula=$_POST['Cedula'];
        $telefono=$_POST['Telefono'];
        $Asignatura=$_POST['Asignatura'];
        $FichaAsignada=$_POST['FichaAsignada'];
    

        if ($_POST['registrar']) {
     $insertar="INSERT INTO `instructor` (`idInstructor`, `NombreInstructor`, `ApellidosInstructor`, `Cedula`, `Telefono`, `Asignatura`, `FichaAsignada`) 
                                         VALUES ('$idInst', '$nombre', '$apellido', '$cedula', '$telefono', '$Asignatura', '$FichaAsignada')";
             mysqli_query($conn,$insertar);
            }
             header("location:../vista/ingresarinstructor.php")
             /*if ($resultado) {
                 echo "<script>alert('se ha subido su informacion'); window.location='editar.php'</script>";
             }  else{
    echo "error al ingresar datos";
   }*/
   
?>