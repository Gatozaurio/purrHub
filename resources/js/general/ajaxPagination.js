document.addEventListener('DOMContentLoaded',function(){
    let contadorConciertos = 12;
    $(window).on("scroll", function() {
        let scrollHeight = $(document).height();
        let scrollPosition = $(window).height() + $(window).scrollTop();
        if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
            axios.get('conciertos/paginacion/ajax/'+contadorConciertos)
            .then(function(respuesta){
                if(respuesta.data === ""){
                    //$('#modalSinElementos')
                }else{
                    $("#conciertosMostrados").append(respuesta.data);
                    contadorConciertos += 12;
                }
            });
        }
    });
});