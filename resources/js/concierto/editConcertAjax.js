import Axios from "axios";

document.addEventListener('DOMContentLoaded', function(){
    $("#formulario").submit(function(event){
        editarElemento(event);
    });
});

function editarElemento(event){
    event.preventDefault();
        let formulario = $(event.target);
        let idElemento = formulario.attr("data-elementoBorrar");
        let datosFormulario = formulario.serialize();
        axios.put("editarConcierto/ajax/idDelConcierto",datosFormulario)
        .then(function(respuesta){
            
    })
}