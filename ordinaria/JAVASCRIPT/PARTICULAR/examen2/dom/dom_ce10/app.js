const formUsuario = document.getElementById('formUsuario');
const inpNombre = document.getElementById('inpNombre');
const inpEdad = document.getElementById('inpEdad');
const inpEmail = document.getElementById('inpEmail');
const mensaje = document.getElementById('mensaje');
const tablaUsuarios = document.getElementById('tablaUsuarios');
const btnEliminarSeleccionado= document.getElementById('btnEliminarSeleccionado');
const btnLimpiar= document.getElementById('btnLimpiar');
const log=document.getElementById('log');

formUsuario.addEventListener("submit", (e)=>{
e.preventDefault();
const edad=parseInt(inpEdad.value);
if (inpNombre.value.trim()!==''&&edad>0&&inpEmail.value.trim()!=='') {
    const fila=document.createElement('tr');
    fila.innerHTML=`<td>${inpNombre.value}</td><td>${edad}</td><td>${inpEmail.value}</td><td><button class="btnEliminar">Eliminar</button></td>`;
    tablaUsuarios.appendChild(fila);
    log.textContent+='usuario añadido ';
    inpNombre.value='';
    inpEdad.value='';
    inpEmail.value='';
    mensaje.textContent='';

} else {
    mensaje.textContent='Datos no validos';
   
}






});
tablaUsuarios.addEventListener('click', (e)=>{
    if (e.target.closest('tr')) {
const fila=e.target.closest('tr');
const filaseleccionada=document.querySelector('.selected');
if (filaseleccionada) {
    filaseleccionada.classList.remove('selected');
}
fila.classList.add('selected');

    }
});
 