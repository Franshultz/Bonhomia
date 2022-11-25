const mediasProductos = [
    { id: 1, categoria: "medias", nombre: "Medias a cuadros rojo", precio: 900, img: "images/medias/medias1.jpg" },
    { id: 2, categoria: "medias", nombre: "Medias Pepsi", precio: 950, img: "images/medias/medias2.jpg" },
    { id: 3, categoria: "medias", nombre: "Medias Palta", precio: 800, img: "images/medias/medias3.jpg" },
    { id: 4, categoria: "medias", nombre: "Medias Rolling Stones", precio: 850, img: "images/medias/medias4.jpg" },
    { id: 5, categoria: "medias", nombre: "Medias Vincent Van Gogh", precio: 900, img: "images/medias/medias5.jpg" },
    { id: 6, categoria: "medias", nombre: "Medias Weed", precio: 900, img: "images/medias/medias6.jpg" },
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

creadorDeArticulos(mediasProductos);