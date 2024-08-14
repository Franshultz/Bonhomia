<?php
/* include_once("../reg/admin.php"); */
include_once("../components/header.php");

?>
<main>
    <section>
        <table>
            <caption>Categorias</caption>
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("../database/database.php");
                $query = "SELECT * FROM categorias";
                $feedback = mysqli_query($conection, $query);

                if ($feedback != NULL) {
                    while ($filas = mysqli_fetch_array($feedback)) {
                        echo "
                                    <tr>
                                        <td>$filas[nombre]</td>
                                        <td><button><a href=modificar/modificar_categoria.php?id=$filas[id] >Modificar</a></button></td>
                                        <td><button><a href=baja/baja_categoria.php?id=$filas[id]  >Eliminar</a></button></td>
                                    </tr>
                                ";
                    }
                }
                ?>
            </tbody>
        </table>

        <?php
        if (isset($_GET['alta'])) {
            echo "<strong>La categoria fue Agregada con éxito ♥</strong>";
        }
        if (isset($_GET['baja'])) {
            echo "<strong>La categoria fue Eliminada con éxito!!! ♥</strong>";
        }
        if (isset($_GET['modificadoC'])) {
            echo "<strong>La categoria fue Modificada con éxito!!! ♥ </strong>";
        }
        ?>
        <h2>Agregar Categoria</h2>
        <form action="alta/alta_categoria.php" method="get">
            <div>
                <label for="categoria">Categoria:</label>
                <input id="categoria" name="categoria" type="text">
            </div>
            <div>
                <input type="submit" value="Agregar">
            </div>
        </form>
    </section>

    <section>
        <table>
            <caption>Productos</caption>
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM productos";
                $feedback = mysqli_query($conection, $query);

                if ($feedback != NULL) {
                    while ($filas = mysqli_fetch_array($feedback)) {
                        echo "
                                <tr>
                                    <td>$filas[nombre]</td>
                                    <td><button><a href=modificar/modificar_producto.php?id=$filas[id]>Modificar</a></button></td>
                                    <td><button><a href=baja/baja_producto.php?id=$filas[id]>Eliminar</a></button></td>
                                </tr> 
                            ";
                        }
                    }
                ?>
            </tbody>
        </table>

        <?php
        if (isset($_GET['alta_producto'])) {
            echo "<strong>El producto fue agregado con éxito♥</strong>";
        }
        if (isset($_GET['baja_producto'])) {
            echo "<strong>El producto fue ELIMINADO!!!!</strong>";
        }
        ?>
        <h2>Agregar Productos</h2>
        <form action="alta/alta_producto.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" name="nombre">
            </div>
            <div>
                <label for="precio">Precio</label>
                <input id="precio" type="number" name="precio">
            </div>
            <div>
                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </div>
            <div>
                <label for="foto">Foto</label>
                <input id="foto" name="foto" type="file">
            </div>
            <div>
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria">
                    <?php
                    $query = "SELECT * FROM categorias";
                    $feedback = mysqli_query($conection, $query);

                    if ($feedback != NULL) {
                        while ($filas = mysqli_fetch_array($feedback)) {
                            echo "<option value=$filas[id]>$filas[nombre]</option> ";
                        }
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="color">Color</label>
                <select id="color" name="color">
                    <?php
                    $query = "SELECT * FROM colores";
                    $feedback = mysqli_query($conection, $query);

                    if ($feedback != NULL) {
                        while ($filas = mysqli_fetch_array($feedback)) {
                            echo "<option value=$filas[id]>$filas[nombre]</option> ";
                        }
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="material">Material</label>
                <select id="material" name="material">
                    <?php
                    $query = "SELECT * FROM materiales";
                    $feedback = mysqli_query($conection, $query);

                    if ($feedback != NULL) {
                        while ($filas = mysqli_fetch_array($feedback)) {
                            echo "<option value=$filas[id]>$filas[nombre]</option> ";
                        }
                    }
                    ?>
                </select>
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </section>
</main>
<?php
include_once("../components/header.php");
?>