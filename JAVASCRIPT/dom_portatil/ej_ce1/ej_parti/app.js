const btnCargar=document.getElementById('btnCargar');
const btnLimpiar=document.getElementById('btnLimpiar');
const btnCancelar=document.getElementById('btnCancelar');
const estado=document.getElementById('estado');
const mensaje=document.getElementById('mensaje');
const tablaUsuarios=document.getElementById('tablaUsuarios').getElementsByTagName('tbody')[0];
const tbodyUsuarios=document.getElementById('tbodyUsuarios');
const formUsuario=document.getElementById('formUsuario');
const primeraParte=document.getElementById('primeraParte');

const usuarios=[];



async function cargarUsuarios(callback){
    estado.textContent='Cargando...';
 try {
       const res=await fetch('https://jsonplaceholder.typicode.com/users');
       if (!res.ok) {
            callback(null,'Error al cargar los usuarios');
       }  
       const usuariosCargados=await res.json();
       render(usuariosCargados);
       estado.textContent='Cargado';
usuarios=usuariosCargados;
         callback(usuarios,null);
         
 } catch (error) {
   
           callback(null,error.message);
       
 }

}


function render(listaUsuarios){
tablaUsuarios.innerHTML='';
for (const usuario of listaUsuarios) {
    const fila=tablaUsuarios.insertRow();
    
    fila.insertCell().textContent=usuario.name;
    fila.insertCell().textContent=usuario.email;
     fila.insertCell().textContent=usuario.address.city;
     //true o false aleatorio
fila.insertCell().textContent=(Math.random() < 0.5) ? 'true' : 'false';

//boton eliminar y editar
fila.insertCell().innerHTML='<button class="btnEditar">Editar</button> <button class="btnEliminar">Eliminar</button>';

 
}


}


btnCargar.addEventListener('click',()=>{
    cargarUsuarios((usuarios,error)=>{
        if (error) {
            mensaje.textContent=error;
            estado.textContent='Error';
        }
 }); });



 tbodyUsuarios.addEventListener('click',(e)=>{
   if (!e.target.classList.contains('btnEditar')) {
     const fila=e.target.closest('tr');
 const filaSeleccionada=document.querySelector('.selected');
 if (filaSeleccionada) {
     filaSeleccionada.classList.remove('selected');
 
 } else {
 
     fila.classList.add('selected');
     
 }
   }else{

const fila=e.target.closest('tr');
formUsuario.nombre.value=fila.cells[0].textContent;
formUsuario.email.value=fila.cells[1].textContent;
formUsuario.ciudad.value=fila.cells[2].textContent;
formUsuario.activo.checked=(fila.cells[3].textContent==='true') ? true : false;




   } 


 });

btnLimpiar.addEventListener('click',()=>{
    tablaUsuarios.innerHTML='';
    estado.textContent='Tabla limpiada';
    mensaje.textContent='';
   
});



