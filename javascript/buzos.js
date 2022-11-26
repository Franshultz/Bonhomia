
const buzosProductos = [
    { id: 1, categoria: "buzo", nombre: "Buzo Drew Lila", precio: 5500, img: "images/buzos/buzo1.jpg" },
    { id: 2, categoria: "buzo", nombre: "Buzo Tortugas Ninja", precio: 5000, img: "images/buzos/buzo2.jpg" },
    { id: 3, categoria: "buzo", nombre: "Buzo Back to the Future", precio: 4500, img: "images/buzos/buzo3.jpg" },
    { id: 4, categoria: "buzo", nombre: "Buzo Drew Alien", precio: 4500, img: "images/buzos/buzo4.jpg" },
    { id: 5, categoria: "buzo", nombre: "Buzo Good Daze on my Mind", precio: 5000, img: "images/buzos/buzo5.jpg" },
    { id: 6, categoria: "buzo", nombre: "Buzo Sun Kissed", precio: 4900, img: "images/buzos/buzo6.jpg" },
]

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
    <button id="boton">AGREGAR</button>
    </div>
    </div>
    `;
        items.append(contenedor);
    };
}

creadorDeArticulos(buzosProductos);


document.addEventListener("keyup", e => {
    if (e.target.matches("#buscador")) {
        document.querySelectorAll(".articulo").forEach(i => {
            i.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                ? i.classList.remove("filtro")
                : i.classList.add("filtro")
        })
    }
})



// let boton = document.getElementById("boton")
// boton.addEventListener("click", () => {
//     const eliminar = document.getElementById("items");
//     eliminar.remove();
//     let filtrados = buzosProductos.filter(i => i.precio <= 5000);
//     for (const i of filtrados) {
//         const items = document.getElementById("items-contenedor");
//         let contenedor = document.createElement("div")
//         contenedor.className = "row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center"
//         contenedor.innerHTML = `
//     <div class="col articulos-bs">
//     <div class="card articulos-div" id="producto">
//     <div class="card-body d-flex align-items-center d-flex flex-column articulo">
//     <img src="${i.img}" alt="buzo${i}">
//     <p class="card-text">${i.nombre}</p>
//     <h5 class="card-title">$${i.precio}</h5>
//     <p>3 cuotas sin interes</p>
//     <button id="boton">AGREGAR</button>
//     </div>
//     </div>
//     </div>
//     `;
//         items.append(contenedor);
//     };
// });




