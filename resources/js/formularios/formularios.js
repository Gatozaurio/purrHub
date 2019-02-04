var procesos = [];
let numero1Correcto = false;
let numero2Correcto = false;

$(function(){

	$("#email").change(function(){
		validarEmail($("#email"));
	});

});

// Petición por post donde se pasa la variable y para validarla en servidor
function validarEmail(input){
	let datosPost = {};
	datosPost[input.attr("email")] = input.val();
	realizarValidacion(datosPost, null);
	// Se realiza la petición ajax

}

function realizarValidacion(datosPost, funcionCallback) {
	$.ajax({
		url:"/reources/php/formularios/formularios.php",
		method:'POST',
		data:datosPost,
		type:"JSON",
		beforeSend:function(){
			$("#spinner").show();
		}
	})
	// Se trata la respuesta
		.done(function(errores){
			let todoCorrecto = true;

			for(inputName in errores){
				let erroresInput = errores[inputName];
				let divErrores = $(`#${inputName}`).next("div");
				divErrores.html("");
				if(!$.isEmptyObject(erroresInput)){
					for(tipoError in erroresInput){
						divErrores.append(`<div>${erroresInput[tipoError]}</div>`);
					}
					todoCorrecto = false;
				}
			}

		})

		// Si la petición falla lanza el alert de error
		.fail(function(){
			alert("HA OCURRIDO UN ERROR EN LA PETICIÓN");
		})
		// Al terminar siempre se esconde el spinner
		.always(function(){
			procesos.pop();
			if(procesos.length === 0){
				$("#spinner").hide();
			}
		})
}
