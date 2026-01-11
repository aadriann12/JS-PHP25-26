const formProducto = document.getElementById('formProducto');
const inpNombre = document.getElementById('inpNombre');
const inpPrecio = (document.getElementById('inpPrecio'));
const inpCategoria = document.getElementById('inpCategoria');
const mensaje = document.getElementById('mensaje');
const tablaProductos = document.getElementById('tablaProductos');
const btnEliminarSeleccionado= document.getElementById('btnEliminarSeleccionado');
const btnlimpiar= document.getElementById('btnLimpiar');
const log=document.getElementById('log');
formProducto.addEventListener('submit', (e)=> {
e.preventDefault();
if (inpNombre.value!=='' && inpPrecio.value!==''&&inpCategoria.value!=='') {

    const fila=document.createElement('tr');
    fila.innerHTML= `<td>${inpNombre.value}</td><td>${inpPrecio.value}</td><td>${inpCategoria.value}</td><td><button  class="btnEliminar">Eliminar</button></td>`;
    tablaProductos.appendChild(fila);
    log.textContent+='producto añadido ';
    inpNombre.value='';
    inpPrecio.value='';
    inpCategoria.value='';
    mensaje.textContent='';
} else {
    log.textContent+='datos no validos ';
    mensaje.textContent='Datos no validos';
    inpNombre.value='';
    inpPrecio.value='';
    inpCategoria.value='';
}});

tablaProductos.addEventListener('click', (e)=> {
    //al hacer click en una fila, se resalta, pero si ya hay una resaltada se quita y se pone la nueva
    if (e.target.tagName==='TD'){

    const fila=e.target.closest('tr');
    const filaSeleccionada=document.querySelector('.selected');
    if (filaSeleccionada) {
      filaSeleccionada.classList.remove('selected');
    }
    fila.classList.add('selected');
    
}
});
tablaProductos.addEventListener('click', (e) => {
    if (e.target.classList.contains('btnEliminar')) {
        const fila = e.target.closest('tr');//closest para buscar el elemento padre mas cercano
        tablaProductos.removeChild(fila);
        log.textContent+='producto eliminado ';
    }

});
btnEliminarSeleccionado.addEventListener('click', ()=> {
      const filaSeleccionada = tablaProductos.querySelector('.selected');
        if (filaSeleccionada) {
            tablaProductos.removeChild(filaSeleccionada);
            log.textContent += 'producto eliminado ';
        }else{
            mensaje.textContent='ninguna fila seleccionada';
    }
});
document.addEventListener('keydown', (e) => {
    if (e.key === 'Delete' || e.key === 'Supr') {
        const filaSeleccionada = tablaProductos.querySelector('.selected');
        if (filaSeleccionada) {
            tablaProductos.removeChild(filaSeleccionada);
            log.textContent += 'producto eliminado ';
        }else{
            mensaje.textContent='ninguna fila seleccionada';
    }
    }
});
btnlimpiar.addEventListener('click', ()=> {
    tablaProductos.innerHTML='';
    log.textContent+='tabla limpiada ';

});




