'use strict';

const salida = document.getElementById("salida");

const vehiculos = [
  { id: 1, marca: "Seat", modelo: "Ibiza" },
  { id: 2, marca: "Ford", modelo: "Focus" },
  { id: 3, marca: "Toyota", modelo: "Yaris" },
  { id: 4, marca: "Ford", modelo: "Fiesta" }
];

function limpiar() {
  salida.textContent = "";
}

function listar() {
  limpiar();
  for (const v of vehiculos) {
    salida.textContent += `${v.id} - ${v.marca} ${v.modelo}\n`;
  }
}

function filtrar() {
  limpiar();
  const marca = document.getElementById("marca").value;

  const resultado = vehiculos.filter(
    v => v.marca.toLowerCase() === marca.toLowerCase()
  );

  if (resultado.length === 0) {
    salida.textContent = "No hay vehículos de esa marca";
    return;
  }

  for (const v of resultado) {
    salida.textContent += `${v.id} - ${v.marca} ${v.modelo}\n`;
  }
}

function buscar() {
  limpiar();
  const id = parseInt(document.getElementById("idVehiculo").value);

  const vehiculo = vehiculos.find(v => v.id === id);

  if (vehiculo) {
    salida.textContent = `${vehiculo.id} - ${vehiculo.marca} ${vehiculo.modelo}`;
  } else {
    salida.textContent = "Vehículo no encontrado";
  }
}