// Declaro los objetos

const mediasProductos = [
    { id: 1, categoria: "medias", nombre: "Medias a cuadros rojo", precio: 900, img: "images/medias/medias1.jpg" },
    { id: 2, categoria: "medias", nombre: "Medias Pepsi", precio: 950, img: "images/medias/medias2.jpg" },
    { id: 3, categoria: "medias", nombre: "Medias Palta", precio: 800, img: "images/medias/medias3.jpg" },
    { id: 4, categoria: "medias", nombre: "Medias Rolling Stones", precio: 850, img: "images/medias/medias4.jpg" },
    { id: 5, categoria: "medias", nombre: "Medias Vincent Van Gogh", precio: 900, img: "images/medias/medias5.jpg" },
    { id: 6, categoria: "medias", nombre: "Medias Weed", precio: 900, img: "images/medias/medias6.jpg" },
];


// Itero y creo los items de mis productos en el DOM
let creadorDeArticulos = (articulo) => {
    for (const i of articulo) {
        const items = document.getElementById("items");
        let contenedor = document.createElement("div")
        contenedor.className = "col articulos-bs"
        contenedor.innerHTML = `
    <div class="card articulos-div articulo" id="producto">
    <div class="card-body d-flex align-items-center d-flex flex-column">
    <img src="${i.img}" alt="${i.categoria}${i}">
    <p class="card-text">${i.nombre}</p>
    <h5 class="card-title">$${i.precio}</h5>
    <p>3 cuotas sin interes</p>
    <button class="btn1" id="boton${i.id}">AGREGAR</button>
    </div>
    </div>
    `;
        items.append(contenedor);
    };
}

creadorDeArticulos(mediasProductos);




// Hago un buscador por nombre
document.addEventListener("keyup", e => {
    if (e.target.matches("#buscador")) {
        document.querySelectorAll(".articulo").forEach(i => {
            i.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                ? i.classList.remove("filtro")
                : i.classList.add("filtro")
        })
    }
})



// Creo un filtro para precio maximo

let boton = document.getElementById("boton-filtro")
boton.addEventListener("click", () => {

    const filtro = document.getElementById("filtroxd");
    filtro.addEventListener("submit", (e) => {
        e.preventDefault();
        let info = e.target.children;
        localStorage.setItem("precio", (info[0].value));


        const eliminar = document.getElementById("items");
        eliminar.remove();
        let filtrados = mediasProductos.filter(i => i.precio <= localStorage.getItem("precio"));
        for (const i of filtrados) {
            const items = document.getElementById("items-contenedor");
            let contenedor = document.createElement("div")
            contenedor.className = "row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center"
            contenedor.innerHTML = `
    <div class="col articulos-bs">
    <div class="card articulos-div" id="producto">
    <div class="card-body d-flex align-items-center d-flex flex-column articulo">
    <img src="${i.img}" alt="buzo${i}">
    <p class="card-text">${i.nombre}</p>
    <h5 class="card-title">$${i.precio}</h5>
    <p>3 cuotas sin interes</p>
    <button class="btn1" id="boton${i.id}">AGREGAR</button>
    </div>
    </div>
    </div>
    `;
            items.append(contenedor);
        };
    });
})





// CARRITO

const btnCart = document.querySelector('.container-icon')
const containerCartProducts = document.querySelector('.container-cart-products')

btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle('hidden-cart')
})


let carrito = [];
const valorTotal = document.querySelector('.total-pagar')
const countProducts = document.querySelector('#contador-productos')
const rowProduct = document.querySelector('.row-product');



const productsList = document.getElementById("items")
productsList.addEventListener('click', e => {
    if(e.target.classList.contains('btn1')){
        const product = e.target.parentElement
        const infoProduct = {
            quantity: 1,
            title: product.querySelector('p').innerText,
            price: product.querySelector('h5').innerText
        };
    const productoExistente = carrito.some(product => product.title === infoProduct.title);
    if(productoExistente){
        const products = carrito.map(i => {
            if(i.title === infoProduct.title){
                i.quantity++;
                return i
            }else{
                return i
            }     
        })
        carrito = [...products]
    }else{
        carrito = [...carrito, infoProduct];
    }
    carritoHTML();
    }
});

rowProduct.addEventListener('click', (e) =>{
    if(e.target.classList.contains('icon-close')){
        const product = e.target.parentElement
        const title = product.querySelector('p').textContent;
        carrito = carrito.filter(i => i.title !== title);
        carritoHTML()
    }
});

const carritoHTML = () => {
    rowProduct.innerHTML = '';
    let total = 0;
    let totalOfPrducts = 0;
    carrito.forEach(i =>{
        const contentProducto = document.createElement('div')
        contentProducto.classList.add('cart-product')
        contentProducto.innerHTML = `
        <div class="info-cart-product">
        <span class="cantidad-producto-carrito">${i.quantity}</span>
        <p class="titulo-producto-carrito">${i.title}</p>
        <span class="precio-producto-carrito">${i.price}</span>
        </div>
        <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="icon-close"
        >
        <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M6 18L18 6M6 6l12 12"
        />
        </svg>
        `
        rowProduct.append(contentProducto)
        total = total + parseInt(i.quantity * i.price.slice(1));
        totalOfPrducts = totalOfPrducts + i.quantity;
    })
    valorTotal.innerText = `$${total}`;
    countProducts.innerText = totalOfPrducts;
}




// CARRITO STORAGE

let carritoStorageVacio = [];

const agregar = (id) => {
    let carritoStorage = JSON.parse(localStorage.getItem("carrito"));
    let objeto = mediasProductos.find((item) => item.id === id);
    if (carritoStorage) {
        let nuevoCarrito = carritoStorage;
        nuevoCarrito.push(objeto);
        localStorage.setItem("carrito", JSON.stringify(nuevoCarrito));
    } else {
        let carritoStorageVacio = [objeto];
        localStorage.setItem("carrito", JSON.stringify(carritoStorageVacio));
    }
};


mediasProductos.forEach(i =>{
    let botonCarrito = document.getElementById(`boton${i.id}`);
    botonCarrito.addEventListener("click", () => agregar(i.id));
})