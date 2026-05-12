const boton = document.getElementById("boton");
const formulario = document.getElementById("formulario");


formulario.addEventListener("submit", function(event) {
    event.preventDefault()
    const marca = document.getElementsByTagName("input")[0].value;
    const modelo = document.getElementsByTagName("input")[1].value;
    const precio = document.getElementsByTagName("input")[2].value;
    fetch('/api/añadirTelefono', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ marca: marca, modelo: modelo, precio: precio })
    })
    .then(r => r.json())
    .then(data => {
        console.log(data);
        setTimeout(() => {
            window.location.href = '/';
        }, 500);
    })
    .catch(error => console.error('Error:', error));
});

