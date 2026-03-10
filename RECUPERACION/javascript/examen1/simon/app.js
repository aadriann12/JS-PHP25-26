let simon=(function(){
function obtenerArray(array){

//0=rojo,1=verde,2=amarillo,3=azul
for(let i=0; i<=3; i++){
    array.push(i);
}
return array;
}
function ultimoColorPulsado(color){
    let colorPulsado=color;
    return colorPulsado;
}
function botonComenzar(){
    let boton=document.getElementById("comenzar");
    boton.addEventListener("click", function(){
        alert("¡Comienza el juego!");
        
    });
}
}());