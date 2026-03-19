
 class vehiculo{
  
marca;
modelo;
#kilometros;

constructor(marca,modelo){
this.marca=marca;
this.modelo=modelo;
this.#kilometros=0;
 

}
 conducir(km){
   if (km<=0) {
   console.log("no se pueden sumar km");
   } else {
      this.#kilometros+=km;
   }

}

info(){
    console.log(`marca: ${this.marca} - modelo: ${this.modelo} - km: ${this.#kilometros}`);

}
getKilometros() {
  return this.#kilometros;
}
 static compararkM(v1,v2){
    if (v1.getKilometros()<v2.getKilometros()) {
        return v2;
    } else {
        return v1;
        
    }
}



}
v1=new vehiculo("Toyota","Corolla",0);
v2=new vehiculo("Honda","Civic",0);
v1.conducir(150);
v2.conducir(200);
v1.info();
v2.info();
vehiculo.compararkM(v1,v2).info();
