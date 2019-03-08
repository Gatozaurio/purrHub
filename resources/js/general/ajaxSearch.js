import Axios from "axios";

document.addEventListener('DOMContentLoaded',function(){
    $("form[data-action='search']").on('submit',function(event) {
		buscarElementos(event);
	});
});

function buscarElementos(event){
    event.preventDefault();
    axios.post('conciertos/buscarAjax',{
        search: $("#search").val()
    }).then(function(respuesta){
        $("#conciertosMostrados").empty();
        $("#conciertosMostrados").append(respuesta.data);
    });
}
