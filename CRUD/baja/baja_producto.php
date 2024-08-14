<?php
include_once("../../database/database.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta = "DELETE FROM productos WHERE codigoProducto='$id'" ;

    mysqli_query($con,$consulta);
    header("Location: ../index.php?baja_producto=ok");
}
?>