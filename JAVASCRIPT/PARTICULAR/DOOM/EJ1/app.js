
const frutas = ["Manzana", "Banana", "Kiwi", "Naranja"];
const div = document.getElementById('container')
const lista = document.getElementById('frutas');

for (const fruta of frutas) {
    const li= document.createElement('li');
    li.textContent = fruta;
    lista.appendChild(li);
}