<?php

include_once("../database/database.php");
include_once("../components/header.php");

?>
<main class="main-index">
    <section class="carrousel">
        <div class="carrousel__images">
            <img src="../images/header/foto1.jpg" alt="Imagen 1">
            <img src="../images/header/foto2.jpg" alt="Imagen 2">
            <img src="../images/header/foto3.jpg" alt="Imagen 3">
        </div>
    </section>
    <section class="masinfo">
        <div class="masinfo_articulos">
            <img src="../images/iconos/caja.png" alt="icono de pago">
            <div>
                <p style="font-weight: bold; font-size: 0.6em;">Envíos gratis</p>
                <p>SOLO en compras superiores a $190.000</p>
            </div>
        </div>
        <div class="masinfo_articulos">
            <img src="../images/iconos/tarjeta-de-credito.png" alt="icono de cambios">
            <div>
                <p style="font-weight: bold; font-size: 0.6em">Pagá hasta en 6 cuotas sin interés</p>
                <p>Con tarjetas de crédito bancarias</p>
            </div>
        </div>
        <div class="masinfo_articulos">
            <img src="../images/iconos/mano.png" alt="icono de envios">
            <div>
                <p style="font-weight: bold; font-size: 0.6em">Comprá con 9 y 12 cuotas sin interés</p>
                <p>9 cuotas sin interés superando $200000 y 12 cuotas sin interés superando $300000</p>
            </div>
        </div>
    </section>
</main>


<?php

include_once("../components/footer.php");

?>