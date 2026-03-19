// 1. Selección de elementos del DOM
const input = document.getElementById('inputTarea');
const btnAgregar = document.getElementById('btnAgregar');
const lista = document.getElementById('listaTareas');

// 2. Evento para añadir tareas
btnAgregar.addEventListener('click', () => {
    const textoTarea = input.value.trim();

    if (textoTarea === "") return; // Evita añadir tareas vacías

    // Crear el elemento de la lista (li)
    const nuevaTarea = document.createElement('li');
    nuevaTarea.textContent = textoTarea;

    // Crear el botón de eliminar para esta tarea
    const btnEliminar = document.createElement('button');
    btnEliminar.textContent = 'Eliminar';
    btnEliminar.classList.add('btn-borrar'); // Añadimos una clase para identificarlo

    // Insertar el botón dentro del li y el li dentro de la ul
    nuevaTarea.appendChild(btnEliminar);
    lista.appendChild(nuevaTarea);

    // Limpiar el input y devolverle el foco
    input.value = '';
    input.focus();
});

// 3. Delegación de eventos para eliminar tareas
lista.addEventListener('click', (event) => {
    // Comprobamos si el clic fue en un botón de eliminar
    if (event.target.classList.contains('btn-borrar')) {
        // Buscamos el ancestro 'li' más cercano y lo eliminamos
        const tareaAEliminar = event.target.closest('li');
        tareaAEliminar.remove();
    }
});