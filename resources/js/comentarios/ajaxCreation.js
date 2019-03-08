import Axios from "axios";

document.addEventListener('DOMContentLoaded',function(){
    $("form[data-action='create']").on('submit',function(event) {
		crearElemento(event);
	});
});

function crearElemento(event){
    event.preventDefault();
    axios.post('/comentarios', {
        id_concierto : $('#id_concierto').val(),
        message : $('#message').val()
    }).then(function(respond){
        $('#comentarios').append(respond.data);
        $('#message').val('');
    });
}