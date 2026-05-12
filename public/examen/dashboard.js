const cajaTelefonos = document.getElementsByClassName('cajaTelefonos')[0];

fetch('/api/telefonos', {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
    }
})
.then(response =>{
    if (!response.ok) throw new Error('Error del servidor');
    return response.json();
})
.then(telefonos => {
    console.log(telefonos)
    if (telefonos.length > 0) {
        telefonos.forEach(telefono => {
            cajaTelefonos.innerHTML += `<div><p>${telefono.marca}</p><p>${telefono.modelo}</p><p>${telefono.precio}</p><a href="/editar/${telefono.id}">Editar telefono</a></div>`;
        });
    }
    else {
        cajaTelefonos.innerHTML = `<p class="text-red-600">No hay teléfonos registrados</p>`;
    }
    
    
})
.catch(error => {
    console.error('Error fetch:', error);
    cajaTelefonos.innerHTML = '<p class="text-red-600">Error en la consulta</p>';
});