const $tienda=(function(){
const ventas = [
 { producto:"teclado", precio:45, categoria:"informatica", unidades:2 },
 { producto:"raton", precio:20, categoria:"informatica", unidades:1 },
 { producto:"camiseta", precio:15, categoria:"ropa", unidades:3 },
 { producto:"pantalon", precio:40, categoria:"ropa", unidades:1 },
 { producto:"monitor", precio:200, categoria:"informatica", unidades:1 },
 { producto:"chaqueta", precio:60, categoria:"ropa", unidades:2 }
];
function productosCaros(ventas){
    let caros=[];
    for (const element of ventas) {
        if (element.precio>50) {
            caros.push({producto:element.producto,precio:element.precio,categoria:element.categoria});

        } 
    }
    caros.sort((a,b)=>a.producto.localeCompare(b.producto));
    return caros;
}
function estadisticasPorCategoria(ventas){
let categorias={};
for (const venta of ventas) {
    if(!categorias[venta.categoria]){
        categorias[venta.categoria]={
            categoria:venta.categoria,
            unidades:0,
            precio:0,
            contador:0
        };
    }
    categorias[venta.categoria].precio+=venta.precio;
    categorias[venta.categoria].unidades+=venta.unidades;
    categorias[venta.categoria].contador++;
    
}

let resultado=[];

for (const categoria in categorias) {
    if (!Object.hasOwn(object, key)) continue;
    
    const element = object[key];
    
    for (const categoria of categorias) {
        resultado.push({categoria:categoria,precioMedio:categoria.precio/categoria.contador,unidadesMedias:categoria.unidades/categoria.contador});
    }
}
return resultado;
}

function exportarJson(ventas){
   try {
     return JSON.stringify(ventas);
   } catch (error) {
    console.error("Error al convertir a JSON:", error);
   }
}
function cargarjson(cadena){
    try {
    if (Array.isArray(cadena)) {
            return JSON.parse(cadena);
    } else {
        
    }
    } catch (jsonError) {
        console.error("Error al cargar la cadena JSON:", jsonError);
        return null;
    }
}
}());