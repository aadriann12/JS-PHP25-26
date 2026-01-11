const formProducto = document.getElementById('formProducto');
const inpnombre = document.getElementById('inpNombre');
const inpPrecio = document.getElementById('inpPrecio');
const mensaje = document.getElementById('mensaje');
const listaProductos = document.getElementById('listaProductos');
const log = document.getElementById('log');

formProducto.addEventListener('submit', (e) => {
    e.preventDefault(); // Evita el envío del formulario
    const nombre = inpnombre.value.trim();
    const precio = parseFloat(inpPrecio.value.trim());//trim para quitar espacios en blanco

    if (nombre === '' || isNaN(precio) || precio < 0||precio===0) {
        mensaje.textContent = 'Error: Datos inválidos';
    } else {
        const div = document.createElement('div');
        div.textContent = `Producto: ${nombre}, Precio: ${precio.toFixed(2)} €`;
        div.classList.add('producto');
        //eliminar producto
        const btnEliminar = document.createElement('button');
        btnEliminar.textContent = 'Eliminar';
        btnEliminar.classList.add('btnEliminar');
        div.appendChild(btnEliminar);
        listaProductos.appendChild(div);//apendchild para añadir un hijo al elemento

        listaProductos.addEventListener('click', (e) => {
            if(e.target.classList.contains('btnEliminar')) {
                listaProductos.removeChild(e.target.parentElement);
                log.textContent += `Producto eliminado: ${nombre}\n`;
            }


        });
        log.textContent += `Producto añadido: ${nombre} con precio ${precio.toFixed(2)} €\n`;
        mensaje.textContent  = '';
        inpnombre.value = '';
        inpPrecio.value = '';

    }});

