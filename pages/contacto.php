<?php

include_once("../components/header.php");

?>


    <main>
        <div class="main-personalizadas_div">
            <form class="main-personalizadas_form" id="formulario">
                <h3 class="main-personalizadas_h3">CONTACTO </h3>
                <p class="main-personalizadas_p">¿Tienes alguna pregunta sobre nuestros productos o necesitas ayuda con tu pedido? Estamos aquí para ayudarte. Ya sea que estés buscando más información sobre nuestras remeras, buzos, medias o accesorios, o si necesitas asistencia con tu compra, no dudes en ponerte en contacto con nosotros.</p>
                <div>
                    <label for="nombre">Nombre</label>
                    <span id="errorNombre" style="color: red;"></span>
                    <input id="nombre" type="text" placeholder="Nombre" name="nombre">
                </div>
                <div>
                    <label for="email">Email</label>
                    <span id="errorEmail" style="color: red;"></span>
                    <input id="email" type="email" placeholder="Email" name="email">
                </div>
                <div>
                    <label for="telefono">Numero Telefono</label>
                    <span id="errorTelefono" style="color: red;"></span>
                    <input id="telefono" type="number" placeholder="Numero" name="telefono">
                </div>
                <div>
                    <label for="mensaje">Mensaje</label>
                    <span id="errorMensaje" style="color: red;"></span>
                    <textarea id="mensaje" placeholder="Consultanos..." name="mensaje"></textarea>
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>
    <script src="../javascript/forms-contacto.js"></script>
    <?php

    include_once("../components/footer.php");
    
    ?>