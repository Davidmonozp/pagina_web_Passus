const faqItems = document.querySelectorAll(".faq-accordion button");

function toggleFaqAccordion() {
  const isExpanded = this.getAttribute('aria-expanded');

  faqItems.forEach(item => item.setAttribute('aria-expanded', 'false'));

  if (isExpanded === 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

faqItems.forEach(item => item.addEventListener('click', toggleFaqAccordion));
