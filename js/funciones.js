function recargarPagina(){
	location.reload(true);
}

function datosBorrados(){
	$.confirm({
		theme: 'material',
		title: 'Atencion',
		content: 'Registro borrado correctamente',
		useBootstrap: false,
		boxWidth:'350px',
		buttons:{
			Adelante: function(){ recargarPagina(); }
		}
	});
}

function datosInsertados() {
	$.confirm({
		theme: 'material',
		title: 'Atencion',
		content: 'Datos ingresados correctamente',
		useBootstrap: false,
		boxWidth:'300px',
		buttons:{
			Adelante: function(){ recargarPagina(); }
		}
	});
}

function borrarRegistro(clave){

	var parametros = {
		"clave" : clave
	};
	$.ajax({
		url: 'borrar.php',
		type: 'POST',
		data: parametros,
		success: function(respuesta){
			$('#invisible').html(respuesta);
			console.log(respuesta);
		}
	});
}

function modificar(clave, campo, valor){

	var parametros = {
		"clave" : clave,
		"campo" : campo,
		"valor" : valor
	};
	$.ajax({
		url: 'editar.php',
		type: 'POST',
		data: parametros,
		success: function(respuesta){
			$('#invisible').html(respuesta);
			console.log(respuesta);
		}
	});
}

function guardarFecha(elemento){

	var clave = elemento.siblings().first().val();
	var campo = elemento.index();

	var fecha = new Date();
	var dia = fecha.getDate();
	var mes = fecha.getMonth()+1;
	var año = fecha.getFullYear();

	if(dia<10) {dia='0'+dia;} 
	if(mes<10) {mes='0'+mes;}	 

	fecha = año + '-' + mes + '-' + dia;
	elemento.val(fecha);

	$.confirm({
		theme: 'material',
		title: 'Atencion',
		content: '¿Ingresar Fecha actual?',
		useBootstrap: false,
		boxWidth:'300px',
		buttons:{
			Adelante: function(){ 
				modificar(clave, campo, fecha);
			},
			Cancelar: function(){
				elemento.val('');
			}
		}
	});
}

function preguntarFecha(elemento){

	var clave = elemento.siblings().first().val();
	var campo = elemento.index();
	var valor = "0000-00-00";

	$.confirm({
		theme: 'material',
		title: 'Atencion',
		content: '¿Qué accion desea realizar?',
		useBootstrap: false,
		boxWidth:'400px',
		buttons:{
			Ingresar:{
				text: 'Ingresar Fecha Actual',
				action: function (){
					guardarFecha(elemento);
				}
			},
			Borrar:{
				text: 'Borrar Fecha',
				action: function(){
					modificar(clave, campo, valor);
				}
			}
		}
	});
}

function funcionIngresar(caja1,caja2,caja3,caja4,caja5,caja6,caja7,caja8,caja9,caja10,caja11,caja12){
	
	var parametros = {
		"escritura" : caja1,
		"enajenante" : caja2,
		"adquiriente" : caja3,
		"primer" : caja4,
		"costo_primer" : caja5,
		"segundo" : caja6,
		"testimonio" : caja7,
		"costo_testimonio" : caja8,
		"pago" : caja9,
		"salida" : caja10,
		"entrega" : caja11,
		"costo" : caja12
	};
	$.ajax({
		url: 'ingresar.php',
		type: 'POST',
		data: parametros,
		success: function(respuesta){
			$('#invisible').html(respuesta);
			console.log(respuesta);
		}
	});
}

$(document).ready(function(){ //////// EVENTOS ////////

	$('.entrada').on('keypress',function(event) {
		if (event.which === 13) {
			funcionIngresar( $('#caja1').val(), $('#caja2').val(), $('#caja3').val(), $('#caja4').val(), $('#caja5').val(), $('#caja6').val(), $('#caja7').val(), $('#caja8').val(), $('#caja9').val(), $('#caja10').val(), $('#caja11').val(), $('#caja12').val() );
		}
	});

	$('.fechaingreso').datepicker({
		dateFormat: 'yy/mm/dd'
	});

	$('.campo-fecha').datepicker({
		dateFormat: 'yy/mm/dd'
	});

	$('.fecha').on('click', function() {
	
		var elemento = $(this);
		var clave = $(this).siblings().first().val();
		var campo = $(this).index();

		if ($(this).val() === "") {
			$(this).datepicker({
				dateFormat: 'yy/mm/dd',
				onSelect: function(){
					var valor = $(this).val();
					modificar(clave,campo,valor);
				}
			});
			$(this).datepicker("show");
		}else{
			$.confirm({
				theme: 'material',
				title: 'Atencion',
				content: '¿Qué accion desea realizar?',
				useBootstrap: false,
				boxWidth: '400px',
				buttons:{
					Agregar:{
						text:'Cambiar fecha',
						action: function(){
							elemento.datepicker({
								dateFormat: 'yy/mm/dd',
								onSelect: function(){
		 							var valor = elemento.val();
		 							modificar(clave,campo,valor);
								}
							});
							//elemento.datepicker('show');
						}
					},
					Borrar:{
						text:'Borrar Fecha',
						action: function(){
							var valor = "0000-00-00";
							modificar(clave, campo, valor);
						}
					},
					Cancelar:{
						text:'Cancelar',
						action: function(){}
					}
				}
			});
		}
		
	});

	$('.aviso').on('click',function() {
		var elemento = $(this);

		if (elemento.val() === "") {guardarFecha(elemento);}
		else 				       {preguntarFecha(elemento);}
	});

	$('.celda').on('keypress',function(e){
		if (e.which === 13) {
		 	var clave = $(this).siblings().first().val(); // OBTENER EL VALOR DEL PRIMER HERMANO
		 	var campo = $(this).index();
		 	var valor = $(this).val();
		 	
		 	modificar(clave,campo,valor);
		}
	});

	$('.clave').on('click',function() {

		var clave = $(this).val();

		$.confirm({
			theme: 'material',
			title: 'Atencion',
			content: '¿Esta seguro de borrar el registro?',
			useBootstrap: false,
			boxWidth:'300px',
			buttons:{
				Adelante: function(){borrarRegistro(clave);},
				Cancelar: function(){

				}
			}
		});
		
	});


}); ///////// DOCUMENT READY /////////