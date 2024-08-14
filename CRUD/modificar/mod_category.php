<?php
include_once("../../database/database.php");

if(isset($_GET['categoria']) and isset($_GET['id']) ) {  
    $id = $_GET['id'];
    $categoria = $_GET['categoria'];
    $query = "UPDATE categorias SET nombre='$categoria' WHERE id='$id'";

    mysqli_query($database,$query);
    header("Location: ../index.php?modificadoC=ok");
}
?>