class Moto extends Vehiculo{

#tipo;

 constructor(marca, modelo,tipo){
    super(marca,modelo);
    this.#tipo=tipo;

 }
hacerCaballito(){

    alert('caballito hecho, marca: '+this.getMarca()+'modelo: '+this.getModelo());



}
getTipo(){

return this.#tipo;


}
setTipo(tipoNuevo){
this.#tipo=tipoNuevo;

}




}
export  {Moto};