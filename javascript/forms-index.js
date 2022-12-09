// Formulario de consultas del index.html

const formularioDudas = document.getElementById("formulario-index");
formularioDudas.addEventListener("submit", (e) => {
    e.preventDefault();
    let info = e.target.children;
    localStorage.setItem("nombre", (info[0].value));
    localStorage.setItem("email", (info[1].value));
    localStorage.setItem("numero", (info[2].value));
    localStorage.setItem("mensaje", (info[3].value));
    Swal.fire(
        'Bien Hecho!',
        'Su consulta ha sido enviada con exito',
        'success'
    )
});


