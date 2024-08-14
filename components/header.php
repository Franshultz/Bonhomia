<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Keywords -->
    <meta name="keywords" content="remeras persosnalizadas, buzos personalizados, Bonhomía, bohnomía design, medias, estampados, ropa con diseño, accesorios, descuentos ropa">

    <!-- Description -->
    <meta name="description" content="Bonhomía te ofrece la posibilidad de elegir dentro de nuestro gran catalogo de ropas personalizadas, la prenda que mas te guste al mejor precio o tambien crear tu propio estilo enviando tu diseño y nosotros encargandonos de confeccionar el resutado esperado">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icono -->
    <link rel="icon" href="images/iconos/icono.png">

    <!-- Link a css -->
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Titulo -->
    <title>Bonhomía Design</title>

</head>

<body>
    <?php include_once("../database/database.php"); ?>
    <header class="header-all">
        <div class="mensaje-rapido">
            <div class="contenedor-mensaje">
                <p>¡Envío gratis en pedidos superiores a $80,000! | Descuento del 20% en todos los productos este fin de semana | ¡Ofertas limitadas, no te quedes fuera!</p>
            </div>
        </div>
        <div class="contenedor1">
            <h1 class="contenedor_h1">Bonhomía</h1>
            <nav>
                <ul class="nav-links">
                    <input type="checkbox" id="checkbox_toggle" />
                    <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                    <div class="menu">
                        <li>
                            <a href="index.php">INICIO</a>
                        </li>
                        <?php
                        if ($conection != NULL) {
                            $query = "SELECT * FROM categorias";
                            $feedback = mysqli_query($conection, $query);

                            if ($feedback != NULL) {
                                while ($filas = mysqli_fetch_array($feedback)) {
                                    echo "<li>";
                                    echo "<a href=categorias.php?categoria=$filas[id] >$filas[nombre]</a>";
                                    echo "</li>";
                                }
                            } else {
                                echo "<span>Los datos no han sido cargados correctamente</span>";
                            }
                        } else {
                            echo "<span>Debe conectarse correctamente a la base de datos</span>";
                        }
                        ?>
                        <li>
                            <a href="contacto.php">CONTACTO</a>
                        </li>
                        <li>
                            <a href="talles.php">TALLES</a>
                        </li>
                        <li>
                            <a href="promos.php">PROMOS</a>
                        </li>
                    </div>
                </ul>
            </nav>
            <a href="#" class="contenedor_micuenta" id="mi_cuenta">
                <img src="../images/iconos/micuenta.png" alt="Mi cuenta">
                <div class="contenedor_micuenta_opciones">
                    <h5>Crear cuenta</h5>
                    <h5>Iniciar sesion</h5>
                </div>
            </a>
            <div class="container-icon">
                <img src="../images/iconos/carrito.png" alt="Carrito de compras">
                <div class="count-products">
                    <span id="contador-productos">0</span>
                </div>
                <div class="container-cart-products hidden-cart">
                    <div class="row-product">
                        <div class="cart-product">
                            <div class="info-cart-product">
                                <span class="cantidad-producto-carrito">1</span>
                                <p class="titulo-producto-carrito">Zapatos Nike</p>
                                <span class="precio-producto-carrito">$80</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close"></svg>
                        </div>
                    </div>
                    <div class="cart-total">
                        <h3>Total:</h3>
                        <span class="total-pagar">$0</span>
                    </div>
                </div>
            </div>
        </div>

    </header>