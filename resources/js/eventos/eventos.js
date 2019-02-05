// Toggle
$(function() {
	$('#crearEventos').on('show.bs.dropdown', function () {
		$('#botonCrearEventos').removeClass("btn-success");
        $('#botonCrearEventos').addClass("dropdownPulsado");
    })

	$('#crearEventos').on('hide.bs.dropdown', function () {
		$('#botonCrearEventos').addClass("btn-success");
		$('#botonCrearEventos').removeClass("dropdownPulsado");
	})
});
