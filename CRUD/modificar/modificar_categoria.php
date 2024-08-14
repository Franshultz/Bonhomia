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
            $query = "SELECT * FROM categorias WHERE id='$id'";
            $feedback = mysqli_query($conection, $query);

            if ($feedback != NULL) {
                while ($data = mysqli_fetch_array($feedback)) {
                    echo "
                        <form action=mod_category.php method=get>
                        <div>
                            <label for=categoria>Categoria</label>
                            <input name=id  type=hidden value=$data[id]>
                            <input id=categoria name=categoria type=text value=$data[nombre]>
                        </div>
                        <div>
                            <input type=submit  value=Modificar> 
                        </div>
                    ";
                }
            }
        }
        ?>
    </main>
</body>
</html>