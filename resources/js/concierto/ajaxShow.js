document.addEventListener('DOMContentLoaded', function(){
	$("form[data-action='show']").on('submit',function(event) {
		mostrarElemento(event);
	});
});

function mostrarElemento(event){
	event.preventDefault();
	let formulario = $(event.target);
	let idElemento = formulario.attr("data-elemento");
	axios.get(`concierto/${idElemento}/artista`).then(function(respuesta){
        let artista = respuesta.data;
		mostrarModal('deleteConfirmation', artista);
	});
}

function mostrarModal(modal){
	$(`#${modal}`).modal('show');
}