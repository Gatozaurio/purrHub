import Axios from "axios";

document.addEventListener('DOMContentLoaded',function(){
    $("form[data-action='create']").on('submit',function(event) {
        alert('hola');
        event.preventDefault();
		crearElemento(event);
	});
});

function crearElemento(event){
    axios.post('/comentarios', {
        id_concierto : $('#id_concierto').val(),
        message : $('#message').val()
    }).then(function(respond){
        $('#comentarios').append(respond.data);
    });
}