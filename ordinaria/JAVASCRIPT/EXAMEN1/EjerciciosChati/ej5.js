'use strict';
let map= new Map();
let array=[ { vehiculoId: 1, matricula: "1234ABC", marca: "Seat", modelo: "Ibiza", kilometros: 72000, precio: 8500 }, { vehiculoId: 2, matricula: "5678XYZ", marca: "Ford", modelo: "Focus", kilometros: 98000, precio: 9100 }, { vehiculoId: 3, matricula: "1111BBB", marca: "Seat", modelo: "León", kilometros: 35000, precio: 14500 }, { vehiculoId: 4, matricula: "2222CCC", marca: "Toyota", modelo: "Yaris", kilometros: 41000, precio: 12800 }, { vehiculoId: 5, matricula: "3333DDD", marca: "Ford", modelo: "Fiesta", kilometros: 64000, precio: 7800 }, { vehiculoId: 6, matricula: "4444EEE", marca: "Peugeot", modelo: "308", kilometros: 55000, precio: 10200 }, { vehiculoId: 7, matricula: "5555FFF", marca: "Toyota", modelo: "Corolla", kilometros: 83000, precio: 11700 }, { vehiculoId: 8, matricula: "6666GGG", marca: "Seat", modelo: "Ateca", kilometros: 29000, precio: 18900 }, { vehiculoId: 9, matricula: "7777HHH", marca: "Ford", modelo: "Puma", kilometros: 46000, precio: 13200 }, { vehiculoId: 10, matricula: "8888JJJ", marca: "Peugeot", modelo: "208", kilometros: 87000, precio: 9400 } ];
for (const element of array) {
    map.set(element.matricula, element);
}
for (const element of map) {
    console.log(element);
}
function buscar(matricula){
    let mat=matricula.toUpperCase();
  for (const key in map) {
    if (key.toUpperCase()===mat) {
    
    } 
    
  }
}