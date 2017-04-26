jQuery(document).ready(function($){
	
	$('.boton').on('click', function(event) {
		event.preventDefault();
		
		var usuario = $('#user').val();
		var password = $('#pass').val();

		var parametros = {
			"usuario" : usuario,
			"password" : password
		};
		$.ajax({
			url: 'check.php',
			type: 'POST',
			data: parametros,
			success: function(respuesta){
				$('#bienvenida').html(respuesta);
				console.log(respuesta);
			}
		});

	});

});