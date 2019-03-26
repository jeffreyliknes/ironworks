(function($) {
  $(document).ready();

 
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


// Front Page Panels

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


// Sticky Nav

$(window).on('scroll', function(){
  if($(window).scrollTop()) {
    $('nav').addClass('nav-top')
  } else {
  ($('nav').removeClass('nav-top'))
  }});

 
console.log('biotch');



})(jQuery);
