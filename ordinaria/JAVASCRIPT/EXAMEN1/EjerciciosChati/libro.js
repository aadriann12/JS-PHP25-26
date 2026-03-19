
'use strict';
 class libro{
constructor(titulo, autor){
    this.titulo=titulo;

}
#estado="disponible";



prestar(estado){
    this.#estado="prestado";
}
info(){
    console.log(this.titulo+" - "+this.autor+" - "+this.#estado);
}



}