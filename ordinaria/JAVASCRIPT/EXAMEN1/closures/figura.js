'use strict';

let numeroLados = parseInt(prompt("pon el numero de lados"));
let resultado = []; // ⬅️ donde guardamos todo

for (let indexx = 0; indexx <= numeroLados; indexx++) {
  resultado.push("*");
}

resultado.push("\n");
resultado.push("*");

for (let index = 0; index <= numeroLados - 2; index++) {
  for (let j = 0; j < index; j++) {
    resultado.push(" ");
  }
  
  resultado.push("*");

  if (index != numeroLados / 2) {
    for (let f = 0; f < numeroLados - index; f++) {
      resultado.push(" ");
    }
    resultado.push("*");
  }

  for (let j = 0; j < index; j++) {
    resultado.push(" ");
  }

resultado.push("*");
  resultado.push("\n");
}  

for (let indexx = 0; indexx <= numeroLados; indexx++) {
  resultado.push("*");
}

resultado.push("\n");

// mostrar el resultado como texto
console.log(resultado.join(""));