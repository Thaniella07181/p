<?php
include 'conexion.php';

EliminarInstructor($_GET['Id']);

function EliminarInstructor($Id)
{
    include 'conexion.php';

    $sentencia="DELETE FROM instructor WHERE idInstructor='".$Id."' ";
    mysqli_query($conn,$sentencia);
}
?>

<script type="text/javascript">
alert("Usuario Eliminado exitosamente");
window.location.href='../vista/tablainstructor.php';
</script>