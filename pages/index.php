<?php

include_once("../components/header.php");

?>

    <main class="main-index">
        <h3 class="novedades-h3">Novedades</h3>
        <section class="novedades">
            <div>
                <a href="buzos.html">
                    <img src="images/novedades/buzonov.png" alt="buzo1">
                </a>
            </div>
            <div>
                <a href="remeras.html">
                    <img src="images/novedades/remeranov.jpg" alt="remera1">
                </a>
            </div>
            <div>
                <a href="medias.html">
                    <img src="images/novedades/mediasnov.jpg" alt="media1">
                </a>
            </div>
        </section>
        <h3 class="destacados-h3">Destacados</h3>
        <section class="destacados">
            <div>
                <a href="buzos.html">
                    <img src="images/destacados/buzodest.jpg" alt="buzo2">
                </a>
            </div>
            <div>
                <a href="remeras.html">
                    <img src="images/destacados/remeradest.jpg" alt="remera2">
                </a>
            </div>
            <div>
                <a href="medias.html">
                    <img src="images/destacados/mediasdest.jpg" alt="media2">
                </a>
            </div>
        </section>
        <section class="masinfo">
            <div class="masinfo_articulos">
                <h4>Medios de pago</h4>
                <img src="images/iconos/pago.png" alt="icono de pago">
                <div class="medios-de-pago">
                    <img src="images/iconos/visa@2x.png" alt="visa">
                    <img src="images/iconos/amex@2x.png" alt="amex">
                    <img src="images/iconos/tarjeta-naranja@2x.png" alt="naranja">
                    <img src="images/iconos/mastercard@2x.png" alt="mastercard"><br>
                    <img src="images/iconos/paypal@2x.png" alt="paypal">
                    <img src="images/iconos/mercadopago@2x.png" alt="mercadopago">
                    <img src="images/iconos/rapipago@2x.png" alt="rapipago">
                </div>
            </div>
            <div class="masinfo_articulos">
                <h4>Cambios y devoluciones</h4>
                <img src="images/iconos/cambios.png" alt="icono de cambios">
                <p>No realizamos cambios por talle, color ni modelo.<br> Únicamente con falla, 1 semana de garantía y
                    sin uso.</p>
            </div>
            <div class="masinfo_articulos">
                <h4>Envios</h4>
                <img src="images/iconos/envios.png" alt="icono de envios">
                <p>Envios a todo el país.<br> A partir de $12000 envio gratis.</p>
            </div>
        </section>
    </main>

    <aside class="aside_index">
        <h3 class="aside_index_h3">Consultanos tus dudas</h3>
        <form class="aside_index_form" id="formulario-index">
            <input type="text" value="" placeholder="Nombre" id="nombre">   
            <input type="email" value="" placeholder="Email">
            <input type="text" value="" placeholder="Numero">
            <textarea name="" id="" cols="30" rows="10" placeholder="mensaje"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </aside>

<?php

include_once("../components/footer.php");

?>