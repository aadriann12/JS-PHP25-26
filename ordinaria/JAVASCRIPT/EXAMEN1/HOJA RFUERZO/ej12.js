let numero=parseInt(prompt("introduce un numero"));
let resultado="";
let cont=0;

if (numero>0) {
    for (let index = numero; index >= 0; index--) {
        while (cont<=index*2) {
            resultado+=" "
            cont++;
        }
        cont=0;
if (index===numero) {
    resultado+="____________________"
} else {
    resultado+="_|"
    
   
}
 resultado+="\n";
        
    }
}


alert(resultado);