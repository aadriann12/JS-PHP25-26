let numeros=[4,6,4,8,9,2,1,12];

function calcularMaximo(numeros){
    let numMax=numeros[0];//pongo de maximo el primero del array para compararlo
    for (let index = 0; index < numeros.length; index++) {
   if (numMax<numeros[index]) {
numMax=numeros[index]; 
   } 
        
    }
    return numMax;
}


function calcularMin(numeros){
    let numMin=numeros[0];//pongo de minimo el primero del array para compararlo
    for (let index = 0; index < numeros.length; index++) {
   if (numMin>numeros[index]) {
numMin=numeros[index];
   } 
        
    }
    return numMin;
 }   
    
   function calcularNumero(){
   let nummMax=calcularMaximo(numeros);
   let numMinn=calcularMin(numeros);
   let resultado=[];

let entreLosDos=nummMax-numMinn;
for (let index = numMinn+1; index <=entreLosDos; index++) {
    resultado.push(index);
}

alert (resultado);
   }

calcularNumero();




