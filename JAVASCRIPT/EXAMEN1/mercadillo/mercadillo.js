let productos = [];
let cantidad=0;
function agregarProducto(nombre, precio, categoria) {
    if (precio/1!==precio) {
        alert("el precio debe ser un numero");
        return;
    }
        let producto={

        
    
        nombre:nombre,
        precio:precio,
        categoria:categoria
    }

if (productos.find(producto=>producto.nombre===nombre)) {// .find busca el array y devuelve el primer elemento que cumpla la condicion si no lo encuentra devuelve undefined

   alert("producto ya agregado");

} else {
    productos.push(producto);
    cantidad++;
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
function mostrarProductos(){
    let lista=[];
    productos.forEach(element => {
        lista.push(element);
    });
    return lista;
}
function mostrarProductosEnTexto() {
    let texto = "Lista de productos:<br>";
    productos.forEach(producto => {
        texto += `${producto.nombre} - ${producto.precio} - ${producto.categoria}<br>`;
    });
    document.getElementById('productos').innerHTML = texto;
}


function ordenarProductosPorPrecio(){
let listaOrdenada=productos
listaOrdenada.sort((a, b) => a.precio - b.precio);//ordena por precio ascendente




return listaOrdenada;


}
function filtrarProductosPorCategoria(categoria){
    let listaFiltrada=productos.filter(producto=>producto.categoria===categoria);
  document.getElementById('productos').innerHTML = listaFiltrada;
}

window.addEventListener('load',()=>{
    let $btnCrear=document.getElementById('Agregar Producto');
    let $btnBorrar=document.getElementById('Eliminar Producto');
    let $btncrear,addEventListener('click',agregarProducto)
    let $txtNombre=document.getElementById('nombre');
      let $txtPrecio=document.getElementById('precio');
        let $txtCategoria=document.getElementById('categoria');

    agregarProducto($txtNombre)

})

