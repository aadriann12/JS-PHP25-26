'use strict';
function jugarDados(numeroLados) {

function rand(){
    return Math.floor(Math.random()*(numeroLados-1+1)+1);

}
return function(){
    let array=[rand(),rand()];
    return array;
}

}

let numeroLados=parseInt(prompt("pon el numero de lados"));
let resultado=jugarDados(numeroLados);
let maquina=jugarDados(numeroLados);
if (resultado()[0]+resultado()[1] < maquina()[0]+maquina()[1]) {
    console.log("has perdido");
    
} else {
    console.log("has ganado");
}
