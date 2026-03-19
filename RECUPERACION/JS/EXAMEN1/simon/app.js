
   const simon = (function () {

    const colores = ['verde', 'rojo', 'azul', 'amarillo'];
    let secuencia = [];
    let posicionActual = 0;
    let mejorRacha = 0;
    let estado = 'parado';
function generarColorAleatorio() {
    let color=Math.floor(Math.random()*colores.length);//del 0 al 3
    return colores[color];

}
    function obtenerSecuencia() {
return secuencia;
    }

    function obtenerMejorRacha() {
return mejorRacha;

    }

    function obtenerPosicionActual() {
return posicionActual;
    }

    function obtenerEstado() {
return estado;
    }

    function iniciarJuego() {
secuencia=[];
posicionActual=0;
estado='jugando';
secuencia.push(generarColorAleatorio());

    }

    function establecerUltimoColorPulsado(color) {
if(estado!=='jugando') return 'parado';

if(color!==secuencia[posicionActual]){
     estado='parado';
     return 'fallo';
    }
     if(posicionActual===secuencia.length-1){
poisicionActual=0;
mejorRacha=Math.max(mejorRacha,secuencia.length);
secuencia.push(generarColorAleatorio());
return 'acierto';
     }


}



    return {
        obtenerSecuencia,
        establecerUltimoColorPulsado,
        obtenerMejorRacha,
        obtenerPosicionActual,
        iniciarJuego,
        obtenerEstado
    };

})();
