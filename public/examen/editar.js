const formulario = document.getElementById('formulario');
const id = document.getElementById('id').value;

// Cargar datos actuales
fetch(`/api/telefonos/${id}`)
    .then(response => response.json())
    .then(telefono => {
        document.getElementById('marca').value = telefono.marca;
        document.getElementById('modelo').value = telefono.modelo;
        document.getElementById('precio').value = telefono.precio;
    })
    .catch(error => console.error('Error:', error));

// Enviar actualización con PATCH
formulario.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const marca = document.getElementById('marca').value;
    const modelo = document.getElementById('modelo').value;
    const precio = document.getElementById('precio').value;
    
    fetch(`/api/editar/${id}`, {
        method: 'PATCH',  // ← PATCH
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ 
            marca: marca, 
            modelo: modelo, 
            precio: precio
        })
    })
    .then(r => r.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
});