import Axios from "axios";

document.addEventListener('DOMContentLoaded',function(){
    $("form[data-action='create']").on('submit',function(event) {
		crearElemento(event);
	});
});

function crearElemento(event){
    event.preventDefault();
    $('#spinner').removeClass("invisible");
    axios.post('/comentarios', {
        id_concierto : $('#id_concierto').val(),
        message : $('#message').val()
    }).then(function(respond){
        $('#comentarios').append(respond.data).last();
        $('#message').val('');
        $('#spinner').addClass("invisible");
    }).catch(function(error){
        alert("Ha ocurrido un error al realizar la petición");
        console.log(error);
    });
}