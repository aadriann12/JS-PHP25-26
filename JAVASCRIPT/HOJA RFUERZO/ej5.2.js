let numero=prompt  ("pon un numero");
let respuesta=numero ;
let total=numero;
function calcularFactorialRecursivamente(numero,total,respuesta){
if (numero==1) {
    respuesta+="="+total;
    alert(respuesta);
} else {
    numero--;
    total*=numero;
    respuesta+="x"+numero;
    calcularFactorialRecursivamente(numero,total,respuesta);
}

}
calcularFactorialRecursivamente(numero,total,respuesta);