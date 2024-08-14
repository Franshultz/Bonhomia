<?php

include_once("../components/header.php");

?>

<?php
// URL de la API
$url = 'https://restcountries.com/v2/all';

// Obtener los datos de la API
$response = file_get_contents($url);

// Verificar si la respuesta es válida
if ($response === FALSE) {
    die('Error al obtener los datos de la API.');
}

// Decodificar la respuesta JSON
$countries = json_decode($response, true);

// Verificar si la decodificación fue exitosa
if ($countries === NULL) {
    die('Error al decodificar los datos de la API.');
}
?>

<main class="main-contacto">
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
                <span id="errorTelefono" style="color: red;"></span>
                <label for="telefono">Numero de Telefono</label>

                <div class="main-personalizadas_form_tel">
                    <div class="dropdown-button" onclick="toggleDropdown()">
                        <img src="https://flagcdn.com/ar.svg" alt="Argentina" id="flagImage">
                        <span id="selectedCountry">+54</span>
                    </div>
                    <input type="hidden" id="countryInput" value="+54" name="countryInput">
                    <input id="telefono" type="tel" placeholder="Telefono" name="telefono">
                </div>

                <div id="dropdown" class="dropdown-content">
                    <?php foreach ($countries as $country) : ?>
                        <div class="country-option" onclick="selectCountry('<?php echo htmlspecialchars($country['callingCodes'][0]); ?>', '<?php echo htmlspecialchars($country['flag']); ?>')">
                            <img src="<?php echo htmlspecialchars($country['flag']); ?>" alt="<?php echo htmlspecialchars($country['name']); ?>">
                            <?php echo htmlspecialchars($country['name']) . ' (+' . htmlspecialchars($country['callingCodes'][0]) . ')'; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
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
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("dropdown");
        dropdown.classList.toggle("show");
    }

    function selectCountry(callingCode, flag) {
        document.getElementById("selectedCountry").innerText = '+' + callingCode;
        document.getElementById("countryInput").value = callingCode;
        document.getElementById("flagImage").src = flag; // Cambia la bandera mostrada
        document.getElementById("dropdown").classList.remove("show");
    }

    document.addEventListener('click', function(event) {
        var isClickInside = document.getElementsByClassName("dropdown")[0].contains(event.target);
        if (!isClickInside) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    });
</script>


<?php

include_once("../components/footer.php");

?>