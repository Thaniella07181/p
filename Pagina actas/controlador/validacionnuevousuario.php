<?php
include ("conexion.php");

        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $email=$_POST['email'];
        $pass = $_POST['pass'];
        $rol = $_POST['rol'];

        if ($_POST['registrar']) {
        $insertar="INSERT INTO usuarios (Id, nombre, usuario, email, contrasena, id_cargo) VALUES (NULL, '$nombre', '$usuario', '$email', '$pass', '$rol')";
             mysqli_query($conn,$insertar);

             /*if ($resultado) {
                 echo "<script>alert('se ha subido su informacion'); window.location='editar.php'</script>";
             }  else{
    echo "error al ingresar datos";
   }*/
   header('location:../vista/editor.php');
        }
?>