const btnAdd=document.getElementById('btnAdd');
const lista=document.getElementById('lista');
const log=document.getElementById('log');
let cont=0;

btnAdd.addEventListener('click',()=>{
    const div =document.createElement('div');
    div.textContent=`Elemento ${++cont}`;
    div.classList.add('elemento');
    lista.appendChild(div);
});

lista.addEventListener('click',(e)=>{
    if(e.target.classList.contains('elemento')){
        e.target.classList.toggle('selected');//toogle para añadir o quitar clase

        log.textContent+=`Elemento clicado: ${e.target.textContent}\n`;
    }
});
lista.addEventListener('dblclick' ,(e)=>{//eliminar elemento al hacer doble click
    if(e.target.classList.contains('elemento')){
        lista.removeChild(e.target);
        log.textContent+=`Elemento eliminado: ${e.target.textContent}\n`;
    }


});