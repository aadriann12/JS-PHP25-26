const productos=[ {nombre:"pan ", precio:1}, {nombre:"leche", precio:0.8}, {nombre:"huevos", precio:2}, {nombre:"carne", precio:5}, {nombre:"pescado", precio:4}];

const salida=document.getElementById("salida");

function limpiar(){
    salida.textContent="";
}


function listar(){
    limpiar();
    for(const p of productos){
        salida.textContent+=`${p.nombre} - ${p.precio} €\n`;
    }

}
function buscar(){
    const nombreBuscado=document.getElementById("nombreProducto").value.toLowerCase();
    limpiar();
    const productoEncontrado=productos.find(p=>p.nombre.toLowerCase()===nombreBuscado);
    if(productoEncontrado){
        salida.textContent=`${productoEncontrado.nombre} - ${productoEncontrado.precio} €`;
    }else{
        salida.textContent="Producto no encontrado";
    }
}
function agregar(){
    const nuevoNombre=document.getElementById("nuevoNombre").value;
    const nuevoPrecio=parseFloat(document.getElementById("nuevoPrecio").value);
    if(nuevoNombre && !isNaN(nuevoPrecio)){
        productos.push({nombre:nuevoNombre, precio:nuevoPrecio});
        salida.textContent=`Producto agregado: ${nuevoNombre} - ${nuevoPrecio} €`;
    }else{
        salida.textContent="Datos inválidos";
    }
}