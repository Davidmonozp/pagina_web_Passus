// const faqItems = document.querySelectorAll(".faq-accordion button");

// function toggleFaqAccordion() {
//   const isExpanded = this.getAttribute('aria-expanded');

//   faqItems.forEach(item => item.setAttribute('aria-expanded', 'false'));

//   if (isExpanded === 'false') {
//     this.setAttribute('aria-expanded', 'true');
//   }
// }

// faqItems.forEach(item => item.addEventListener('click', toggleFaqAccordion));


const faqItems = document.querySelectorAll(".faq-accordion button");

function toggleFaqAccordion() {
    const isExpanded = this.getAttribute('aria-expanded');
    const targetImageId = this.dataset.targetImage;
    const expandedSrc = this.dataset.expandedSrc;
    const expandedAlt = this.dataset.expandedAlt;
    const initialSrc = this.dataset.initialSrc;
    const initialAlt = this.dataset.initialAlt;

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

    if (isExpanded === 'false') {
        this.setAttribute('aria-expanded', 'true');
        if (targetImageId) {
            const targetImage = document.getElementById(targetImageId);
            if (targetImage) {
                targetImage.src = expandedSrc;
                targetImage.alt = expandedAlt;
            }
        }
    } else {
        this.setAttribute('aria-expanded', 'false');
        if (targetImageId) {
            const targetImage = document.getElementById(targetImageId);
            if (targetImage) {
                targetImage.src = initialSrc;
                targetImage.alt = initialAlt;
            }
        }
    }
}

faqItems.forEach(item => item.addEventListener('click', toggleFaqAccordion));