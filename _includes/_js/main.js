// JavaScript Document

/* PREPARATIVOS */	


var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

	// Touch or Click Definimos si se usará click o Touch según disponibilidad // touchstart
	var clickHandler = ('ontouchstart' in document.documentElement ? "touchend" : "click");
	var touchmoved;
	if ('ontouchstart' in document.documentElement){ document.addEventListener("touchstart", function(){}, false); /*var touchSet = true;*/ }

	/* EJEMPLO 

	$(document).on(clickHandler, "SELECTOR", function(){		
		if(!touchmoved){	
			
			CODIGO
		
			
		}
	}).on('touchmove', function(e){
		touchmoved = true;
	}).on('touchstart', function(){
		touchmoved = false;
	});*/
	
	// Long Tab or Click Derecho
	var tapHandler = ('ontouchstart' in document.documentElement ? "taphold" : "contextmenu");
	
	if(!isMobile)
		{
		   clickHandler = 'click';
		   tapHandler = 'contextmenu';
		}

	$(document).ready(function() {
		"use strict";
		
	/* HEADER */
		// --- REGISTER
		var $popupForm = $('#popupForm');

		$('.open-popup-btn').on('click', function() {
			$popupForm.show();
		});

		$('#closePopupBtn, #popupForm').on('click', function() {
			$popupForm.hide();
		});

		// Prevenir que el popup desaparezca al hacer clic dentro de él
		$('.popup-content').on('click', function(event) {
			event.stopPropagation();
		});

		// Manejar el envío del formulario con AJAX
		$('#registrationForm').on('submit', function(event) {
			event.preventDefault(); // Evitar el envío normal del formulario

			var formData = $(this).serialize(); // Serializar los datos del formulario
	
			$.ajax({
				url: 'https://upgrade.red/amina/_includes/_php/querys.php', // Reemplaza con la URL a la que se enviarán los datos
				type: 'POST',
				data: formData,
				success: function(response) {
					// Manejar la respuesta del servidor
					console.log(response);
					if(response == 1){
						$('.popup-content').html('<span class="close-btn" id="closePopupBtn">×</span><h2>¡Te has registrado correctamente!</h2><p style="text-align: center;font-size: 1.2em;margin: 30px;">Gracias por llenar tus datos, pronto nos pondremos en contacto.</p>');
					}
					//$popupForm.hide();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					// Manejar los errores
					alert('Error en el registro: ' + textStatus);
				}
			});
		});

		
	}); // DOCUMENT READY


	// DOCUMENT READY NATIVO
	document.addEventListener('DOMContentLoaded', function() {

console.log('DOMContentLoaded');
		// --- HEADER SCROLL
		window.addEventListener('scroll', function() {
			console.log(window.scrollY);
			const header = document.querySelector('header');
			if (window.scrollY > 50) {
				header.classList.add('scrolled');
			} else {
				header.classList.remove('scrolled');
			}
		});
	});
	

//Cambio de tamaño en la vetana
function thisResize() {
	
}

var resizeTimer; $(window).resize(function () { if (resizeTimer) { clearTimeout(resizeTimer); } resizeTimer = setTimeout(function() { resizeTimer = null; thisResize(); }, 500);});
