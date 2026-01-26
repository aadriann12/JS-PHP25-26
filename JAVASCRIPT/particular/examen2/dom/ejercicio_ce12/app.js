let usuarios=[];
let editandoId=null;

const btnCargar=document.getElementById('btnCargar');
const btnLimpiar=document.getElementById('btnLimpiar');
const estado=document.getElementById('estado');
const mensaje=document.getElementById('mensaje');
const tbodyUsuarios=document.getElementById('tbodyUsuarios');
const formularioUsuario=document.getElementById('formUsuario');

async function cargarUsuarios (){
estado.textContent="cargando..."
    const respuesta= await fetch('https://jsonplaceholder.typicode.com/users');

if (!respuesta.ok) {
  mensaje.textContent='error';
  return;
} else {     
    const usuariosJson= await respuesta.json();
    estado.textContent="cargado";
    usuarios=usuariosJson;
}
render(usuarios);

}
btnCargar.addEventListener('click',cargarUsuarios);