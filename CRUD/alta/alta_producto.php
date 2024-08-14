<?php

include_once("../../database/database.php");

if(isset($_POST['nombre']) or isset($_POST['precio']) or isset($_POST['descripcion']) or isset($_POST['categoria']) or isset($_POST['color']) or isset($_POST['material']) ) {
    
    $nombre = $_POST['nombre'] ;
    $precio = $_POST['precio'] ;
    $descripcion = $_POST['descripcion'] ;
    $categoria = $_POST['categoria'] ;
    $color = $_POST['color'] ;
    $material = $_POST['material'] ;

    //FOTO1
    $original = imagecreatefromjpeg($_FILES["foto"]["tmp_name"]);
    $ancho_original = imagesx($original);
    $alto_original = imagesy($original);
    $nuevo_ancho = 260;
    $nuevo_alto = 320;
    $copia_imagen = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
    imagecopyresampled($copia_imagen, $original, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho_original, $alto_original);
    $foto = time() . '.jpg';
    imagejpeg($copia_imagen, '../../images' . $foto);

    //FOTO2
    $original2 = imagecreatefromjpeg($_FILES["foto2"]["tmp_name"]);
    $ancho_original2 = imagesx($original2);
    $alto_original2 = imagesy($original2);
    $nuevo_ancho2 = 260;
    $nuevo_alto2 = 320;
    $copia_imagen2 = imagecreatetruecolor($nuevo_ancho2, $nuevo_alto2);
    imagecopyresampled($copia_imagen2, $original2, 0, 0, 0, 0, $nuevo_ancho2, $nuevo_alto2, $ancho_original2, $alto_original2);
    $foto2 = time() . '.jpg';
    imagejpeg($copia_imagen2, '../../images/'.$foto2);

    $query = "INSERT INTO productos(nombre, precio, descripcion, foto, foto2, fecha_creacion, categoria_id, material_id, color_id) VALUES ('$nombre','$precio','$descripcion','$foto','$foto2',NOW(),'$categoria','$color','$material')";

    mysqli_query($conection,$query);
    header("Location: ../index.php?alta_producto=ok");
}
?>