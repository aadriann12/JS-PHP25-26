let numero1=prompt("Dime un numero");
let numero2=prompt("Dime otro numero");
function unionDeNumeros(numero1,numero2) {
    let string="";
    for (let index = 0; index < numero1.length; index++) {
        for (let j = 0; j < numero2.length ; j++) {
    if (numero1[index]===numero2[j]) {
        string+=numero1[index];

    }     
        }

        
    }
    return string;
}
console.log(unionDeNumeros(numero1,numero2));
