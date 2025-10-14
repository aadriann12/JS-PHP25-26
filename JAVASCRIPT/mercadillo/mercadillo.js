let productos = [];

function agregarProducto(nombre, precio, categoria) {
        let producto={

        
    
        nombre:nombre,
        precio:precio,
        categoria:categoria
    }
if (productos.includes) {

   alert("producto ya agregado");
    
} else { productos.push(producto);
    
}



}
function eliminarProducto(nombre){
const producto=productos.find(producto=>producto.nombre===nombre)
if (productos.includes(producto)) {
    productos.splice(producto,1);

    
} else {
    alert("no existe ese producto");
}


}
function buscarProducto(nombre){


const producto=productos.find(producto=>producto.nombre===nombre)
if (productos.includes(producto)) {
alert(producto.nombre+producto.precio+nombre.categoria+"hola");

    
} else {
    alert("no existe ese producto");
}



}


