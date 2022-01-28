<?php
include 'conexion.php';

EliminarAprendiz($_GET['Id']);

function EliminarAprendiz($Id)
{
    include 'conexion.php';

    $sentencia="DELETE FROM aprendiz WHERE idAprendiz='".$Id."' ";
    mysqli_query($conn,$sentencia);
}
?>

<script type="text/javascript">
alert("Usuario Eliminado exitosamente");
window.location.href='../vista/reposteaprendices.php';
</script>