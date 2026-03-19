import React, { useState } from "react";

function HolaMundo() {
  const [mensaje] = useState("Hola Mundo");
  const [mostrar, setMostrar] = useState(true);

  // Convención: los manejadores de eventos suelen llamarse 'handleClick'
  const handleClick = () => {
    setMostrar(!mostrar);
  };

  return (
    <div className="container">
      {/* Condicional ternario para el contenido del h1 */}
      <h1>{mostrar ? mensaje : "¿No me dices nada?"}</h1>

      <button onClick={handleClick}>
        {mostrar ? "Ocultar mensaje" : "Mostrar mensaje"}
      </button>
    </div>
  );
}

export default HolaMundo;