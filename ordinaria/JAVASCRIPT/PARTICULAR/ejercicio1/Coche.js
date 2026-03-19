class Coche extends Vehiculo{
 #numPuertas;


 constructor(marca, modelo,numPuertas){
    super(marca,modelo);
    this.#numPuertas=numPuertas;

 }

 abrirMaletero(){
    alert('maletero abierto, marca: '+this.getMarca()+'modelo: '+this.getModelo());


 }

 getNumPuertas(){
return this.#numPuertas;
 }

 setNumPuertas(nuevoNumPuertas){
    if (nuevoNumPuertas>0&&nuevoNumPuertas<10) {
    this.#numPuertas=nuevoNumPuertas;
    } else {
        return null;
    }
 }


}
export  {Coche};
