let string=prompt("Dime una frase");
function comprobarParentesis(string) {
    let cont1=0;
    let cont2=0;
    for (let index = 0; index < string.length   ; index++) {
        if (string[index].localeCompare(")")) {
            cont1++;
        }
 if (string[index].localeCompare("(")) {
            cont2++;
        }
        
    }
    if (cont1===cont2) {
       alert("no hay problema de cierre de  parentesis") ;
    } else {
           alert(" hay problema de cierre de  parentesis") ;
    }}
    comprobarParentesis(string);