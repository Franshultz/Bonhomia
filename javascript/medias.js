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
    <button id="boton${i.id}">AGREGAR</button>
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
    <button id="boton${i.id}">AGREGAR</button>
    </div>
    </div>
    </div>
    `;
            items.append(contenedor);
        };
    });
})


// CARRITO

let carrito = [];

const agregar = (id) => {
    let carritoStorage = JSON.parse(localStorage.getItem("carrito"));
    let objeto = mediasProductos.find((item) => item.id === id);
    if (carritoStorage) {
        let nuevoCarrito = carritoStorage;
        nuevoCarrito.push(objeto);
        localStorage.setItem("carrito", JSON.stringify(nuevoCarrito));
    } else {
        let carrito = [objeto];
        localStorage.setItem("carrito", JSON.stringify(carrito));
    }
};


mediasProductos.forEach(i =>{
    let botonCarrito = document.getElementById(`boton${i.id}`);
    botonCarrito.addEventListener("click", () => agregar(i.id));
})