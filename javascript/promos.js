let listado = document.getElementById("items");
// fetch('https://jsonplaceholder.typicode.com/posts')
// .then(response => response.json())
// .then(data => {
//     data.forEach(publicacion => {
//         let contenedor = document.createElement("div");
//         contenedor.innerHTML = `
        
//         `
//     });
// })


// https://my-json-server.typicode.com/Franshultz/DatosJSON/db.json

fetch("../data-promos.json")     
.then(response => response.json())
.then(data => {
        data.forEach(producto => {
                let contenedor = document.createElement("div")
                contenedor.className = "col articulos-bs"
                contenedor.innerHTML = `
            <div class="card articulos-div articulo" id="producto">
            <div class="card-body d-flex align-items-center d-flex flex-column">
            <img src="${producto.img}" alt="${producto.categoria}${i}">
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


// fetch('https://jsonplaceholder.typicode.com/posts')
//   .then((response) => response.json())
//   .then((data) => {
//     console.log(data[0].title);
//     console.log(data[0].body);
//   });  