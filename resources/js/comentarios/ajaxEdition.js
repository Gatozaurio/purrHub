import Axios from "axios";

document.addEventListener('DOMContentLoaded', function(){
    alert('carga el dom');
    $("#editButton").click(function(event) {
        alert('click');
        editarElemento(event);
    });
});
// "/comentarios/{{ $comentario['id'] }}/editar"

function editarElemento(event){
    event.preventDefault();
    alert('hola');
        let formulario = $(event.target);
        let idElemento = formulario.attr("data-elementoBorrar");
        let datosFormulario = formulario.serialize();
        axios.put("editarConcierto/ajax/idDelConcierto",datosFormulario)
        .then(function(respuesta){
            
    })
}