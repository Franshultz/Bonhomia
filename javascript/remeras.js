const remerasProductos = [
    { id: 1, categoria: "remeras", nombre: "Remera Pizza Drew", precio: 2200, img: "images/remeras/remera1.jpg" },
    { id: 2, categoria: "remeras", nombre: "Remera Duff", precio: 2000, img: "images/remeras/remera2.jpg" },
    { id: 3, categoria: "remeras", nombre: "Remera GhostBusters", precio: 2500, img: "images/remeras/remera3.jpg" },
    { id: 4, categoria: "remeras", nombre: "Remera Green Day", precio: 3000, img: "images/remeras/remera4.jpg" },
    { id: 5, categoria: "remeras", nombre: "Remera Brooklyn", precio: 2800, img: "images/remeras/remera5.jpg" },
    { id: 6, categoria: "remeras", nombre: "Remera Tarot sun and moon", precio: 2900, img: "images/remeras/remera6.jpg" },
]

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

creadorDeArticulos(remerasProductos);