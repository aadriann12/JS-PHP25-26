'use strict';

const btnCargar = document.getElementById('btnCargar');
const estado = document.getElementById('estado');
const mensaje = document.getElementById('mensaje');
const tablaUsuarios = document.getElementById('tablaUsuarios');
const formUsuario = document.getElementById('formUsuario');

const usuarios = [];

async function cargarUsuarios() {
  estado.textContent = 'Cargando...';

  const res = await fetch('https://jsonplaceholder.typicode.com/users');
  const data = await res.json();

  if (!res.ok) {
    mensaje.textContent = `Error ${res.status}`;
    return;
  }

  
  render(data);
}

function render(usuarios2) {
  tablaUsuarios.innerHTML = '';

  for (const u of usuarios2) {

    tablaUsuarios.innerHTML += `
      <tr data-id="${u.id}">
        <td>${u.name}</td>
        <td>${u.email}</td>
        <td>${u.address.city}</td>
        <td><button class="btnEliminar" data-id="${u.id}">Eliminar</button></td>
      </tr>
    `;
    usuarios.push(u);
  }
 

  estado.textContent = `Cargados ${usuarios.length} usuarios`;
}
btnCargar.addEventListener('click', cargarUsuarios);

tablaUsuarios.addEventListener('click', (e) => {
  if (e.target.className === 'TD') {
    const fila = e.target.closest('tr');
    document.querySelector('.selected')?.classList.remove('selected');
    fila.classList.add('selected');
  }

  if (e.target.classList.contains('btnEliminar')) {
    const fila = e.target.closest('tr');
    fila.remove();
    estado.textContent = 'Eliminado';
  }
});

formUsuario.addEventListener('submit', (e) => {
  e.preventDefault();

  const fd = new FormData(formUsuario);
  const nombre = fd.get('name');
  const email = fd.get('email');
  const ciudad = fd.get('ciudad');

  if (nombre === '' || email === '' || ciudad === '') {
    mensaje.textContent = 'Datos inválidos';
    return;
  }

  usuarios.push({ name: nombre, email, address: { city: ciudad } });
  render(usuarios);
  formUsuario.reset();
});

