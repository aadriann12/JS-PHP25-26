import {Vehiculo} from './Vehiculo.js';
import {Coche} from './Coche.js';
import {Moto} from './Moto.js';
   
 let coche1= new Coche('renault','clio',4);
let coche2=new Coche('opel','astra',5);

let coche3=new Coche('kia','kia',5);

let moto1=new Moto('kia','motoKia','grande');
let moto2=new Moto('seat','seat moto','deportiva');


let garaje=[]
garaje.push(coche1);
garaje.push(coche2);
garaje.push(coche3);
garaje.push(moto1);
garaje.push(moto2);


let velocidades=garaje.map((vehiculo)=>vehiculo.getVelocidad());
console.log(velocidades);



