<?php
require_once "conexion.php";
if(isset($_GET['id'])){
    $id_usuario=$_GET['id'];
    $query="DELETE FROM usuarios WHERE id_usuario='$id_usuario'";
    if($conn->query($query)){
        header('Location: modulo_buscador.php');
        
    }else{
        echo "error no se pudo eliminar el registro";
    }
}
?>