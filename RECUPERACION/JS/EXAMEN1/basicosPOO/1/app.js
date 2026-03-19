class Persona{
   
    constructor(nombre,fechaNacimiento,hobbies){
        this.nombre=nombre;
        this.fechaNacimiento=fechaNacimiento;
        this.hobbies=hobbies;
    }

    getEdad(){
        const hoy=new Date();
        const nacimiento=new Date(this.fechaNacimiento);
        let edad=hoy.getFullYear()-nacimiento.getFullYear();
        const mes=hoy.getMonth()-nacimiento.getMonth();
    }
}