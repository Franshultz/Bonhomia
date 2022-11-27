// Declaro los objetos

const remerasProductos = [
    { id: 1, categoria: "remeras", nombre: "Remera Pizza Drew", precio: 2200, img: "images/remeras/remera1.jpg" },
    { id: 2, categoria: "remeras", nombre: "Remera Duff", precio: 2000, img: "images/remeras/remera2.jpg" },
    { id: 3, categoria: "remeras", nombre: "Remera GhostBusters", precio: 2500, img: "images/remeras/remera3.jpg" },
    { id: 4, categoria: "remeras", nombre: "Remera Green Day", precio: 3000, img: "images/remeras/remera4.jpg" },
    { id: 5, categoria: "remeras", nombre: "Remera Brooklyn", precio: 2800, img: "images/remeras/remera5.jpg" },
    { id: 6, categoria: "remeras", nombre: "Remera Tarot sun and moon", precio: 2900, img: "images/remeras/remera6.jpg" },
]



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

creadorDeArticulos(remerasProductos);



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
        let filtrados = remerasProductos.filter(i => i.precio <= localStorage.getItem("precio"));
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
});



// CARRITO

let carrito = [];

const agregar = (id) => {
    let carritoStorage = JSON.parse(localStorage.getItem("carrito"));
    let objeto = remerasProductos.find((item) => item.id === id);
    if (carritoStorage) {
        let nuevoCarrito = carritoStorage;
        nuevoCarrito.push(objeto);
        localStorage.setItem("carrito", JSON.stringify(nuevoCarrito));
    } else {
        let carrito = [objeto];
        localStorage.setItem("carrito", JSON.stringify(carrito));
    }
};


remerasProductos.forEach(i =>{
    let botonCarrito = document.getElementById(`boton${i.id}`);
    botonCarrito.addEventListener("click", () => agregar(i.id));
})