console.clear();

window.addEventListener('scroll', function() {
  const fullBeer = document.querySelector('.full-beer');
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrollPercent = scrollTop / docHeight;

  fullBeer.style.opacity = scrollPercent;
});