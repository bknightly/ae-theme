// if you're using a bundler, first import:
import Headroom from "headroom.js";
// grab an element
var myElement = document.getElementById("header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement, {
  "offset": 100,
  "tolerance": 5,
});
// initialise
headroom.init();

// Animate Featured Content on Home Page
import anime from 'animejs/lib/anime.es.js';
anime({
  targets: '#element1',
  opacity: [0,1],
  translateY: [30,0],
  easing: "easeInOutQuad",
  duration: 1000,
  delay: 750
})
anime({
  targets: '#element2',
  opacity: [0,1],
  translateY: [30,0],
  easing: "easeInOutQuad",
  duration: 1000,
  delay: 1250
})
anime({
  targets: '#element3',
  opacity: [0,1],
  translateY: [30,0],
  easing: "easeInOutQuad",
  duration: 1000,
  delay: 1750
})
anime({
  targets: '#element4',
  opacity: [0,1],
  translateY: [30,0],
  easing: "easeInOutQuad",
  duration: 1000,
  delay: 2250
})

// Modal Navigation Toggle
document.getElementById("menu-toggle").addEventListener("click", mobileNavToggle);
document.getElementById("menu-toggle-close").addEventListener("click", mobileNavToggle);
function mobileNavToggle() {
    var modalNav = document.getElementsByTagName('body')[0];
    modalNav.classList.toggle('mobile-nav');
    var nav = document.getElementById('header-nav');
    nav.classList.toggle('toggled');
}

// Add micromodal for newsletter sign up form
import MicroModal from 'micromodal';
MicroModal.init({
  awaitCloseAnimation: true
});

// Add form input filtering for phone numbers
import IMask from 'imask';
// From https://stackoverflow.com/questions/45995207/phone-input-mask-imask-js#answer-45995382
var items = document.getElementsByClassName('phone-mask');
Array.prototype.forEach.call(items, function(element) {
    var phoneMask = new IMask(element, {
      mask: '(000) 000-0000'
    });
});

// Change contact form submit button text when clicked
// From: https://stackoverflow.com/questions/53760658/how-to-disable-submit-button-and-change-text-on-form-submit-at-wordpress-contac#answer-53761200
document.addEventListener( 'wpcf7submit', function( event ) {
  // var status = event.detail.status;  
  // console.log(status);
  jQuery('.wpcf7-submit').val("Submit Request »"); 
}, false );

jQuery('.wpcf7-submit').on('click',function(){
  jQuery(this).val("Submitting...");
});

// Disable submit button while form is processing submission
// From: https://stackoverflow.com/questions/53760658/how-to-disable-submit-button-and-change-text-on-form-submit-at-wordpress-contac#answer-53761200#answer-70091146 (modified from last answer)
jQuery('.wpcf7-form').submit(function() {
  jQuery(this).find(':input[type=submit]').prop('disabled', true);  
  document.addEventListener('wpcf7submit', function(event) {
      jQuery('.wpcf7-submit').prop("disabled", false);
  }, false);
  document.addEventListener('wpcf7invalid', function() {
      jQuery('.wpcf7-submit').prop("disabled", false);
  }, false);
});

// console.log('glide loaded in front end footer');
var glide_fade = document.querySelectorAll('.glide-fade');
for (var i = 0; i < glide_fade.length; i++) {
	var glide = new Glide(glide_fade[i], {
  // type: 'carousel',
  autoplay: 6000,
	animationDuration: 500,
	keyboard: false,
  hoverpause: true
	});
	glide.mount();
}

// console.log('Toggle Content block loaded (frontend)');
function toggleContainer(el) {
  if (el.target && el.target.classList.contains('block-toggle-content_list-item_title')) {
    var next = el.target.parentElement.parentElement;
    if (next.className == "block-toggle-content_list-item") {
      next.classList.toggle('toggled');
    } else {
      next.classList.toggle('toggled');
    }
  }
}
document.addEventListener('click', toggleContainer, true);