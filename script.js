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