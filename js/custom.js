(function($) {
  $(document).ready();

 const panels = document.querySelectorAll('.panel');

 function toggleOpen() {
   this.classList.toggle('open');
 }

 function toggleActive(e) {
   
   if(e.propertyName.includes('flex')) {
     this.classList.toggle('open-active');
   }
 }
 

 panels.forEach(panel => panel.addEventListener('click', toggleOpen));
 panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));


// Carousel for front page flickity
//https://flickity.metafizzy.co/style.html

 $('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  wrapAround: true,
  autoPlay: true,
  prevNextButtons: false,
});

const frontpageTerms = document.querySelectorAll('.frontpage-term');

function toggleOpen() {
  this.classList.toggle('open');
}

function toggleActive(e) {
  
  if(e.propertyName.includes('flex')) {
    this.classList.toggle('open-active');
  }
}


frontpageTerms.forEach(frontpageTerm => frontpageTerm.addEventListener('click', toggleOpen));
frontpageTerms.forEach(frontpageTerm => frontpageTerm.addEventListener('transitionend', toggleActive));



})(jQuery);
