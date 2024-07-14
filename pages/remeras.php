<?php

include_once("../components/header.php");

?>

    <main class="main-productos">
        <h3 class="main-titulo">REMERAS</h3>
                <ul>
                    <li class="contenedor-filtro">
                        <h6>Filtrar por precio</h6>
                        <form id="filtroxd">
                            <input type="text" id="filtrar-precio" placeholder="Ingresa precio maximo">
                            <input type="submit" value="Filtrar" id="boton-filtro">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        <section class="articulos" id="items-contenedor">
            <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center" id="items">
            </div>
        </section>
    </main>
    <?php

    include_once("../components/footer.php");
    
    ?>