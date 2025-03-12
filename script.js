console.clear();


window.addEventListener('scroll', function() {
  const beerImage = document.querySelector('.beer');
  const fullBeer = document.querySelector('.full-beer');
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrollPercent = scrollTop / docHeight;

  fullBeer.style.opacity = scrollPercent;
  const startInset = 85; // starting bottom inset percentage
  const endInset = 0;    // ending bottom inset percentage
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