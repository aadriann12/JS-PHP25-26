
const nombre_biblioteca="mi instituto";
let totalUsuarios=21;
console.log('el nombre es: ${nombre_biblioteca} y el total de usuarios es ${totalUsuarios}');

let librosDisponibles=["el señor de los anillos js","harry potter","te espero en el fin del mundo","la asistenta","la asistenta 2"];
for (const element of librosDisponibles) {
    console.log(element);

}
let librosPrestados=[];
for (const element of librosDisponibles) {
    if (element.includes("js")) {
        librosPrestados.push(element);
    } 
}
function mostrarResumen(nombre,numeroUsuarios,numeroTotalLibrosDisponibles,numeroTotalLibrosPrestados){
    let resultado='biblioteca: ${nombre_biblioteca}'
    'usuarios activos: ${numeroUsuarios}'
    'libros disponibles: ${librosDisponibles.length}'
    'libros prestados: ${librosPrestados.length}';


console.log(resultado);
return resultado;




//4
let duracionMaxima=(parseInt)(prompt("pon la duracion maxima del prestamo"));
if (isFinite(duracionMaxima)) {
    console.log(Math.pow(duracionMaxima,2));
    console.log(Date().tolocaleString());

} 


ultimoPrestamo={
usuario:"adrian",
titulo:"harry potter",
fecha:Date().tolocaleString()



}
for (const key in ultimoPrestamo) {
    if (!Object.hasOwn(object, key)) continue;
    
    const element = object[key];
    
    
}


'use strict';
 class libro{
constructor(titulo, autor){
    this.titulo=titulo;

}
#estado="disponible";



prestar(estado){
    this.#estado="prestado";
}
info(){
    console.log(this.titulo+" - "+this.autor+" - "+this.#estado);
}



}
let Libro1=new Libro("harry potter","jk roulin");
let libro2=new Libro("libro 2","yo");

mostrarResumen(nombre_biblioteca,numeroUsuarios,librosDisponibles.length,librosPrestados.length);
Libro1.info();
libro2.info();

}