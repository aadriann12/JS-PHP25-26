'use strict';
class Libro{

constructor(libroId, titulo, ISBN, autorId, bibliotecaId, prestamos = []) {
        this.libroId = libroId;
        this.titulo = titulo;
        this.ISBN = ISBN;
        this.autorId = autorId;
        this.bibliotecaId = bibliotecaId;
        this.prestamos = prestamos;
    }

generaarHTMLCreacion(){
return` <form action="procesar_datos.php" method="POST">
    <label for="titulo">titulo:</label>
    <input type="text" id="titulo" name="titulo" required>
    <br>
    >    <label for="isbn">isbn:</label>
    <input type="text" id="isbn" name="isbn" required>
    <br>
    >    <label for="autor">autor:</label>
    <input type="text" id="autor" name="autor" required>
    <br>

    <button type="submit">Enviar</button>
</form>`;




    
}












}