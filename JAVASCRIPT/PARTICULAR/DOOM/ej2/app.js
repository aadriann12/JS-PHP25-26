const formulario=document.getElementById('task-form');
const lista=document.getElementById('task-list');
const state = {
tasks: [{
//prueba
d:1,text:"estudiar",completed:false},
{id:2,text:"comprar",completed:true},
{id:3,text:"dormir",completed:false},
{id:4,text:"jugar",completed:true},
{id:5,text:"trabajar",completed:false}



]
};

function renderTask(){

do {
    const li=document.getElementsByTagName('li');
    li.remove();
} while (li);

let documentFragment=new documentFragment();

for (const tarea of state.tasks) {
const tareas=lista.createElement('li');
tareas.textContent=tarea.text;

}
}

 


formulario.addEventListener('submit',(e)=>{

e.preventDefault();

formulario=new FormData();




});