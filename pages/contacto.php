<?php

include_once("../components/header.php");

?>


    <main>
        <div class="main-personalizadas_div">
            <form class="main-personalizadas_form" id="formulario-aside">
                <h3 class="main-personalizadas_h3">CONTACTO </h3>
                <p class="main-personalizadas_p">¿Tienes alguna pregunta sobre nuestros productos o necesitas ayuda con tu pedido? Estamos aquí para ayudarte. Ya sea que estés buscando más información sobre nuestras remeras, buzos, medias o accesorios, o si necesitas asistencia con tu compra, no dudes en ponerte en contacto con nosotros.</p>
                <div>
                    <label for="name">Nombre</label>
                    <input id="name" type="text" placeholder="Nombre">
                </div>
                <div>
                    <label for="mail">Email</label>
                    <input id="mail" type="email" placeholder="Email">
                </div>
                <div>
                    <label for="num">Numero Telefono</label>
                    <input id="num" type="text" placeholder="Numero">
                </div>
                <div>
                    <label for="text">Mensaje</label>
                    <textarea name="" id="text" placeholder="Consultanos..."></textarea>
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>

    <?php

    include_once("../components/footer.php");
    
    ?>