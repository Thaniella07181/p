<?php
include ("conexion.php");

        $ficha =$_POST['ficha'];
        $iniciol =$_POST['iniciolectiva'];
        $finl =$_POST['finlectiva'];
        $fechat =$_POST['fechatermino'];
        $programa =$_POST['programa'];
        $nivelf =$_POST['nivelf'];

        if ($_POST['registrar']) {
        ECHO $insertar="INSERT INTO fichas (idFICHA, FILectiva, FFLectiva, FTFicha, Programa_idPrograma, Programa_Nivel Formacion_idNivel Formacion) 
                               VALUES ('$ficha', '$iniciol', '$finl', '$fechat', '$programa', '$nivelf')";

             mysqli_query($conn,$insertar);

             /*if ($resultado) {
                 echo "<script>alert('se ha subido su informacion'); window.location='editar.php'</script>";
             }  else{
    echo "error al ingresar datos";
   }*/
        }
?>