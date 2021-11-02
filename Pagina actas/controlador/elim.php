<?php
include '../controlador/conexion.php';

EliminarProducto($_GET['Id']);

function EliminarProducto($Id)
{
    $sentencia="DELETE FROM productos WHERE no='".$Id."' ";
    mysql_query($sentencia) or die (mysql_error());
}
?>

<script type="text/javascript">
alert("Producto Eliminado exitosamente");
window.location.href='index.php';
</script>