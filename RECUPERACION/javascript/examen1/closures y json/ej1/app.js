function jugarDados(numeroLados) {
function aleatorio(){
    return Math.floor(Math.random()*numeroLados)+1;
}
return function(){
    //0=humano,1=maquina
    let tiradas=[aleatorio(),aleatorio()];
    return tiradas;
}
}

let numeroLados=parseInt(prompt("Ingrese el número de lados del dado:"));
let numeroTiradas=parseInt(prompt("Ingrese el número de tiradas, pon 0 si quieres cancelar:"));
if(numeroTiradas>0){
    for(let i=0;i<numeroTiradas;i++){

let tirada=jugarDados(numeroLados);
let tiradas=tirada();
let tiradaHumano=tiradas[0];
let tiradaMaquina=tiradas[1];
console.log('tu tirada numero '+i+' ha sido: '+tiradaHumano);
console.log('la tirada numero '+i+' de la máquina ha sido: '+tiradaMaquina);

if (tiradaHumano>tiradaMaquina) {
    console.log('¡Ganaste!');
} else if (tiradaHumano<tiradaMaquina) {
    console.log('¡Perdiste!');
} else {
    console.log('¡Empate!');
}

}

}else{
    console.log("Juego cancelado.");
}