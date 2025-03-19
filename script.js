console.clear();


window.addEventListener('scroll', function() {
  const beerImage = document.querySelector('.beer');
  const fullBeer = document.querySelector('.full-beer');
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrollPercent = scrollTop / docHeight;

  fullBeer.style.opacity = scrollPercent;
  const startInset = 92; // starting bottom inset percentage
  const endInset = 12;    // ending bottom inset percentage
  const currentInset = startInset - scrollPercent * (startInset - endInset);

  beerImage.style.clipPath = `inset(0 0 ${currentInset}% 0)`;
});

document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Empêche l'envoi classique du formulaire

  // Vérifie si tous les champs sont valides
  if (this.checkValidity()) {
      alert("Votre message a été envoyé !");
      this.reset(); // Réinitialise le formulaire après envoi
  }
});

function updateBeerContainerHeight() {
  const beerContainer = document.querySelector('.beer-container');
  const bodyHeight = document.body.clientHeight; // Get body height

  if (beerContainer) {
      beerContainer.style.height = `${bodyHeight * 0.77}px`; // Set height based on 71.5% of body height
  }
}

// Run when the page loads and on resize
window.addEventListener('load', updateBeerContainerHeight);
window.addEventListener('resize', updateBeerContainerHeight);

