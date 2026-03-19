const formTarea = document.getElementById('formTarea');
const inpTexto = document.getElementById('inpTexto');
const mensaje = document.getElementById('mensaje');
const listaTareas = document.getElementById('listaTareas');
const btnLimpiar = document.getElementById('btnLimpiar');
const log = document.getElementById('log');


formTarea.addEventListener('submit', (e) => {
    e.preventDefault();
    if (inpTexto.value!=='') {
      
        const tarea = document.createElement('div');
        tarea.innerHTML=`<span>${inpTexto.value}</span><button class="btnEliminar">Eliminar</button>`;
        tarea.classList.add('tarea');//class="tarea"
        listaTareas.appendChild(tarea);//agregar la tarea a la lista
        log.textContent+='tarea añadida ';
        inpTexto.value='';
        mensaje.textContent='';
    } else {
        log.textContent+='error en texto, debe ser no vacio ';
    }

});


listaTareas.addEventListener('click', (e) => {
    if (e.target.classList.contains('btnEliminar')) {//classlist porque puede tener varias clases
        const tarea = e.target.closest('.tarea');
        listaTareas.removeChild(tarea);
        log.textContent+='tarea eliminada ';
    }else{
    if (e.target.classList.contains('tarea')) {
        //miro si alguna tarea esta seleccionada, si lo esta la borro la seleccion
        tareaSeleccionada=listaTareas.querySelector('.selected');
        if (tareaSeleccionada) {
            tareaSeleccionada.classList.remove('selected');
            e.target.classList.add('selected');
        } else {
            e.target.classList.add('selected');
        }
    } 
    }

    });
    
    listaTareas.addEventListener('dblclick', (e) => {
        if (e.target.classList.contains('tarea')) {

const tarea=e.target;
tarea.classList.add('completada');
if(tarea.classList.contains('selected')){
    tarea.classList.remove('selected');
}
log.textContent+=`tarea: ${tarea.textContent} completada`;//textContent para no traer el html


        }});
//evento personalizado para eliminar tarea pulsando delete o suprimir
        document.addEventListener('keydown', (e) => {
if (listaTareas.querySelector('.selected')!==null) {
    const tarea=listaTareas.querySelector('.selected');
    if (e.key==='Delete' || e.key==='Backspace') {
     tarea.remove();
        log.textContent+='tarea eliminada ';
    
} 
    }
}

        );

btnLimpiar.addEventListener('click', () => {
    listaTareas.innerHTML='';
    log.textContent+='lista limpiada ';
}
);