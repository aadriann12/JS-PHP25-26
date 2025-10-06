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
    resultado+="_"
} else {
    resultado+="_|"
    
   
}
 resultado+="\n";
        
    }
} else {if (numero<0) {

    alert ("hola");
} else {



}}


alert(resultado);