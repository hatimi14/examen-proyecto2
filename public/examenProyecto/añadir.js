const boton = document.getElementById("boton");
const formulario = document.getElementById("formulario");


formulario.addEventListener("submit", function(event) {
    event.preventDefault()
    const nombre = document.getElementById('nombre').value;
    const descripcion = document.getElementById('descripcion').value;
    const fecha_inicio = document.getElementById('fecha_inicio').value;
    const fecha_fin = document.getElementById('fecha_fin').value;
    console.log("hola");
    fetch('/api/añadirProyecto', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ nombre: nombre, descripcion: descripcion, fecha_inicio: fecha_inicio, fecha_fin: fecha_fin })
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

