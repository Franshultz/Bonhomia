<?php

include_once("../database/database.php");
include_once("../components/header.php");

?>

<main class="main-productos">
    <section class="filtros">
        <p>Filtrar por</p>
        <form>
            <div class="filtro-precio">
                <span>PRECIO</span>
                <div>
                    <div>
                        <label for="precio-minimo">DESDE</label>
                        <input id="precio-minimo" type="number" placeholder="21.900">
                    </div>
                    <div>
                        <label for="precio-maximo">HASTA</label>
                        <input id="precio-maximo" type="number" placeholder="85.900">
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="articulos">
        <?php
        if (isset($_GET['categoria'])) {
            $fk = $_GET['categoria'];
            $query = "SELECT * FROM productos WHERE categoria_id=$fk";
            $feedback = mysqli_query($conection, $query);

            if ($feedback != NULL) {
                while ($cards = mysqli_fetch_array($feedback)) {
                    echo "
                        <div class='articulos_card'>
                            <img class='card-img' src='../images/{$cards['foto']}' alt='{$cards['nombre']}' 
                            onmouseover=\"this.src='../images/{$cards['foto2']}'\" 
                            onmouseout=\"this.src='../images/{$cards['foto']}'\">
                            <div class='articulos_info'>
                                <p class='card-titulo'>{$cards['nombre']}</p>
                                <p class='card-precio'>{$cards['precio']}</p>
                                <p class='card-texto'>3 cuotas sin interés</p>
                                <button class='card-agregar'>AGREGAR</button>
                                <button class='card-ver'>VER</button>
                            </div>
                        </div>
                    ";
                }
            } else {
                echo "<span>La base de datos tiene vacia la tabla de productos</span>";
            }
        } else {
            echo "<span>La consulta no ha sido realizada con exito</span>";
        }
        ?>
    </section>
</main>

<?php

include_once("../components/footer.php");

?>