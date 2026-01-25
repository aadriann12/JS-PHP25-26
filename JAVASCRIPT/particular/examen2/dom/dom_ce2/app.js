const titulo=document.getElementById('titulo');
const botoncambiar=document.getElementById('btnCambiar');
const botonreset=document.getElementById('btnReset');
const log=document.getElementById('log');

botoncambiar.addEventListener('click',()=>{
   if (titulo.classList.contains('apagado')) {//classlist es una lista de clases
       titulo.classList.remove('apagado');//para  quitar una clase
       titulo.textContent = 'Estado: encendido';
       log.textContent += 'Estado cambiado a: encendido\n';
   } else {
       titulo.classList.add('apagado');
       titulo.textContent = 'Estado: apagado';
       log.textContent += 'Estado cambiado a: apagado\n';
   }});


   botonreset.addEventListener('click',()=>{
titulo.textContent='estado: apagado';
log.textContent='';

   });
   