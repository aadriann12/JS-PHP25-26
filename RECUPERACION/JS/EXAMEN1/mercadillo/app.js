const negocio = (function(){
let productos = {};

function agregarProducto(nombre, cantidad, precio, categoria) {

    if (productos[nombre]) {
        alert('producto existe');
        return;
    }
 productos[nombre]={
    nombre:nombre,
   
    cantidad:cantidad,
    precio:precio,
    categoria:categoria
};
return productos[nombre];


 }

// function eliminarProducto(nombre) {
//     if (productos.length > 0) {
//         if (nombre.trim() !== '') {
//             productos.delete(producto => producto.nombre.toLowerCase() === nombre.toLowerCase());
//         } else {
//             alert("Nombre de producto inválido.");
//         }
//     } else {
//         alert("No hay productos para eliminar.");
//     }
// }

function eliminarProducto(nombre){
if(!productos[producto['nombre']]){

alert('no existe');
return;
}

delete producto[nombre];


}


function buscarPoducto(nombre)
{
    if(!productos[nombre]){
alert('no existe');
return;
    }
    return productos[nombre];
}
function actualizarInventario(nombre,cantidad){
     if(!productos[nombre]){
alert('no existe');
return;
    }

 
    productos['nombre'].cantidad+=cantidad;
   




}

function ordenarProductosPorPrecio(){
    // for (const key in productos) {  
    // }
let productosOrdenados;

}
function imprimirInventario(){
    let resultado=[];
   for (const key in productos) {

    resultado.push({'nombre':productos[key],'cantidad':productos[key].cantidad,'precio':productos[key].precio,'categoria':productos[key].categoria,'total':productos[key].cantidad*productos[key].precio});

    
   }
   return resultado;
}

// function buscarProducto(nombre) {
//     if (productos.length > 0 && nombre.trim() !== '') {
//         return productos.find(producto => producto.nombre.toLowerCase() === nombre.toLowerCase()) || null;

//     }
// }
// function actualizarInventario(nombre, cantidad) {
//     if (nombre.trim() !== '' && cantidad > 0) {
//         const producto = buscarProducto(nombre);
//         if (producto) {
//             let cantidadProducto = producto.cantidad;

//             if (cantidadProducto >= cantidad) {
//                 producto.cantidad += cantidad;
//                 alert(`Inventario actualizado. Nueva cantidad de "${nombre}": ${producto.cantidad}`);
//             } else {
//                 alert(`No hay suficiente cantidad de "${nombre}" para actualizar el inventario.`);
//             }
//         } else {
//             alert(`Producto "${nombre}" no encontrado.`);
//         }
//     }
// }
// function ordenarProductosPorPrecio() {
//     let productosOrdenados = productos.sort((a, b) => a.precio > b.precio ? 1 : -1);
//     return productosOrdenados;
// }
// function imprimirProductos() {
//     let productosInventario = [];
//     if (productos.length > 0) {
//         for (const producto of productos) {
//             productosInventario.push(`Nombre: ${producto.nombre}, Cantidad: ${producto.cantidad}, Precio: ${producto.precio}, Categoria: ${producto.categoria}, Total: ${producto.cantidad * producto.precio}`);
//         }
//     } else {
//         alert("No hay productos en el inventario.");
//         return;
//     }
// }
// function filtrarProductosPorCategoria(categoría){
//     if(productos.length>0 && categoría.trim() !== ''){
//         let productosFiltrados=productos.filter(producto=>producto.categoria.toLowerCase()===categoría.toLowerCase());
//         return productosFiltrados;
//     }
// }
// }());
function filtrarProductosPorCategoria(categoria){
    for (const key in productos) {
     if(productos[key].categoria==categoria.toLower){

     
        
    }
}
return{
    agregarProducto,
    eliminarProducto,
    buscarPoducto,
    actualizarInventario,
    ordenarProductosPorPrecio,
    imprimirInventario};

}());

negocio.agregarProducto('manzana',10,0.5,'fruta');
negocio.agregarProducto('pera',20,0.3,'fruta');
console.log(negocio.imprimirInventario());
