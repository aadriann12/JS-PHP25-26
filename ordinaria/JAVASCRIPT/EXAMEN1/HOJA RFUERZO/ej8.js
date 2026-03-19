function maquinanaDeCambio(cantidad) {
  let array=[];
if (cantidad>=200) {
  array.push(Math.floor(cantidad/200)+1);
  

}
if (cantidad>=100) {
  array.push(Math.floor(cantidad/100)+1);
  
}
if (cantidad>=50) {
  array.push(Math.floor(cantidad/50)+1);

}
if (cantidad>=10) {
  array.push(Math.floor(cantidad/10)+1);
  let cambio=cantidad%10; 

}
if (cantidad>=5) {
  array.push(Math.floor(cantidad/5)+1);

}
if (cantidad>=2) {
  array.push(Math.floor(cantidad/2)+1);

}

}

