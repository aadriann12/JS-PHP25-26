function Vehiculo(marca, modelo, km, encendido) {
    this.marca = marca;
    this.modelo = modelo;
    this.km = km;
    this.encendido = encendido;


}
//metdoos en prototipo
Vehiculo.prototype.arrancar=function(){
    if (this.encendido) {
        console.log("El coche ya esta encendido");
    } else {
        this.encendido = true;
        console.log("El coche se ha encendido");
    }
}

Vehiculo.prototype.apagar=function(){
    if (this.encendido) {
        this.encendido = false;
        console.log("El coche " + this.modelo + " se ha apagado");
    } else {
        console.log("El coche " + this.modelo + " ya esta apagado");
    }
}

Vehiculo.prototype.conducir=function(km){
    if (this.encendido) {
        this.km += km;
        console.log("Has conducido " + km + " km, el total de km es " + this.km);
    }
    else { console.log("El coche " + this.modelo + " esta apagado, no puedes conducir"); }
}
Vehiculo.prototype.info=function(){
    console.log("Marca: " + this.marca + ", Modelo: " + this.modelo + ", Km: " + this.km);
}


const coche1 = new Vehiculo("Toyota", "carolla", 100000, false);
const coche2 = new Vehiculo('ford', 'focus', 50000, true);
const vehiculo3 = new Vehiculo('bmw', 'm3', 20000, false);
let coches = [coche1, coche2, vehiculo3];
for (const coche of coches) {
    coche.info();
}
coche1.arrancar();
coche1.conducir(100);
coche1.apagar();
coche1.conducir(50);