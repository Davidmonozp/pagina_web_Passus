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
        document.getElementById("cards-container"),
        document.getElementById("hero_derechos_deberes"),
        document.querySelector(".hero-banner-nuestrasPoliticas"),
        document.querySelector(".hero-banner-trabajaNosotros"),
        document.getElementById("trabajaNosotros"),
        document.querySelector(".faq-accordion"),
        document.querySelector(".hero-banner"), 
        document.getElementById("hidroterapia"),
        document.getElementById("rehabilitacion"),
        document.getElementById("consulta_externa"),
        document.querySelector(".hero-banner-divertido"),
        document.getElementById("acuamotricidad"),
        document.getElementById("natacion"),
        document.getElementById("yoga"),
        document.getElementById("mindfulness"),
        document.getElementById("pilates"),
        document.querySelector(".hero-banner-preguntas"),
        document.getElementById("preguntas_frecuentes"),
        document.querySelector(".sectiontitle"),
        document.getElementById("projectFacts"),
        document.getElementById("testimonial-slider")        
    ];

    
    contenedores.forEach(contenedor => {
        if (contenedor) {
            const elementos = contenedor.querySelectorAll(
                "p, h1, h2, h3, h4, li, a, label, input[type='checkbox'], .custom-article, .why_list_title, .why_list_text, .cta_title, .cta_phone, .timeline, time, .prices, .price_title, .accordion, .header-top, .contact_content_title, li div, .faq-accordion-title, i.fa, .post"
              );

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
        document.getElementById("cards-container"),
        document.getElementById("trabajaNosotros"),
        document.getElementById("hidroterapia"),
        document.getElementById("rehabilitacion"),
        document.getElementById("consulta_externa"),    
        document.getElementById("acuamotricidad"),
        document.getElementById("natacion"),
        document.getElementById("yoga"),
        document.getElementById("mindfulness"),
        document.getElementById("pilates"),
        document.querySelector(".sectiontitle"),
        document.getElementById("projectFacts"),
        document.getElementById("testimonial-slider"),
    ];

    contenedores.forEach(contenedor => {
        if (contenedor) {
            contenedor.classList.toggle("modo_oscuro-govco");
        }
    });
    document.querySelectorAll(".card.contact_content").forEach(card => {
        card.classList.toggle("modo_oscuro-govco");
    });
    document.querySelectorAll(".contact_content").forEach(el => {
        el.classList.toggle("modo_oscuro-govco");
    });
    document.querySelectorAll(".m").forEach(home => {
        home.classList.toggle("modo_oscuro-govco");
    });
    document.querySelectorAll(".faq-accordion").forEach(el => {
        el.classList.toggle("modo_oscuro-govco");
    });
    document.querySelector(".service_oferta")?.classList.toggle("modo_oscuro-govco");
    document.querySelector(".contenedor_testimonial")?.classList.toggle("modo_oscuro-govco");
    document.querySelector(".super_container")?.classList.toggle("modo_oscuro-govco");
    document.querySelector(".icon-contraste")?.classList.toggle("modo_oscuro-govco");
    document.querySelector(".header-top")?.classList.toggle("modo_oscuro-govco");
}




