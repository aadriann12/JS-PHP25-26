'use strict'
const $yedra = (function () {
    let alumnos = [
        {
            nombre: "juan",
            nota: 8.5,
            modulo: "DWEC",
            convocatorias: 2
        },
        {
            nombre: "maria",
            nota: 9.2,
            modulo: "DWES",
            convocatorias: 1
        },
        {
            nombre: "pedro",
            nota: 7.8,
            modulo: "DWEC",
            convocatorias: 3
        },
        {
            nombre: "lucia",
            nota: 6.5,
            modulo: "DWES",
            convocatorias: 2
        },
        {
            nombre: "ana",
            nota: 9.0,
            modulo: "DWEC",
            convocatorias: 1
        }
    ];
    function suspensos(alumnos) {
        let suspensos = [];
        for (const alumno of alumnos) {
            if (alumno.nota < 5) {
                suspensos.push(alumno);
            }
        }
        //quitamos convocatorias
        let suspensosOrdenados;
        suspensosOrdenados = suspensos.map(alumno => { return { nombre: alumno.nombre, nota: alumno.nota, modulo: alumno.modulo } });

        suspensosOrdenados = suspensos.sort((a, b) => a.nombre.localeCompare(b.nombre)); //localeCompare ordena alfabeticamente
        return suspensosOrdenados
    }


    function estadisticasPorModulo(alumnos) {

        let agrupado = {};

        for (const alumno of alumnos) {
            if (!agrupado[alumno.modulo]) {
                agrupado[alumno.modulo] = {
                    sumaNotas: 0,
                    sumaConvocatorias: 0,
                    contador: 0
                };
            }
            agrupado[alumno.modulo].sumaNotas += alumno.nota;
            agrupado[alumno.modulo].sumaConvocatorias += alumno.convocatorias;
            agrupado[alumno.modulo].contador++;
        };


        let resultado = []
        for (const modulo in agrupado) {
            let notaMedia = agrupado[modulo].sumaNotas / agrupado[modulo].contador;
            let convocatoriasMedia = agrupado[modulo].sumaConvocatorias / agrupado[modulo].contador;
            resultado.push({ modulo: modulo, convocatorias: convocatoriasMedia, nota: notaMedia });

        }
        resultado.sort((a, b) => b.convocatorias - a.convocatorias); //ordenamos por convocatorias descendente
        resultado.sort((a, b) => a.convocatorias - b.convocatorias); //ordenamos por convocatorias ascendente
        return resultado;




    }
    function cargarCadenJson(cadena) {
        try {
            let objeto = JSON.parse(cadena);
            return objeto;
        } catch (error) {
            console.error("Error al cargar la cadena JSON:", error);
            return null;
        }

    }
    function devolverJSON(objeto) {
        try {
            string = JSON.stringify(objeto);
            return string
        } catch (error) {
            return 'error';
        }
    }





//funciones devuektas funcion autoinvocada SIEMPRE ENTRE {}
    return {
        suspensos,
        estadisticasPorModulo,
        cargarCadenJson,
        devolverJSON

    };



}());

//pruebas
let alumnos = [
    {
        nombre: "juan",
        nota: 2.5,
        modulo: "DWEC",
        convocatorias: 2
    },
    {
        nombre: "maria",
        nota: 0.2,
        modulo: "DWES",
        convocatorias: 1
    },
    {
        nombre: "pedro",
        nota: 7.8,
        modulo: "DWEC",
        convocatorias: 3
    },
    {
        nombre: "lucia",
        nota: 2.5,
        modulo: "DWES",
        convocatorias: 2
    },
    {
        nombre: "ana",
        nota: 0,
        modulo: "DWEC",
        convocatorias: 1
    }
];
console.log('suspensos');
console.log($yedra.suspensos(alumnos));
console.log('estadísticas por módulo');
console.log($yedra.estadisticasPorModulo(alumnos));
let cadena = '{"nombre":"juan","nota":8.5,"modulo":"DWEC","convocatorias":2}';
console.log($yedra.cargarCadenJson(cadena));
let objeto = { nombre: "maria", nota: 9.2, modulo: "DWES", convocatorias: 1 };



console.log('cadena');
console.log($yedra.devolverJSON(objeto));

console.log('prueba');