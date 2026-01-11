<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Películas</title>
</head>
<body>x
  <h1>Alta de películas</h1>

  <form action="peliculas_guardar.php" method="post">
    <label>
      Título:
      <input type="text" name="titulo" required minlength="3" />
    </label>
    <br><br>

    <label>
      Director:
      <input type="text" name="director" required />
    </label>
    <br><br>

    <label>
      Año:
      <input type="number" name="anio" required min="1900" />
    </label>
    <br><br>

    <label>
      Precio (€):
      <input type="number" name="precio" required min="0" step="0.01" />
    </label>
    <br><br>

    <label>
      Fecha de alquiler:
      <input type="date" name="fecha_alquiler" required />
    </label>
    <br><br>

    <button type="submit">Guardar</button>
  </form>

  <hr>

  <form action="peliculas_datos.php" method="get">
    <button type="submit">Ver películas</button>
  </form>
</body>
</html>