const formAlumno = document.getElementById('formAlumno');
const inpNombre = document.getElementById('inpNombre');
const inpNota = document.getElementById('inpNota');
const mensaje = document.getElementById('mensaje');
const tablaAlumnos = document.getElementById('tablaAlumnos');
const btnLimpiar = document.getElementById('btnLimpiar');
const log=document.getElementById('log');


formAlumno.addEventListener('submit', (e)=> {
e.preventDefault();
if (inpNombre.value!=='' && inpNota.value!==''&& inpNota.value>=0 && inpNota.value<=10) {
    const fila=document.createElement('tr');
    fila.innerHTML= `<td>${inpNombre.value}</td><td>${inpNota.value}</td><td><button  class="btnEliminar">Eliminar</button></td>`;
    tablaAlumnos.appendChild(fila);
    log.innerText='alumno añadido';
    inpNombre.value='';
    inpNota.value='';
    mensaje.innerText='';

    const btnEliminar=fila.querySelector('.btnEliminar');
    btnEliminar.addEventListener('click', ()=> {
        tablaAlumnos.removeChild(fila);
        log.innerText='alumno eliminado';
    });

} else {
   log.innerText='datos no validos'; 
}
});


tablaAlumnos.addEventListener('click', (e)=> {
    //al hacer click en una fila, se resalta, pero si ya hay una resaltada se quita y se pone la nueva
  if (e.target.tagName==='TD') {
    const fila=e.target.closest('tr');
    const filaSeleccionada=document.querySelector('.selected');
    if (filaSeleccionada) {
      filaSeleccionada.classList.remove('selected');
    }
    fila.classList.add('selected');

    
  } else {
    
  }
});
btnLimpiar.addEventListener('click', ()=> {
    tablaAlumnos.innerHTML='';

    
});




