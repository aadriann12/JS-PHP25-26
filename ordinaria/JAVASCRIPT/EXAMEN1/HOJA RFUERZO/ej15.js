let numerominimo=2;
let numeroMaximo=10;
let entre=numeroMaximo-numerominimo;
let actual=numerominimo+1;

     let intervalo =setInterval(() =>{
console.log(actual);
actual++;


if (actual===numeroMaximo) {
   clearInterval(intervalo);


}
     }, 1000);

  


