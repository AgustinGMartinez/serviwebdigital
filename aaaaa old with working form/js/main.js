$(document).ready(function(){
  $('#preloader').hide();
  $('.wrapper').fadeIn();
  activateLinks();

  (function() {
      var elements = document.getElementsByClassName('typewrite');
      for (var i=0; i<elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
          }
      }
  })();

  $('.navbar-toggler').click(function(){
		$('#nav-icon2').toggleClass('open');
  });
  $('#submitContactForm').on("click", submitContactForm);

});

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
    $('a[href=\'' + pageName + '\']').parent().each(function() {
      if ($(this).prop("tagName") == "LI") $(this).addClass('active');
    });
  }
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
