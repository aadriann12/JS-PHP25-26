class Vehiculo{
#marca;
#modelo;
#velocidad;

constructor(marca, modelo){
this.#marca=marca;
this.#modelo=modelo;
this.#velocidad=0;
}


//metodos acelerar y frenar
acelerar(km){

this.#velocidad+=km;

}

frenar(km){
    this.#velocidad-=km;
    if (this.#velocidad-km<0) {
        this.#velocidad=0;
    } 
}


//setter
setVelocidad(NuevaVelocidad){
if (NuevaVelocidad>0) {
     this.#velocidad=NuevaVelocidad;
} 


}




//getters
getMarca(){
    return this.#marca;
}
getModelo(){
    return this.#modelo;
}
getVelocidad(){
    return this.#velocidad;
}


static  compararVelocidad(v1,v2){
if (v1.getVelocidad>v2.getVelocidad) {
    return v1;

} else {
    return v2;

}
}



}

export  {Vehiculo};
