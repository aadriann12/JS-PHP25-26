let palabraa1=prompt("Dime una palabra");
let palabraa2=prompt("Dime otra palabra");

function esAnagrama(palabraa1,palabraa2) {
let valido=true;
if (palabraa1.length==palabraa2.length) {
    for (let index = 0,j=palabraa1.length; index < palabraa1.length; index++,j--) {
     if (palabraa1[index]!=palabraa2[j-1]) {
        valido=false;
        
     } 
        
    }
} else {
    alert("no son iguales");
    
}
return valido;

}if (esAnagrama(palabraa1,palabraa2)) {
  alert("es un anagrama");
} else {        
  alert("no es un anagrama");
}