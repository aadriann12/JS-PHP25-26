const formVehiculo = document.getElementById('formVehiculo');
const log = document.getElementById('log');
const contenedorVehiculos = document.getElementById('contener¡dir');
formVehiculo.addEventListener('submit', (e) => {
    e.preventDefault(); // Evita el envío del formulario
    const matricula = document.getElementById('inpMatricula').value.trim();
    const marca= document.getElementById('filtroMarca').value.trim();
    const precio = parseFloat(document.getElementById('inpPrecio').value.trim());
    const kilometraje = parseFloat(document.getElementById('inpKm').value.trim());
    const modelo = document.getElementById('inpModelo').value.trim();

 
    if (matricula === '') {
        log.textContent += 'Error: Matrícula vacía\n';
    } else {
      if (marca === '') {
          log.textContent += 'Error: Marca vacía\n';
      } else {
        if (isNaN(precio) || precio < 0) {
            log.textContent += 'Error: Precio inválido\n';
        } else {
            if (kilometraje === '' || isNaN(kilometraje) || kilometraje < 0) {
                log.textContent += 'Error: Kilometraje inválido\n';
            } else {
                if (modelo === '') {
                    log.textContent += 'Error: Modelo vacío\n';
                } else {
                    log.textContent += `Vehículo añadido: ${matricula}\n`;
contenedorVehiculos.innerHTML += `
<div class="vehiculo">
  <h3>${marca} - ${modelo}</h3>
  <p>Matrícula: ${matricula}</p>
  <p>Precio: ${precio} €</p>
  <p>Kilometraje: ${kilometraje} km</p>
</div>
`;

                }

            }
        }
        
      } 
    }
});