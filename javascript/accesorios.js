const accesoriosProductos = [
    { id: 1, categoria: "accesorios", nombre: "Pulsera Aqua", precio: 850, img: "images/accesorios/accesorio1.jpg" },
    { id: 2, categoria: "accesorios", nombre: "Collar Serpiente", precio: 1400, img: "images/accesorios/accesorio2.jpg" },
    { id: 3, categoria: "accesorios", nombre: "Pulsera acero", precio: 950, img: "images/accesorios/accesorio3.jpg" },
    { id: 4, categoria: "accesorios", nombre: "Bufanda cuadriculada", precio: 1100, img: "images/accesorios/accesorio4.jpg" },
];


let creadorDeArticulos = (articulo) => {
    for (const i of articulo) {
        const items = document.getElementById("items");
        let contenedor = document.createElement("div")
        contenedor.className = "col articulos-bs"
        contenedor.innerHTML = `
    <div class="card articulos-div" id="producto">
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

creadorDeArticulos(accesoriosProductos);