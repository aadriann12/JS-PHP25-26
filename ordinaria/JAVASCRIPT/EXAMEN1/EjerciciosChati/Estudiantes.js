let curso="daw";
let NUM_ALUMNOS=30;

let notas=[0,1,2,3,4,5,6,7,8,9,10];
let aprobados=[];
for (const element of notas) {
    console.log (element);
    if (element>=5) {
        aprobados.push(element);

    } 




}
let cont=0;
let suma=0;
for (let index = 0; index <= notas.length; index++) {
suma+=notas[index];
cont++;
}
let media=suma/cont;
let arrayOrdenado=notas.toSorted();
let arrayInvertido=notas.toReversed();

 function mostrarResumen(nombreCurso, notas, aprobados){
    let resultado="curso: "+nombreCurso+"\n total alumnos: "+NUM_ALUMNOS+"\n notas: "+notas+"\n aprobados: "+aprobados+"\n media: "+media;

   console.log(resultado);
   return resultado;
}

let numero=parseInt(prompt("ingrese un numero de nota"));
if (isFinite(numero)) {
    console.log(Math.pow        (numero,2));

} 
mostrarResumen(curso,notas,aprobados);