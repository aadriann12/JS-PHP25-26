'use strict';
import datos from './datos.js';// impporto datos
class BD {
    #vehiculos;

    #reparaciones;

    siguienteVehioculoId ;
    siguienteReparacionId ;
    constructor() {
        this.#vehiculos = datos.filter(v => v instanceof Vehiculo);//filtra a todos los que sean vehiculos con instanceof, igual que java
        this.#reparaciones = datos.filter(r => r instanceof Reparacion);
        this.siguienteVehioculoId = this.#vehiculos.length + 1;// le suma a lo que ya hay mas 1
        this.siguienteReparacionId = this.#reparaciones.length + 1;
        //     this.vehiculos=datos.filter(v=>typeof v==='Vehiculo');//typeof es para saber el tipo de dato que es

    }


    obtenerVehiculos(vehiculoId) {
      
  
        for (const element of this.#vehiculos) {
            if (element.vehiculoId === vehiculoId) {
                return element
            }
        }
        return null;




    }


    obtenerVehiculo(filtro, valor) {
        vehiculoFiltrado;
        vehiculoFiltrado = this.#vehiculos.filter(ele => ele.filtro === valor);

        return vehiculoFiltrado;


    }






    crearVehiculo(vehiculo) {
        if (this.obtenerVehiculo(matricula) === vehiculo.matricula) {
            return false;

        } else {
            return true;
            this.#vehiculos.push(vehiculo);
        }

    }

    borrarVehiculo(vehiculoId) {

        if (this.siguienteVehioculoId >= vehiculoId) {
            this.#vehiculos.splice(vehiculoId, 1);//elimina el elemento numero vehiculoid, el 1 es para que solo elimine ese
             this.siguienteVehioculoId--;e
            return true;
        } else {
            return false;


        }

    }

    obtenerReparaciones(filtro, valor) {

        let reparacionesFiltradas;
        reparacionesiltradas = this.#reparaciones.filter(ele => ele.filtro === valor);

        return reparacionesFiltradas;

    }
    obtenerReparacion(ReparacionID) {
        for (const element of this.#reparaciones) {
            if (element.ReparacionID === ReparacionID) {
                return element
            }
        }
        return null;


    }

    crearReparacion(Reparacion,vehiculoId) {
    
        if (this.obtenerVehiculo(vehiculoId)!==null) {
              if (this.obtenerReparacion(Reparacion.ReparacionID) === null) {
        Reparacion.setReparacionId(this.siguienteReparacionId);
        this.siguienteReparacionId++;
                this.#reparaciones.push(Reparacion);
            return true;
        } else {
            return false;


        }
        } 

    }
    borrarReparacion(reparacionId){

for (const element of this.#reparaciones) {
    if (element) {
        
        
    } else {
        
    }
}


    }



}







