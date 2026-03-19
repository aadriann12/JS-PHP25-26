let numero=parseInt(Math.floor(Math.random()*10)+1);//numero entre 1 y 10, 10 incluido
let numeroUsuario;
let valido=false;
do {
    numeroUsuario=Number(prompt("pon un numero del 1 al 10"));
    if (numeroUsuario==null) {
        alert("numero cancelado");
        break;
    }
    if (numeroUsuario===numero) {
       
        alert("numero correcto!")
valido=true;

    } else {
        if (numeroUsuario<numero) {
            alert("numero secreto mas alto");

        } else {
            alert("numero secreto mas bajo");
        }
    }
} while (!valido);