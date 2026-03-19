let usuarios = [];
let usuariosFiltrados = [];//los que estoy mostrando
const btnCargar = document.getElementById('btnCargar');
const btnFiltrar = document.getElementById('btnFiltrar');
const inpFiltro = document.getElementById('inpFiltro');
const btnLimpiar = document.getElementById('btnLimpiar');
const btnResetFiltro = document.getElementById('btnResetFiltro');
const estado = document.getElementById('estado');
const mensaje = document.getElementById('mensaje');
const lista = document.getElementById('lista');

btnCargar.addEventListener('click', async () => {
estado.textContent='cargando...';
const res= await fetch('https://jsonplaceholder.typicode.com/users');
if (res.ok) {
    const data= await res.json();
    usuarios=data;
    usuariosFiltrados=data;
    render(usuariosFiltrados);
    estado.textContent='datos cargados: '+usuarios.length+' usuarios';
} else {
    estado.textContent='Error al cargar los datos';
}

});

function render(listaUsuarios) {
    lista.innerHTML=''; // Limpiar lista antes de renderizar
    for (const usuario of listaUsuarios) {
        const li=document.createElement('li');
      li.textContent=`${usuario.name} - ${usuario.email} - ${usuario.address.city} `;
      li.innerHTML+=`<button class="btnSeleccionar">Seleccionar</button><button class="btnEditar">Editar</button><button class="btnEliminar">Eliminar</button>`;
      lista.appendChild(li);
    }
    }
lista.addEventListener('click', (e) => {
    if (e.target.classList.contains('btnSeleccionar')) {
e.target.parentElement.classList.toggle('selected');
    }
});
btnFiltrar.addEventListener('click', () => {
    if (inpFiltro.value!=='') {
        filtro=inpFiltro.value.trim().toLowerCase();
        const usuariosFiltrados=usuarios.filter(usuario=>usuario.name.toLowerCase().includes(filtro));
        render(usuariosFiltrados);
        
    } else {
        mensaje.textContent+='error filtro vacio';
    }
   });



btnResetFiltro.addEventListener('click', () => {
    inpFiltro.value="";
    usuariosFiltrados=usuarios;
    render(usuariosFiltrados);
    mensaje.value="";
    //pongo mensaje mostrando todos hasta que lo muestre
    mensaje.textContent='Mostrando todos los usuarios';
    setTimeout(() => {
        mensaje.textContent='';
    }, 1000);

});





btnLimpiar.addEventListener('click', () => {
    lista.innerHTML='';
    usuarios=[];
    usuariosFiltrados=[];
    
});

lista.addEventListener('click', (e) => {
    if (e.target.classList.contains('btnEditar')) {
        
        const li=e.target.parentElement;
        const liMemora=li;
const nombreNuevo=prompt('Introduce el nuevo nombre:', li.textContent.split(' - ')[0]);
if (nombreNuevo) {
    li.firstChild.textContent=nombreNuevo+' - ';
}
}});
