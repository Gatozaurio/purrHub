import Axios from "axios";

document.addEventListener('DOMContentLoaded', function(){
    $("form[data-action='edit']").on('submit',function(event) {
		editarElemento(event);
	});
});
// "/comentarios/{{ $comentario['id'] }}/editar"

function editarElemento(event){
    event.preventDefault();
        let formulario = $(event.target);
        let idElemento = formulario.attr("data-elementoEditar");
        let datosFormulario = formulario.serialize();
        axios.put("editarConcierto/ajax/idDelConcierto",datosFormulario)
        .then(function(respuesta){
            
    });
}