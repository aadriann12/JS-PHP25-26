'use strict';
import datos from './datos.js';
import { Autor } from './Autor.js';
import { Libro } from './Libro.js';
import { Biblioteca } from './Biblioteca.js';

const biblio= (function () {

autores=[];
libros=[];

for (const element of datos.autores) {

     autores.push(element);   
    
}

for (const element of datos.libros) {

     libros.push(element);   
    

}

return {

generarHTMLListadoAutores: function(){
    let html='';

},

BuscarLibro(Libroid){
for (const element of libro) {
    if (element.Libroid===Libroid) {
        return element;
    }

}
return null;
},
BuscarAutor(autorid){
for (const element of Autor) {
    if (element.autorid===autorid) {
        return element;
    }

}
return null;
},


crearLibro(libro){

if (libros.BuscarLibro(libro.Libroid)===null) {

    libros.push(libro);
    return true;
} 

 return false;   



},
crearAutor(Autor){

if (autores.BuscarLibro(Autor.autorid)===null) {

    autores.push(autores);
    return true;
} 

 return false;   



},
borrarLibro(libroid){
let cont =0;

for (const element of libros) {
   if (element.libroid===libroid) {
  libros.splice(cont);
 
  return true;

   }

 cont++;
}
   return false;
}





}


})();
