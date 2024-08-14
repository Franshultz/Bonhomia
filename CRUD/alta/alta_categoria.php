<?php
include_once("../../database/database.php");

if(isset($_GET['categoria'])) {   
    $categoria = $_GET['categoria'];
    $query = "INSERT INTO categorias (nombre) VALUES ('$categoria')";

    mysqli_query($conection,$query);
    header("Location: ../index.php?alta=ok");
}
?>