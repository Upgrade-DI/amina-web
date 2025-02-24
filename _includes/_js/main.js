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


	// DOCUMENT READY NATIVO
// [Previous code remains exactly the same until the DOMContentLoaded event listener]

document.addEventListener('DOMContentLoaded', function() {
    
    console.log('DOMContentLoaded');

    // GENERAL --- HEADER SCROLL
    /*window.addEventListener('scroll', function() {
        console.log(window.scrollY);
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });*/


    // HOME --- CONNECTIONS
const connectionItems = document.querySelectorAll('.connection_item');
const connectionImageContainer = document.querySelector('.connections_image');
const imagePath = '_images/_home/connections_';
const imageExtension = '.svg';
let currentImage = 'a';
const imageLetters = ['a', 'b', 'c'];

// Función para precargar imágenes
function preloadImages() {
    imageLetters.forEach(letter => {
        const img = new Image();
        img.src = `${imagePath}${letter}${imageExtension}`;
        img.style.position = 'absolute';
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.3s ease-in-out';
        connectionImageContainer.appendChild(img);
    });
}

// Función para cambiar la imagen
function changeImage(newImage) {
    const oldImg = connectionImageContainer.querySelector(`img[src="${imagePath}${currentImage}${imageExtension}"]`);
    const newImg = connectionImageContainer.querySelector(`img[src="${imagePath}${newImage}${imageExtension}"]`);

    if (oldImg && newImg) {
        oldImg.style.opacity = '0';
        newImg.style.opacity = '1';
        currentImage = newImage;
    }
}

connectionItems.forEach((item, index) => {
    item.addEventListener('click', function() {
        connectionItems.forEach(i => i.classList.remove('active'));
        this.classList.add('active');
        
        const newImage = imageLetters[index];
        if (newImage !== currentImage) {
            changeImage(newImage);
        }
    });
});

// Inicializar
preloadImages();
changeImage('a');


    // HOME --- CIRCLES
    const circles = document.querySelectorAll('.circle');
    const infos = document.querySelectorAll('.info');
    let autoRotationInterval = null;
    let isHovered = false;

    function setActiveInfo(dataCircle, isAuto = false) {
        const activeInfo = document.querySelector('.info.active');
        const newActiveInfo = document.querySelector(`.info[data-info="${dataCircle}"]`);

        if (activeInfo === newActiveInfo) return;

        if (activeInfo) {
            activeInfo.classList.remove('active');
            activeInfo.addEventListener('transitionend', function handler() {
                this.style.display = 'none';
                this.removeEventListener('transitionend', handler);
            });
        }

        if (newActiveInfo) {
            newActiveInfo.style.display = 'block';
            // Forzar un reflow
            newActiveInfo.offsetHeight;
            newActiveInfo.classList.add('active');
        }

        // Manejar el resaltado de círculos
        circles.forEach(circle => {
            if (circle.getAttribute('data-circle') === dataCircle) {
                if (isAuto) {
                    circle.classList.add('auto-highlight');
                } else {
                    circle.classList.remove('auto-highlight');
                }
            } else {
                circle.classList.remove('auto-highlight');
            }
        });
    }

    function startAutoRotation() {
        if (autoRotationInterval || isHovered) return;
        
        autoRotationInterval = setInterval(() => {
            if (isHovered) {
                clearInterval(autoRotationInterval);
                autoRotationInterval = null;
                return;
            }
            
            const activeInfo = document.querySelector('.info.active');
            const nextInfo = activeInfo.nextElementSibling || infos[0];
            setActiveInfo(nextInfo.getAttribute('data-info'), true);
        }, 5000);
    }

    circles.forEach(circle => {
        circle.addEventListener('mouseenter', function() {
            isHovered = true;
            if (autoRotationInterval) {
                clearInterval(autoRotationInterval);
                autoRotationInterval = null;
            }
            const dataCircle = this.getAttribute('data-circle');
            setActiveInfo(dataCircle);
        });

        circle.addEventListener('mouseleave', function() {
            this.classList.remove('auto-highlight');
        });
    });

    document.querySelector('.section_decision_circles').addEventListener('mouseleave', () => {
        isHovered = false;
        startAutoRotation();
    });

    // Iniciar con el primer círculo activo y la rotación automática
    setActiveInfo('control', true);
    startAutoRotation();

// HOME --- SECTION SOLUTION

const solutionItems = document.querySelectorAll('.section_solution_content ul li');
const solutionImages = document.querySelectorAll('.section_solution_gal .image');
let activeTarget = null;
let hoverTimeout;

function removeActiveClass() {
    solutionItems.forEach(item => item.classList.remove('active'));
    solutionImages.forEach(image => {
        image.classList.remove('active');
        const description = image.querySelector('.description');
        if (description) {
            description.style.opacity = '0';
        }
    });
}

function activateElements(target) {
    if (activeTarget !== target) {
        removeActiveClass();
        const item = document.querySelector(`li[data-target="${target}"]`);
        const image = document.querySelector(`.image[data-hover="${target}"]`);
        
        if (item) item.classList.add('active');
        if (image) {
            image.classList.add('active');
            clearTimeout(hoverTimeout);
            hoverTimeout = setTimeout(() => {
                const description = image.querySelector('.description');
                if (description) {
                    description.style.opacity = '1';
                }
            }, 50);
        }
        activeTarget = target;
    }
}

function deactivateAll() {
    clearTimeout(hoverTimeout);
    removeActiveClass();
    activeTarget = null;
}

solutionItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
        const target = this.getAttribute('data-target');
        activateElements(target);
    });
});

solutionImages.forEach(image => {
    image.addEventListener('mouseenter', function() {
        const target = this.getAttribute('data-hover');
        activateElements(target);
    });
});

const solutionSection = document.querySelector('.section_solution');
if (solutionSection) {
    solutionSection.addEventListener('mouseleave', deactivateAll);
}

document.addEventListener('mousemove', (event) => {
    const target = event.target.closest('.section_solution_content ul li, .section_solution_gal .image');
    if (!target) {
        deactivateAll();
    }
});


// REGISTRATION FORM

        const popupForm = document.getElementById('popupForm');
        const closeBtn = document.getElementById('closePopupBtn');
        const registrationForm = document.getElementById('registrationForm');

        // Show popup when register buttons are clicked
        document.querySelectorAll('.open-popup-btn, .btn-register, .btn-register-banner').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                popupForm.style.display = 'flex';
            });
        });

        // Close popup when clicking close button or outside
        closeBtn.addEventListener('click', () => {
            popupForm.style.display = 'none';
        });

        popupForm.addEventListener('click', (e) => {
            if (e.target === popupForm) {
                popupForm.style.display = 'none';
            }
        });

        // Form submission
        registrationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch('/sudi-v4-amina/public_html/app/_files/_php/_amina_register.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                console.log('Server response:', data); // Debug: ver la respuesta del servidor
                
                if(data === "1") {
                    // Success message
                    const successMessage = '<span class="close-btn" id="closePopupBtn">×</span>' +
                        '<h2>¡Te has registrado correctamente!</h2>' +
                        '<p style="text-align: center;font-size: 1.2em;margin: 30px;">' +
                        'Gracias por llenar tus datos, pronto nos pondremos en contacto.</p>';
                    
                    document.querySelector('.popup-content').innerHTML = successMessage;
                    
                    // Agregar nuevo evento para el botón de cerrar
                    document.getElementById('closePopupBtn').addEventListener('click', () => {
                        popupForm.style.display = 'none';
                    });
                } else {
                    // Error message
                    console.error('Server returned error code:', data); // Debug
                    if(data === "0") {
                        alert('El correo electrónico ya está registrado o hubo un error en el registro. Por favor verifica tus datos e intenta nuevamente.');
                    } else {
                        alert('Hubo un error al procesar tu registro. Por favor intenta más tarde.');
                    }
                }
            })
            .catch(error => {
                console.error('Error details:', error); // Debug: ver detalles del error
                alert('Hubo un error en el servidor. Por favor intenta más tarde.');
            });
        });
        // Registration form end


    
}); // DOCUMENT READY NATIVO END

// [Rest of the code remains exactly the same]


	

//Cambio de tamaño en la vetana
function thisResize() {
	
}

var resizeTimer; $(window).resize(function () { if (resizeTimer) { clearTimeout(resizeTimer); } resizeTimer = setTimeout(function() { resizeTimer = null; thisResize(); }, 500);});
