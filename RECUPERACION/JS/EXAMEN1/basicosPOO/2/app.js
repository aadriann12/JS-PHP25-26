function Animal(nombre,tipo){
    this.nombre=nombre;
    this.tipo=tipo;
}

Animal.prototype.comer=function(){
    console.log(this.nombre+" está comiendo");
}
Animal.prototype.dormir=function(){
    console.log(this.nombre+" está durmiendo");
}
Animal.prototype.hacerSonido=function(){
    if(this.tipo.toLowerCase()==="perro"){
        console.log(this.nombre+" dice: ¡Guau!");
    }else if(this.tipo.toLowerCase()==="gato"){
        console.log(this.nombre+" dice: ¡Miau!");
    }else{
        console.log(this.nombre+" hace un sonido desconocido");
    }
}

oscar=new Animal("Oscar","Perro");
oscar.comer();
oscar.dormir();
oscar.hacerSonido();