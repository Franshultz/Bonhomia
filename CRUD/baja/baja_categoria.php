<?php
include_once("../../conect/conf.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $consulta = "DELETE FROM categorias WHERE idCategoria='$id'" ;

    mysqli_query($con,$consulta);

    header("Location: ../index.php?baja=ok");

}



?>