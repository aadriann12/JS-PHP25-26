let frase=prompt("pon la frase a cifrar");
let clave=parseInt(prompt("pon la clave"));

function cifrarTexto(frase,clave){
    let textocifrado="";
let abecedario="abcdefghijklmnopqrstuvwxyz";
    for (let index = 0; index < frase.length; index++) {
for (let j = 0; j < abecedario.length; j++) {
if (abecedario[j]===frase[index]) {
let nuevaLetra = abecedario[(j + clave) % 26];//el modulo es para que no se pase del final del abecedario
textocifrado += nuevaLetra;



    
}
     
}
        
    } return textocifrado;

}
function desCifrarTexto(frase,clave){
    let textoDescifrado="";
let abecedario="abcdefghijklmnopqrstuvwxyz";
    for (let index = 0; index < frase.length; index++) {
for (let j = 0; j < abecedario.length; j++) {
if (abecedario[j]===frase[index]) {
let nuevaLetra = abecedario[(j - clave) % 26];
textoDescifrado += nuevaLetra;

textocifrado+=frase[index];

  
    }
}return textoDescifrado;}}

console.log(cifrarTexto(frase,clave));
console.log(desCifrarTexto(cifrarTexto(frase,clave),clave));
      