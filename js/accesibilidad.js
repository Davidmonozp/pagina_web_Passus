let fontSize = new Map();
let maxFontSize = new Map();
let originalFontSize = new Map();

window.onload = function () {
    const contenedores = [
        document.getElementById("nav"),
        document.getElementById("home"),
        document.getElementById("para-mirar"),
        document.getElementById("services_index"),
        document.getElementById("programa_rehabilitacion_index"),
        document.getElementById("divertido_index"),
        document.getElementById("aliados_index"),
        document.getElementById("linea_atencion"),
        document.getElementById("footer"),
        document.getElementById("copy"),
        document.getElementById("header-top"),
        document.getElementById("derechos_deberes"),
        document.getElementById("quienes_somos"),
        document.getElementById("reseña"),
        document.getElementById("nuestras_politicas"),  
        document.getElementById("manejo_datos"), 
        document.getElementById("terminos_condiciones"),    
        document.getElementById("participacion_ciudadana"),  
        document.getElementById("trabaja_nosotros"),    
        document.getElementById("como_aplicar"),   
        document.getElementById("nuestras_vacantes"), 
        document.getElementById("services"),
        document.getElementById("sede_sur_occidente"),
        document.getElementById("sede_hidroterapia_sur"),
        document.getElementById("sede_bogota_cedritos"),
        document.getElementById("sede_bogota_centro"),
        document.getElementById("sede_chia"),
        document.getElementById("sede_florencia"),
        document.getElementById("preguntas_frecuentes"),
        document.getElementById("contactanos"),
        document.getElementById("contactForm"),

    ];

    // Seleccionamos todos los <p>, <h2>, y clases dentro de ambos contenedores
    contenedores.forEach(contenedor => {
        if (contenedor) {
            const elementos = contenedor.querySelectorAll("p, h2, h3, a, h4, li, .why_list_title, .why_list_text, .cta_title, .cta_phone, .timeline, time, .prices, .price_title, .accordion, .header-top, .contact_content_title, li div, .form-check-label");

            elementos.forEach(el => {
                const original = parseInt(window.getComputedStyle(el).fontSize);
                originalFontSize.set(el, original);
                fontSize.set(el, original);
                maxFontSize.set(el, original + 15);
            });
        }
    });

    cambiarTamanio();
};


function disminuirTamanio(accion) {
    if (accion === 'disminuir') {
        fontSize.forEach((size, el) => {
            if (size > originalFontSize.get(el) - 3) {
                fontSize.set(el, size - 1);
            }
        });
    }
    cambiarTamanio();
}

function aumentarTamanio(accion) {
    if (accion === 'aumentar') {
        fontSize.forEach((size, el) => {
            if (size < maxFontSize.get(el)) {
                fontSize.set(el, size + 1);
            }
        });
    }
    cambiarTamanio();
}

function cambiarTamanio() {
    fontSize.forEach((size, el) => {
        el.style.fontSize = size + 'px';
    });
}

function cambiarContexto() {
    const contenedores = [
        // document.getElementById("nav"),
        document.getElementById("home"),
        document.getElementById("para-mirar"),
        document.getElementById("services_index"),
        document.getElementById("programa_rehabilitacion_index"),
        document.getElementById("divertido_index"),
        document.getElementById("aliados_index"),
        document.getElementById("linea_atencion"),
        document.getElementById("footer"),
        document.getElementById("copy"),
        document.getElementById("header-top"),
        document.getElementById("derechos_deberes"),
        document.getElementById("quienes_somos"),
        document.getElementById("reseña"),
        document.getElementById("nuestras_politicas"),   
        document.getElementById("manejo_datos"),  
        document.getElementById("terminos_condiciones"), 
        document.getElementById("participacion_ciudadana"),
        document.getElementById("trabaja_nosotros"),     
        document.getElementById("como_aplicar"),   
        document.getElementById("nuestras_vacantes"),   
        document.getElementById("services"),
        document.getElementById("sede_sur_occidente"),
        document.getElementById("sede_hidroterapia_sur"),
        document.getElementById("sede_bogota_cedritos"),
        document.getElementById("sede_bogota_centro"),
        document.getElementById("sede_chia"),
        document.getElementById("sede_florencia"),
        document.getElementById("preguntas_frecuentes"),
        document.getElementById("contactanos"),
        document.getElementById("contactForm"),
    ];

    contenedores.forEach(contenedor => {
        if (contenedor) {
            contenedor.classList.toggle("modo_oscuro-govco");
        }
    });
}


// // accesibilidad
// let fontSize = {}; 
// let maxFontSize = {};
// let originalFontSize = {}; 

// // Obtenemos el tamaño de la fuente original de los elementos y calculamos el tamaño máximo
// window.onload = function() {
    
//     const elementIds = [
//         'por-que', 
//         'parrafo-elegirnos', 
// 		'why_list_title1', 
// 		'why_list_title2',     

//     ];

//     // Recorremos los IDs para inicializar el tamaño de fuente y tamaño máximo para cada uno
//     elementIds.forEach(id => {
//         const element = document.getElementById(id);
//         const originalFontSizeValue = parseInt(window.getComputedStyle(element).fontSize);
//         originalFontSize[id] = originalFontSizeValue;  
//         fontSize[id] = originalFontSizeValue;  
//         maxFontSize[id] = originalFontSizeValue + 15; 
//     });

//     cambiarTamanio(); 
// };

// function disminuirTamanio(accion) {
//     if (accion === 'disminuir') {
//         Object.keys(fontSize).forEach(id => {
//             // Reducir el tamaño solo si no es menor que el tamaño original - 3px
//             if (fontSize[id] > originalFontSize[id] - 3) {
//                 fontSize[id]--; // Reducir el tamaño de la fuente
//             }
//         });
//     }
//     cambiarTamanio();
// }

// function aumentarTamanio(accion) {
//     if (accion === 'aumentar') {
//         Object.keys(fontSize).forEach(id => {
            
//             if (fontSize[id] < maxFontSize[id]) {
//                 fontSize[id]++;
//             }
//         });
//     }
//     cambiarTamanio();
// }

// function cambiarTamanio() {
    
//     const elementIds = [
//         'por-que', 
//         'parrafo-elegirnos', 
// 		'why_list_title1',         
// 		'why_list_title2',         
		 
//     ];

//     elementIds.forEach(id => {
//         const element = document.getElementById(id);
//         if (element) {
//             element.style.fontSize = fontSize[id] + 'px'; // Cambiar el tamaño de fuente de cada elemento
//         }
//     });
// }

// function cambiarContexto() {
//     document.body.classList.toggle("modo_oscuro-govco");
// }
