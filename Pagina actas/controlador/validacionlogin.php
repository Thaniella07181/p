<?php
   include 'conexion.php';

$usuario=$_POST['usuario'];

$contrasena=$_POST['contrasena'];
echo $usuario,$contrasena; 
session_start();
$_SESSION['usuario']=$usuario;


$consulta="SELECT*FROM usuarios WHERE usuario ='$usuario' AND contrasena ='$contrasena'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_fetch_assoc($resultado);

if($filas){
    header("location:../vista/admin.php");

}else{
    ?>
    <?php
    include '../controlador/conexion.php';

?>
<h1 class="bad">Error en la autenticacion</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conn);

?>