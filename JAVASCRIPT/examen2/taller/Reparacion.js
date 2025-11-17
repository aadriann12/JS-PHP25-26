'use strict';
class Reparacion{
    constructor(reparacionId, vehiculoId, descripcion,fecha,kilometros,presupuesto,pagado,terminado,trabajo){
this.reparacionId=reparacionId;
this.vehiculoId=vehiculoId;
this.descripcion=descripcion;
this.fecha=fecha;
this.kilometros=kilometros;
this.presupuesto=presupuesto;
this.pagado=false;
this.terminado=false;
this.trabajo=trabajo;
    }

}