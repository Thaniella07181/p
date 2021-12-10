<?php
include 'conexion.php';

EliminarUsuario($_GET['Id']);

function EliminarUsuario($Id)
{
    include 'conexion.php';

    $sentencia="DELETE FROM usuarios WHERE Id='".$Id."' ";
    mysqli_query($conn,$sentencia);
}
?>

<script type="text/javascript">
alert("Usuario Eliminado exitosamente");
window.location.href='../vista/Usuarios.php';
</script>