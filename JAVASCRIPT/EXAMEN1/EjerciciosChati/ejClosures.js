'use strict';
function crearCarrito(){

let carrito=[
{nombre:"manzana",precio:1},
{nombre:"pera",precio:2},
{nombre:"banana",precio:3}


];
function agregarProducto(nombre,precio){
    if (nombre!=null&&precio!=null) {
        carrito.push({nombre: nombre, precio: precio});
        console.log("hecho");
    } else {
        console.log("falta nombre o precio");
    }



}
function verCarrito(){
for (const element of carrito) {
     console.log(element);
}
}
function calcularTotal(){

    let total=0;
    for (const element of carrito) {
        total+=element.precio;
    }
    console.log("el total es: "+total);

}
return {agregarProducto,verCarrito,calcularTotal};

}

// ejemplo de uso
let funcion=crearCarrito();
funcion.agregarProducto("naranja",4);
funcion.verCarrito();
funcion.calcularTotal();