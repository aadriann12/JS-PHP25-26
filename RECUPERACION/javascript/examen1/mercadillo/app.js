const negocio = (function(){
const productos = {};

function agregarProducto(nombre, cantidad, precio, categoria) {

    if (cantidad > 0 && precio > 0 && nombre.trim() !== '' && categoria.trim() !== '') {
       if (productos.length > 0 && !) {
         productos.push({
           'Nombre':  nombre,
             'Cantidad': cantidad,
             'Precio': precio,
             'Categoria': categoria
         });
       } else {
        
       }
    } else {
        alert("Datos inválidos. Por favor, verifica la información del producto.");
    }


}
function eliminarProducto(nombre) {
    if (productos.length > 0) {
        if (nombre.trim() !== '') {
            productos.delete(producto => producto.nombre.toLowerCase() === nombre.toLowerCase());
        } else {
            alert("Nombre de producto inválido.");
        }
    } else {
        alert("No hay productos para eliminar.");
    }
}

function buscarProducto(nombre) {
    if (productos.length > 0 && nombre.trim() !== '') {
        return productos.find(producto => producto.nombre.toLowerCase() === nombre.toLowerCase()) || null;

    }
}
function actualizarInventario(nombre, cantidad) {
    if (nombre.trim() !== '' && cantidad > 0) {
        const producto = buscarProducto(nombre);
        if (producto) {
            let cantidadProducto = producto.cantidad;

            if (cantidadProducto >= cantidad) {
                producto.cantidad += cantidad;
                alert(`Inventario actualizado. Nueva cantidad de "${nombre}": ${producto.cantidad}`);
            } else {
                alert(`No hay suficiente cantidad de "${nombre}" para actualizar el inventario.`);
            }
        } else {
            alert(`Producto "${nombre}" no encontrado.`);
        }
    }
}
function ordenarProductosPorPrecio() {
    let productosOrdenados = productos.sort((a, b) => a.precio > b.precio ? 1 : -1);
    return productosOrdenados;
}
function imprimirProductos() {
    let productosInventario = [];
    if (productos.length > 0) {
        for (const producto of productos) {
            productosInventario.push(`Nombre: ${producto.nombre}, Cantidad: ${producto.cantidad}, Precio: ${producto.precio}, Categoria: ${producto.categoria}, Total: ${producto.cantidad * producto.precio}`);
        }
    } else {
        alert("No hay productos en el inventario.");
        return;
    }
}
function filtrarProductosPorCategoria(categoría){
    if(productos.length>0 && categoría.trim() !== ''){
        let productosFiltrados=productos.filter(producto=>producto.categoria.toLowerCase()===categoría.toLowerCase());
        return productosFiltrados;
    }
}
}());