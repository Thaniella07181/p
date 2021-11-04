<?php
include ("conexion.php");

        $nombre=$_POST['nombre'];
        $cedula=$_POST['cedula'];
        $acto_academico=$_POST['acto_academico'];
        $inicio_etapa_lectiva=$_POST['inicio_etapa_lectiva'];
        $fin_etapa_lectiva=$_POST['fin_etapa_lectiva'];
        $inicio_etapa_productiva=$_POST['inicio_etapa_productiva'];
        $fin_etapa_productiva=$_POST['fin_etapa_productiva'];
        $id_ficha =$_POST['ficha'];

        if ($_POST['registrar']) {
        $insertar="INSERT INTO aprendices (Id, nombre, cedula, acto_academico, inicio_etapa_lectiva, fin_etapa_lectiva, inicio_etapa_productiva, fin_etapa_productiva, id_ficha) 
                             VALUES (NULL, '$nombre', '$cedula', '$acto_academico', '$inicio_etapa_lectiva', '$fin_etapa_lectiva', '$inicio_etapa_productiva', '$fin_etapa_productiva', '$id_ficha')";
             mysqli_query($conn,$insertar);

             /*if ($resultado) {
                 echo "<script>alert('se ha subido su informacion'); window.location='editar.php'</script>";
             }  else{
    echo "error al ingresar datos";
   }*/
        }
?>