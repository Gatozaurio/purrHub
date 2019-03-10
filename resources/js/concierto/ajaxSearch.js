import Axios from "axios";

document.addEventListener('DOMContentLoaded',function(){
    let searchConcert = $('#searchConcert');
    searchConcert.submit(function(event){
        buscarElementos(event);
    });
});

function buscarElementos(event){
    event.preventDefault();
    $('#searchSpinner').removeClass("invisible");
    axios.post('conciertos/buscarAjax',{
        searchInput: $("#searchInput").val()
    }).then(function(respuesta){
        $('#searchSpinner').addClass("invisible");
        $("#conciertosMostrados").empty();
        $("#conciertosMostrados").append(respuesta.data);
    }).catch(function(error){
        alert("Ha ocurrido un error al realizar la petición");
        console.log(error);
    });
}
