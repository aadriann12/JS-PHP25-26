'use strict';
import datos from './datos.js';// impporto datos
class BD {
    #vehiculos = [];

    #reparaciones = [];

    siguienteVehioculoId = 0;
    siguienteReparacionId = 0;

    obtenerVehiculos() {
        vehiculos = datos.filter(v => typeof v === 'Vehiculo');
        siguientevehiculoId = vehiculos.lenght();










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
            this.#vehiculos.splice(vehiculoId, 1);
            return true;
        } else {
            return false;


        }

    }







}







