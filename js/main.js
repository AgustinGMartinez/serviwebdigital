$(document).ready(function(){
$('#preloader').hide();
$('.wrapper').fadeIn();
$('header').fadeIn();
if (typeof AOS !== 'undefined') AOS.init();
$('.portfolio-info').each(function(){
  var attr = $(this).attr('data-direction');
  var translate;
  switch (attr) {
    case 'l':
        translate = 'translateX(-100%)'
      break;
    case 'r':
        translate = 'translateX(100%)'
      break;
    case 'u':
        translate = 'translateY(-100%)'
      break;
    case 'd':
        translate = 'translateY(100%)'
      break;
    default:
      console.error('invalid portafolio direction');
  }
  $(this).css('transform', translate);
});

//menu panel handler
$('.menu-panel-dropdown').on('mouseenter', function() {
  closeMenuProperly();
  $(this).addClass('bigger');
  var att = $(this).attr('data-panel-trigger');
  // show panel and make it hide when mouse leaves it
  triggerMenuPanel(att);
});

// menu panel services handler
$('.service-dropdown').on('mouseenter', function() {
  var target = ".menu-panel .service-" + $(this).attr('data-dtarget');
  // show panel and make it hide when mouse leaves it
  $(target).show().on('mouseleave', function() {
    $(target).hide();
    $(target + ' ul').removeClass('fadeInLeft');
  });
  $(target + ' ul').addClass('fadeInLeft');
  // hide panel when mouse is over other menu options
  $(this).siblings().on('mouseenter', function() {
    $(target).hide();
    $(target + ' ul').removeClass('fadeInLeft');
  });
});

// mobile menu handler
$('.mobile-services-menu').on('click', function() {
  // $(this).find('.fa-arrow-right').addClass('arrow-clock-90-rotation');
  $(this).siblings().hide();
  // $(this).parent().addClass('animated');
  // $(this).children().addClass('animated');
  var attr = $(this).attr('data-target')
  triggerMenuPanel(attr);
});

//unused for now
//activateLinks();

//unused for now
// (function() {
//     var elements = document.getElementsByClassName('typewrite');
//     for (var i=0; i<elements.length; i++) {
//         var toRotate = elements[i].getAttribute('data-type');
//         var period = elements[i].getAttribute('data-period');
//         if (toRotate) {
//           new TxtType(elements[i], JSON.parse(toRotate), period);
//         }
//     }
// })();

//mobile Hamburguer menu
$('#nav-icon2').parent().click(function(){
	$('#nav-icon2').toggleClass('open');
});

// shrinked menu Hamburguer icon handlers
$('#nav-icon3').click(function(){
  $(this).toggleClass('open');
});
$('.nav-icon3').on("click", navExpansionForced);

//form Handler
$('#submitContactForm').on("click", submitContactForm);
// nav animation on scroll
window.setTimeout(attachWindowScrollEvent, 5000);
function attachWindowScrollEvent() {
  $(window).scroll(navExpansion);
}

// carrousel init
if (typeof $('#carousel').slick != 'undefined') {
  $('#carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    centerMode: true,
    responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]});
  }
});
// general scroll smoother
$("html").easeScroll({
    frameRate: 60,
    animationTime: 700,
    stepSize: 100,
    pulseAlgorithm: 1,
    pulseScale: 8,
    pulseNormalize: 1,
    accelerationDelta: 20,
    accelerationMax: 1,
    keyboardSupport: true,
    arrowScroll: 50,
    touchpadSupport: true,
    fixedBackground: true
});
