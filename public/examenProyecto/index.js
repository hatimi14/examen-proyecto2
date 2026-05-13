
const sidebar = document.getElementsByClassName('sidebar')[0];
const featured = document.getElementsByClassName('featured')[0];
const header = document.getElementsByTagName('header')[0];

const linka = document.createElement('a');
linka.href = '/añadirProyecto';
linka.textContent = "Añade un nuevo proyecto";

header.appendChild(linka);

fetch('/api/proyectos', {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
    }
})
.then(response =>{
    if (!response.ok) throw new Error('Error del servidor');
    return response.json();
})
.then(proyectos => {
    console.log(proyectos)
    if (proyectos.length > 0) {
        proyectos.forEach(proyecto => {
            sidebar.innerHTML += `<p>${proyecto.nombre}</p>`;
        });
    }
    else {
        sidebar.innerHTML = `<p class="text-red-600">No hay proyectos registrados</p>`;
    }
    
    
})
.catch(error => {
    console.error('Error fetch:', error);
    sidebar.innerHTML = '<p class="text-red-600">Error en la consulta</p>';
});



fetch(`/api/mostrarUltimo`)
    .then(response => response.json())
    .then(proyecto => {
        console.log(proyecto)
        featured.innerHTML = `<p>${proyecto.nombre}</p><p>${proyecto.descripcion}</p><p>${proyecto.fecha_inicio}</p><p>${proyecto.fecha_fin}</p><a href="/editarProyecto/${proyecto.id}">Editar Proyecto</a>`;
    })
    .catch(error => console.error('Error:', error));

