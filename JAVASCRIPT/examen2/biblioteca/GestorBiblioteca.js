'use strict';
import datos from './datos.js';
import { Autor } from './Autor.js';
import { Libro } from './Libro.js';
import { Biblioteca } from './Biblioteca.js';

const biblio = (function () {

  // MAL (sin let/const, variables globales implícitas)
  // autores = [];
  // libros = [];

  // BIEN
  let autores = [];
  let libros = [];
  let bibliotecas = [];

  // ===================== CARGA INICIAL DE DATOS =====================

  // MAL (metes objetos planos, no instancias de las clases)
  // for (const element of datos.autores) {
  //   autores.push(element);   
  // }

  // BIEN: convertir cada objeto de datos en una instancia de Autor
  for (const a of datos.autores) {
    autores.push(
      new Autor(a.autorId, a.nombre, a.nacionalidad, a.biografia, a.libros)
    );
  }

  // MAL (igual que arriba, objetos planos, no Libro)
  // for (const element of datos.libros) {
  //   libros.push(element);   
  // }

  // BIEN: instancias de Libro
  for (const l of datos.libros) {
    libros.push(
      new Libro(l.libroId, l.titulo, l.ISBN, l.autorId, l.bibliotecaId, l.prestamos)
    );
  }

  // No lo tenías, pero es coherente cargar también las bibliotecas
  for (const b of datos.bibliotecas) {
    bibliotecas.push(
      new Biblioteca(b.bibliotecaId, b.nombre, b.ubicacion)
    );
  }

  // =========================== API PÚBLICA ===========================

  return {

    // LISTADO AUTORES → devuelve HTML
    generarHTMLListadoAutores() {
      let html = `
        <table class="biblio-autores-tabla">
          <tr>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>
          </tr>
      `;

      for (const autor of autores) {
        html += `
          <tr>
            <td>${autor.nombre}</td>
            <td>${autor.nacionalidad}</td>
            <td>
              <button class="biblio-autor-ver" data-id="${autor.autorId}">Ver</button>
              <button class="biblio-autor-editar" data-id="${autor.autorId}">Editar</button>
              <button class="biblio-autor-borrar" data-id="${autor.autorId}">Borrar</button>
            </td>
          </tr>
        `;
      }

      html += `</table>`;
      return html;
    },

    // ========================= BÚSQUEDAS =========================

    // MAL (array mal escrito y propiedades mal)
    // BuscarLibro(Libroid){
    //   for (const element of libro) {
    //     if (element.Libroid===Libroid) {
    //       return element;
    //     }
    //   }
    //   return null;
    // },

    // BIEN
    buscarLibro(libroId) {
      return libros.find(l => l.libroId === libroId) || null;
    },

    // Tu BuscarAutor estaba bien de lógica, solo renombro a camelCase
    // MAL solo por estilo de nombre
    // BuscarAutor(autorId){
    //   for (const element of autores) {
    //     if (element.autorId===autorId) {
    //       return element;
    //     }
    //   }
    //   return null;
    // },

    // BIEN
    buscarAutor(autorId) {
      return autores.find(a => a.autorId === autorId) || null;
    },

    // (extra útil, aunque no lo tuvieras)
    buscarBiblioteca(bibliotecaId) {
      return bibliotecas.find(b => b.bibliotecaId === bibliotecaId) || null;
    },

    // ========================= CREAR =========================

    // MAL
    // crearLibro(libro){
    //   if (libros.BuscarLibro(libro.Libroid)===null) {
    //     libros.push(libro);
    //     return true;
    //   } 
    //   return false;   
    // },

    // Problemas:
    // - libros.BuscarLibro → el array no tiene ese método
    // - Libroid → la propiedad correcta es libroId
    // - Comparación con null está invertida (si existe debería devolver false)

    // BIEN
    crearLibro(libro) {
      // si ya existe un libro con ese id, no se crea
      if (this.buscarLibro(libro.libroId) !== null) {
        return false;
      }
      libros.push(libro);
      return true;
    },

    // MAL
    // crearAutor(Autor){
    //   if (autores.BuscarAutor(Autor.autorId)===null) {
    //     autores.push(Autor);
    //     return true;
    //   } 
    //   return false;
    // },

    // Problemas:
    // - autores.BuscarAutor → el array no tiene ese método
    // - Nombre del parámetro Autor (confunde con la clase)
    // - Misma lógica que antes

    // BIEN
    crearAutor(autor) {
      if (this.buscarAutor(autor.autorId) !== null) {
        return false;
      }
      autores.push(autor);
      return true;
    },

    // ========================= BORRAR =========================

    // MAL
    // borrarLibro(libroid){
    //   let cont =0;
    //
    //   for (const element of libros) {
    //     if (element.libroid===libroid) {
    //       libros.splice(cont);
    //       return true;
    //     }
    //     cont++;
    //   }
    //   return false;
    // }

    // Problemas:
    // - libroid / element.libroid → la propiedad correcta es libroId
    // - splice(cont) sin segundo parámetro borra desde cont hasta el final

    // BIEN
    borrarLibro(libroId) {
      const index = libros.findIndex(l => l.libroId === libroId);
      if (index === -1) {
        return false;
      }
      // borro solo 1 elemento
      libros.splice(index, 1);
      return true;
    }


generarHTMLListadoLibros(){

    
}


  };

})();

export default biblio;