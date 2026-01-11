const btnCargar=document.getElementById('btnCargar');
const btnEditarSeleccionado=document.getElementById('btnEditarSeleccionado');
const btnLimpiar=document.getElementById('btnLimpiar');
const estado=document.getElementById('estado');
const mensaje=document.getElementById('mensaje');
const tablaPedidos=document.getElementById('tablaPedidos');
const tBodyPedidos=document.getElementById('tbodyPedidos');
const formPedido=document.getElementById('formPedido');
const btnOrdenarPorNombre=document.getElementById('btnOrdenarPorNombre');
let pedidos=[];
let editandoId=null;

async function cargarPedidos (){
estado.textContent="cargando..."
const res=await fetch ('https://jsonplaceholder.typicode.com/posts');
if (!res.ok) {
    mensaje.textContent='error';
    return;
} 
const pedidosAPI=await res.json();
estado.textContent="cargado";
render(pedidosAPI);
pedidos=pedidosAPI;
}

function render (pedidos){
    tBodyPedidos.innerHTML='';
    for (const pedido of pedidos) {
        const fila=document.createElement('tr');
        fila.innerHTML=`
        
        <td>${pedido.id}</td>
        <td>${pedido.title}</td>
        <td>${pedido.userId}</td>
        <td>${pedido.status}</td>
        <td>${pedido.priority?"prioritario":"no prioritario"}</td>
        <td><button class="btnEliminar" data-id="${pedido.id}">Eliminar</button><button class="btnEditar" data-id="${pedido.id}">Editar</button></td>


        `;

        tBodyPedidos.appendChild (fila);
    }}

    btnCargar.addEventListener('click',cargarPedidos);

btnOrdenarPorNombre.addEventListener('click', () => { 
    const pedidosCopy = pedidos.toSorted(
        (a, b) => a.title.localeCompare(b.title)
    );
    render(pedidosCopy);
});



