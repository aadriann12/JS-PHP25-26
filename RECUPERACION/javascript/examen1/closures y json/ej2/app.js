const $yedra=(function(){
let alumnos=[
    {
        nombre:"juan",
        nota:8.5,
        modulo:"DWEC",
        convocatorias:2
    },
    {
        nombre:"maria",
        nota:9.2,
        modulo:"DWES",
        convocatorias:1
    },
    {
        nombre:"pedro",
        nota:7.8,
        modulo:"DWEC",
        convocatorias:3 
    },
    {
        nombre:"lucia",
        nota:6.5,
        modulo:"DWES",
        convocatorias:2
    },
   {
        nombre:"ana",
        nota:9.0,
        modulo:"DWEC",
        convocatorias:1
    }
];
function suspensos(alumnos){
    let suspensos=[];
    for (const alumno of alumnos) {
     if(alumno.nota<5){
        suspensos.push(alumno);
     }
    }
 //quitamos convocatorias
 suspensos=suspensos.map(alumno=>{return {nombre:alumno.nombre,nota:alumno.nota,modulo:alumno.modulo}});
 suspensos=suspensos.sort((a,b)=>a.nombre.localeCompare(b.nombre)); //localeCompare ordena alfabeticamente
    return suspensos;
}

function estadisticasPorModulo(alumnos){
  let agrupado={};

    for (const alumno of alumnos) {
    if(!agrupado[alumno.modulo]){
        agrupado[alumno.modulo]={
            sumaNotas:0,
            sumaConvocatorias:0,
            contador:0
        };
    }
    agrupado[alumno.modulo].sumaNotas+=alumno.nota;
    agrupado[alumno.modulo].sumaConvocatorias+=alumno.convocatorias;
    agrupado[alumno.modulo].contador++;
        };


        let resultado=[]
        for (const modulo of agrupado) {
            let notaMedia=agrupado[modulo].sumaNotas/agrupado[modulo].contador;
            let convocatoriasMedia=agrupado[modulo].sumaConvocatorias/agrupado[modulo].contador;
            resultado.push({modulo:modulo,convocatorias:convocatoriasMedia,nota:notaMedia});
            
        }
        resultado.sort((a,b)=>b.convocatorias-a.convocatorias); //ordenamos por convocatorias descendente
        resultado.sort((a,b)=>a.convocatorias-b.convocatorias); //ordenamos por convocatorias ascendente
        return resultado;

        
    }

return [{modulo:"DWEC",convocatorias:dwecConvocatoriasMedia,nota:dwecNotaMedia},{modulo:"DWES",convocatorias:dwesConvocatoriasMedia,nota:dwesNotaMedia}];
}
function cargarCadenJson(cadena){
    try {
        let objeto=JSON.parse(cadena);
        return objeto;
    } catch (error) {
        console.error("Error al cargar la cadena JSON:", error);
        return null;
    }

}





}());