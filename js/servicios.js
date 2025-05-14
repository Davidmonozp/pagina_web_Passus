
const faqItems = document.querySelectorAll(".faq-accordion button");

function animateImageChange(imageElement, newSrc, newAlt) {
    if (!imageElement) return;

    // Cambiar la imagen de inmediato
    imageElement.src = newSrc;
    imageElement.alt = newAlt;

    // Aplicar duración personalizada
    imageElement.style.animationDuration = '2s'; 

    // Añadir la animación de entrada (zoomIn)
    imageElement.classList.add('animate__animated', 'animate__zoomIn');

    // Esperar a que termine la animación
    imageElement.addEventListener('animationend', function handler() {
        // Limpiar clases y duración para evitar conflictos
        imageElement.classList.remove('animate__zoomIn');
        imageElement.style.animationDuration = '';

        // Quitar el listener para evitar múltiples ejecuciones
        imageElement.removeEventListener('animationend', handler);
    });
}

function toggleFaqAccordion() {
    const isExpanded = this.getAttribute('aria-expanded');
    const targetImageId = this.dataset.targetImage;
    const expandedSrc = this.dataset.expandedSrc;
    const expandedAlt = this.dataset.expandedAlt;
    const initialSrc = this.dataset.initialSrc;
    const initialAlt = this.dataset.initialAlt;

    // Cerrar todos los acordeones
    faqItems.forEach(item => {
        if (item !== this) {
            item.setAttribute('aria-expanded', 'false');
            const otherTargetImageId = item.dataset.targetImage;
            if (otherTargetImageId) {
                const otherImage = document.getElementById(otherTargetImageId);
                if (otherImage && item.getAttribute('aria-expanded') === 'true' && item.dataset.initialSrc) {
                    otherImage.src = item.dataset.initialSrc;
                    otherImage.alt = item.dataset.initialAlt;
                }
            }
        }
    });

    // Alternar el estado del acordeón y la imagen
    if (isExpanded === 'false') {
        this.setAttribute('aria-expanded', 'true');
        if (targetImageId) {
            const targetImage = document.getElementById(targetImageId);
            if (targetImage) {
                animateImageChange(targetImage, expandedSrc, expandedAlt);  // Cambiar imagen con animación
            }
        }
    } else {
        this.setAttribute('aria-expanded', 'false');
        if (targetImageId) {
            const targetImage = document.getElementById(targetImageId);
            if (targetImage) {
                animateImageChange(targetImage, initialSrc, initialAlt);  // Cambiar imagen con animación
            }
        }
    }
}

// Añadir el evento de clic a cada elemento del acordeón
faqItems.forEach(item => item.addEventListener('click', toggleFaqAccordion));



// const faqItems = document.querySelectorAll(".faq-accordion button");

// function toggleFaqAccordion() {
//     const isExpanded = this.getAttribute('aria-expanded');
//     const targetImageId = this.dataset.targetImage;
//     const expandedSrc = this.dataset.expandedSrc;
//     const expandedAlt = this.dataset.expandedAlt;
//     const initialSrc = this.dataset.initialSrc;
//     const initialAlt = this.dataset.initialAlt;

//     faqItems.forEach(item => {
//         if (item !== this) {
//             item.setAttribute('aria-expanded', 'false');
//             const otherTargetImageId = item.dataset.targetImage;
//             if (otherTargetImageId) {
//                 const otherImage = document.getElementById(otherTargetImageId);
//                 if (otherImage && item.getAttribute('aria-expanded') === 'true' && item.dataset.initialSrc) {
//                     otherImage.src = item.dataset.initialSrc;
//                     otherImage.alt = item.dataset.initialAlt;
//                 }
//             }
//         }
//     });

//     if (isExpanded === 'false') {
//         this.setAttribute('aria-expanded', 'true');
//         if (targetImageId) {
//             const targetImage = document.getElementById(targetImageId);
//             if (targetImage) {
//                 targetImage.src = expandedSrc;
//                 targetImage.alt = expandedAlt;
//             }
//         }
//     } else {
//         this.setAttribute('aria-expanded', 'false');
//         if (targetImageId) {
//             const targetImage = document.getElementById(targetImageId);
//             if (targetImage) {
//                 targetImage.src = initialSrc;
//                 targetImage.alt = initialAlt;
//             }
//         }
//     }
// }

// faqItems.forEach(item => item.addEventListener('click', toggleFaqAccordion));



