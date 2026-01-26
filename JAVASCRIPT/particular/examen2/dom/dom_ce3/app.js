const tareaInput = document.getElementById('tareaInput');
const botonAgregar = document.getElementById('btnAgregar');
const lista= document.getElementById('lista');
const botonLimpiar = document.getElementById('btnLimpiar');
const log=document.getElementById('log');
const mensaje= document.getElementById('mensaje');

botonAgregar.addEventListener('click',()=>{
    inputTarea=tareaInput.value.trim();//value obtiene el valor del input y trim quita espacios en blanco
    if(inputTarea===''){
        mensaje.textContent='No puedes agregar una tarea vacia';
        return;
    }
const li=document.createElement('li');//crea un elemento li
li.textContent=inputTarea;

lista.appendChild(li);

tareaInput.value='';
log.textContent+='tarea añadida\n';
});

botonLimpiar.addEventListener('click',()=>{
    lista.innerHTML='';//inner
    log.textContent += 'Lista de tareas limpiada\n';
});
lista.addEventListener('dblclick',(e)=>{
//eliminar tarea al hacer doble click
if(e.target.tagName==='LI'){//e.target es el elemento que disparo el evento
      log.textContent += `Tarea eliminada: ${e.target.textContent}\n`; 
       lista.removeChild(e.target);//removechild elimina un hijo del elemento


}
});
lista.addEventListener('click',(e)=>{
if (e.target.tagName=='LI') {
if (e.target.classList.contains('selected')) {
     e.target.classList.remove('selected');

} else {
     e.target.classList.add('selected');
}
}

});