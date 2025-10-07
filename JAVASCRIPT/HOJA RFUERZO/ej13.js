let altura=prompt("pon un numero");


function zelda(h){
let resultado="";


for (let altura = 1; altura <= h; altura++) {
for (let j = h; j > altura/2; j--) {
    resultado+="   ";


}

if (altura < h/2) {
    for (let j = 0; j < altura; j++) {
    resultado+=" * ";

}
} else {
    for (let index = altura; index >h/2; index--) {
 for (let j = h; j > index/2; j--) {
    resultado+="   ";


}
    for (let j = 0; j < index/2; j++) {
    resultado+=" * ";

}
        
    }
    
}


resultado+="\n";






}
return resultado;
}
console.log(zelda(altura));