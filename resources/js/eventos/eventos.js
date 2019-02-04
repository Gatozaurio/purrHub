// Toggle
$(function() {
	$('#crearEventos').on('show.bs.dropdown', function () {
        $('#botonCrearEventos').addClass("dropdownPulsado");
    })

	$('#crearEventos').on('hide.bs.dropdown', function () {
		$('#botonCrearEventos').removeClass("dropdownPulsado");
	})
});
