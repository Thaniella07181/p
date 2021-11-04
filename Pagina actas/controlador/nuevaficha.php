<?php
include ("conexion.php");

        $ficha =$_POST['ficha'];
        $instructor =$_POST['instructor'];

        if ($_POST['registrar']) {
        $insertar="INSERT INTO fichas (Id_ficha, instructor) VALUES ('$ficha', '$instructor')";
             mysqli_query($conn,$insertar);

             /*if ($resultado) {
                 echo "<script>alert('se ha subido su informacion'); window.location='editar.php'</script>";
             }  else{
    echo "error al ingresar datos";
   }*/
        }
?>