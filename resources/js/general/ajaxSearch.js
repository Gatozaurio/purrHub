import Axios from "axios";

$(function(){
    $("form[data-action='search']").on('submit',function(event) {
		buscarElemento(event);
	});
});

function buscarElemento(event){
    event.preventDefault();
    axios.post('conciertos/buscarAjax',{
        search: $("#search").val()
    }).then(function(respuesta){
        $("#librosMostrar").html(respuesta.data);
    });
}
