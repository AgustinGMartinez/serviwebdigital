function submitContactForm(e) {
  e.preventDefault();
  if (grecaptcha.getResponse().length < 1) {
    alert("Confirma que no eres un robot primero");
    return;
  }
  if (contactValidated) {
    $('#submitContactForm').hide();
    $('#sendingFormSpinner').show();

    let data = Object.create(null);
    data['firstName'] = $('#first-name').val();
    data['lastName'] = $('#last-name').val();
    data['email'] = $('#email').val();
    data['phone'] = $('#phone').val();
    data['message'] = $('#message').val();
    data['lang'] = $('#lang').val();
    data['google'] = grecaptcha.getResponse();

    function sendContactForm (data) {
      fetch("../mail.php", {
        headers : {
          "Content-Type": "application/json",
          "Accept": "application/json"
        },
        method: "POST",
        body: JSON.stringify(data)
      }).then( res => {
        if (res.status !== 200) {
          console.log('Looks like there was a problem. Status Code: ' +
            res.status);
          return;
        }

        return res.json();
      }, err => {
        console.log(err);
        swal("Mensaje no enviado", "Hubo un error enviando el mensaje, intente de nuevo más tarde.", "error");

        $('#submitContactForm').show();
        $('#sendingFormSpinner').hide();
      })
      .then( res => {
        if (res.message === "success") handleResponse(res);
        else console.log(res.message);
      });
    }

    function handleResponse(res) {
      swal("¡Mensaje enviado!", "Nos contactaremos contigo lo antes posible", "success");
      $('.contact100-form').trigger("reset");
      $('#submitContactForm').show();
      $('#sendingFormSpinner').hide();
    }

    sendContactForm(data);
  }
}

function activateLinks() {
  if (typeof pageName !== "undefined") {
    $('nav a[href=\'' + pageName + '\']').addClass("active");
    $('nav a[href=\'' + pageName + '\']').parent().siblings().find($('a')).addClass("inactive");
  }
}


function navExpansion() {
  var state = "expanded";

  function shrink() {
    $('.reg-nav').addClass('shrink');
    $('.fake-nav').addClass('shrink');
    $('.wrapper').addClass('expand');
    $('.menu').hide();
    $('.shrinkedMenu').show();
    $('.nav-icon3').removeClass("open");

    this.state = "shrinked";
  }
  function expand() {
    $('.reg-nav').removeClass('shrink');
    $('.fake-nav').removeClass('shrink');
    $('.wrapper').removeClass('expand');
    $('.menu').show();
    $('.shrinkedMenu').hide();

    this.state = "expanded";
  }

  if ($(document).scrollTop() > 200) shrink();
  else expand();
}

function navExpansionForced() {
  function shrink() {
    $('.reg-nav').addClass('shrink');
    $('.fake-nav').addClass('shrink');
    $('.wrapper').addClass('expand');
    $('.menu').hide();
    $('.shrinkedMenu').show();
    $('.nav-icon3').removeClass("open");
  }
  function expand() {
    $('.reg-nav').removeClass('shrink');
    $('.fake-nav').removeClass('shrink');
    $('.wrapper').removeClass('expand');
    $('.menu').show();
    $('.shrinkedMenu').hide();
  }

  if ($(".reg-nav").hasClass("shrink")) expand();
  else shrink();
}

var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = this.txt;

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

function triggerMenuPanel(){

  var position = $(window).scrollTop();

  function closeMenuProperly() {
      $('.menu-panel-dropdown').removeClass('bigger');
      $('.menu-panel').hide();
      $('.service').hide();
      $('.mobile-services-menu .fa-arrow-right').removeClass('arrow-clock-90-rotation');
      if ($('#nav-icon2').hasClass('open')) {
        $('#nav-icon2').click();
      }
      $('.mobile-services-menu').siblings().show();
      $('.mobile-services-menu').parent().removeClass('animated');
      $('.mobile-services-menu').children().removeClass('animated');
  }

  $('.menu-panel').show().on('mouseleave', function() {
    closeMenuProperly();
  });
  // hide panel when mouse is over other menu options
  $('.menu-panel-dropdown').parent().siblings().children().on('mouseenter', function() {
    closeMenuProperly();
  });
  // hide panel while scrolling
  $(window).on('scroll', function() {
    if (Math.abs($(window).scrollTop() - position) > 400) closeMenuProperly();
  });

  $('.menu-panel .service .close').on('click', function() {
    closeMenuProperly();
  });

  $('.menu-panel ul').on('click', function(e) {
    e.stopPropagation();
  });

  $('.menu-panel').on('click', function(e) {
    closeMenuProperly();
  })
}


// smooth scroll for anchor smooth scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
