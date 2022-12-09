// ITERO MIS PRODUCTOS DESDE EL .JSON Y LOS RENDERIZO

let listado = document.getElementById("items");

fetch("../data-promos.json")     
.then(response => response.json())
.then(data => {
        data.forEach(producto => {
                let contenedor = document.createElement("div")
                contenedor.className = "col articulos-bs"
                contenedor.innerHTML = `
            <div class="card articulos-div articulo" id="producto">
            <div class="card-body d-flex align-items-center d-flex flex-column">
            <img src="${producto.img}" alt="${producto.categoria}${producto}">
    <p class="card-text">${producto.promocion}</p>
    <h5 class="card-title">$${producto.precio}</h5>
    <p>3 cuotas sin interes</p>
    <button class="btn1" id="boton${producto.id}">AGREGAR</button>
    </div>
    </div>
    `;
        listado.append(contenedor);
    });
})
