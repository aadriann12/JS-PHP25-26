let numero=prompt("Ingresa un número:");
let resultado="";
for (let index = 1; index <= numero; index++) {

    for (let f = 1; f <= index; f++) {
       resultado+=f+" ";
        
    }
    resultado+="\n";
}
console.log(resultado);