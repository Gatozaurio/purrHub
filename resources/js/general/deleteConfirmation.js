document.addEventListener('DOMContentLoaded', function(){
	$("form[data-action='delete']").on('submit',function(event) {
		borrarElemento(event);
	});
});

function borrarElemento(event){
	event.preventDefault();
	mostrarModal('deleteConfirmation');
	let formulario = $(event.target);
	let idElemento = formulario.attr("data-elementoBorrar");
	let botonAceptarModal = $("#botonAceptarModal");
	let elemento = formulario.attr("data-elemento");
	botonAceptarModal.click(function(){
		axios.delete(`${elemento}/borrarAjax/${idElemento}`).then(function(respuesta){
			cerrarModal('deleteConfirmation');
			botonAceptarModal.off("click");
			$(`div[data-idElemento='${idElemento}']`).remove();
		}).catch(function(error){
			alert("Ha ocurrido un error al realizar la petición");
			console.log(error);
		});
	});
}

function mostrarModal(id){
	$(`#${id}`).modal('show');
}

function cerrarModal(id){
	$(`#${id}`).modal('hide');
}
