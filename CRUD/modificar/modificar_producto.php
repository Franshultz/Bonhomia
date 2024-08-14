<?php
include_once("../../database/database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM productos WHERE id='$id'";
            $feedback = mysqli_query($conection, $query);

            if ($feedback != NULL) {
                while ($data = mysqli_fetch_array($feedback)) {
                    echo "
                        <form action=mod_product.php method=post enctype=multipart/form-data>
                        <input name=id  type=hidden value=$data[id]>
                        <div>
                            <label for=nombre>Nombre</label>
                            <input id=nombre name=nombre type=text value=$data[nombre]>
                        </div>
                        <div>
                            <label for=precio>Precio</label>
                            <input id=precio name=precio type=num value=$data[precio]>
                        </div>
                        <div>
                            <label for=descripcion>Descripcion</label>
                            <textarea id=descripcion name=descripcion value=$data[descripcion]></textarea>
                        </div>
                        <div>
                            <label for=foto>Foto</label>
                            <input id=foto name=foto type=file value=$data[foto]>
                        </div>
                        <div>
                            <label for=foto2>Foto2</label>
                            <input id=foto2 name=foto2 type=file value=$data[foto2]>
                        </div>
                        <div>
                            <input type=submit value=Modificar> 
                        </div>
                    ";
                }
            }
        }
        ?>
    </main>

</body>

</html>