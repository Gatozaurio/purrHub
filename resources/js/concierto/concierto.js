
// Toggle
document.addEventListener('DOMContentLoaded', function(){
    $('#informacion').on('show.bs.collapse', function (e) {
        $('#botonToggle').addClass("togglePulsado");
    })

    $('#informacion').on('hide.bs.collapse', function (e) {
        $('#botonToggle').removeClass("togglePulsado");
    })
});
