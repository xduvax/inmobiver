var resultados = "";
var div = "";
var auxiliar = "";
var completo = "";
var divtotal = "";

function idDinamicos(i){

	var archivo = "archivo"+i;
	var label = "label"+i;

	$("#identificador"+i).append('<input class="archivo" id="'+archivo+'" type="file" name="archivo">');
	$('#identificador'+i).append('<label class="nuevo-label" id="'+label+'" for="'+archivo+'">Elige un archivo</label>');
	$('#identificador'+i).append('<div id="boton-archivo'+i+'" class="boton-archivo">Subir</div>');

}

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

function convertirFecha(fecha){
	var nueva = fecha.split('-');
  	return nueva[2] + '/' + nueva[1] + '/' + nueva[0];
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

function funcionIngresar(caja1,caja2,caja3,caja4,caja5,caja6,caja7,caja8,caja9,caja10,caja11,caja12,caja13,caja14,caja15){
	
	var parametros = {
		"municipio" : caja1,
		"escritura" : caja2,
		"enajenante" : caja3,
		"adquiriente" : caja4,
		"primer" : caja5,
		"entrega_primer" : caja6,
		"costo_primer" : caja7,
		"segundo" : caja8,
		"testimonio" : caja9,
		"entrega_testimonio" : caja10,
		"costo_testimonio" : caja11,
		"pago" : caja12,
		"salida" : caja13,
		"entrega" : caja14,
		"costo" : caja15
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
		var aux = "";
		var sele = "";
		if (event.which === 13) {

			sele = $('#caja1').val();
			if(sele=="Municipio"){sele="";}
			else{aux=sele;}

			funcionIngresar( sele, $('#caja2').val(), $('#caja3').val(), $('#caja4').val(), $('#caja5').val(), $('#caja6').val(), $('#caja7').val(), $('#caja8').val(), $('#caja9').val(), $('#caja10').val(), $('#caja11').val(), $('#caja12').val(), $('#caja13').val(), $('#caja14').val(), $('#caja15').val() );
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

	$(document).on('change','#municipio',function(){ // SELECT //

 		var clave = $(this).siblings().first().val();
 		var campo = $(this).index();
 		var valor = $(this).val();

 		modificar(clave,campo,valor);
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

	$('#wrapper2').css('display', 'none');
	$('.total').css('display', 'none');

	$('.boton_consulta').on('click',function() {

		$('#wrapper3').remove();
		$('#linea-titulo').remove();
		$('#boton_pdf').remove();
		$('.total').remove();
		$('#wrapper2').css('display', 'inline-block');
		$('.total').css('display', 'inline-block');

		var municipio = $('.consulta-municipio').val();
		var fecha1 = $('#fecha1').val();
		var fecha2 = $('#fecha2').val();
		var columna = $('input[name=consulta]:checked').val();

		if (columna == "primer_aviso") {columna = "entrega_primer";}
		if (columna == "testimonio") {columna = "entrega_testimonio";}

		var parametros = {
			"fecha1" : fecha1,
			"fecha2" : fecha2,
			"columna" : columna,
			"municipio" : municipio
		};
		$.ajax({
			url: 'consulta_fecha.php',
			type: 'POST',
			data: parametros,
			dataType: 'json',
			success: function(respuesta){
				
				$("#content").append('<div class="total">Total: </div>');

				var total = 0;
				var numero = 0;

				var variable = "";
				if (columna=="entrega_primer") {variable = "Primer aviso";}
				if (columna=="entrega_testimonio") {variable = "Testimonio";}

				$('#wrapper2').append(
					"<div id='linea-titulo' class='wrapper-fila'><div class='celda_titulo corto'>Municipio</div><div class='celda_titulo corto'>Escritura</div> <div class='celda_titulo nombres'>Enajenante</div> <div class='celda_titulo nombres'>Adquiriente</div> <div class='celda_titulo'>"+variable+"</div> <div class='celda_titulo'>Entrega</div> <div class='celda_titulo corto'>Costo</div> </div>");
				$('#wrapper2').append("<div id='wrapper3'></div>");

				if (columna=="entrega_primer") {

					$.each(respuesta, function(index, item){
						
						numero = parseFloat(item.costo_primer);
						total = total + numero;
						$('#wrapper3').append(
						"<div class='wrapper-fila'><input class='celda corto' readonly value='"
						+item.municipio+"'><input class='celda corto' readonly value='"
						+item.escritura+"'><input class='celda nombres' readonly value='"
						+item.enajenante+"'><input class='celda nombres' readonly value='"
						+item.adquiriente+"'><input class='celda' readonly value='"
						+convertirFecha(item.primer_aviso)+"'><input class='celda' readonly value='"
						+convertirFecha(item.entrega_primer)+"'><input class='celda corto costo' readonly value='"
						+item.costo_primer+"'></div>");
					});
					auxiliar = "<div class='wrapper-fila'><input class='corto' value='Municipio'><input class='corto' value='Escritura'><input class='nombres' value='Enajenante'><input class='nombres' value='Adquiriente'><input class='celda' value='Primer aviso'><input class='celda' value='Entrega'><input class='corto costo' value='Costo'></div>";
				}
				if (columna=="entrega_testimonio"){

					$.each(respuesta, function(index, item){

						numero = parseFloat(item.costo_testimonio)
						total = total + numero;
						$('#wrapper3').append(
						"<div class='wrapper-fila'><input class='celda corto' readonly value='"
						+item.municipio+"'><input class='celda corto' readonly value='"
						+item.escritura+"'><input class='celda nombres' readonly value='"
						+item.enajenante+"'><input class='celda nombres' readonly value='"
						+item.adquiriente+"'><input class='celda' readonly value='"
						+convertirFecha(item.testimonio)+"'><input class='celda' readonly value='"
						+convertirFecha(item.entrega_testimonio)+"'><input class='celda corto costo' readonly value='"
						+item.costo_testimonio+"'></div>");
					});
					auxiliar = "<div class='wrapper-fila'><input class='corto' value='Municipio'><input class='corto' value='Escritura'><input class='nombres' value='Enajenante'><input class='nombres' value='Adquiriente'><input class='celda' value='Testimonio'><input class='celda' value='Entrega'><input class='corto costo' value='Costo'></div>";
				}
				$(".total").append(total);
				$('#content').append('<button id="boton_pdf">Generar PDF</button>');
				resultados = $('#wrapper3').html();
				completo = auxiliar + resultados;
				divtotal = "<div class='total'>Total: "+total+"</div>";
				completo = auxiliar + resultados + divtotal;
			}
		});

	});

	$('.boton-archivo').on('click', function() { // Subida de archivos
		
		var id = this.id;
		var numero = id.substring(13,14);

        var formData = new FormData();
        formData.append('archivo',document.getElementById('archivo'+numero).files[0]);

		$.ajax({
			url: 'subida.php',
			type: 'POST',
			data: formData,
			contentType: false,
			processData: false,
			success: function(respuesta){
				//$('#invisible').html(respuesta);
				alert(respuesta);
			}
		});

	});

	$('.archivo').on('change', function(event) {

		var id = this.id;
		var numero = id.substring(7,8);
		
		var nombre = document.getElementById('archivo'+numero);
		var variable = nombre.files[0].name;
		document.getElementById('label'+numero).innerHTML = variable;

	});


}); ///////// DOCUMENT READY /////////

$(document).on('click', '#boton_pdf', function(){

	var codificado = btoa(completo);
	console.log("codificado :"+codificado);
	document.location.href = "documento.php?completo="+codificado;
	
});