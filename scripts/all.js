$.fn.preload = function() {
  this.each(function() {
    $('<img/>')[0].src = this;
  });
}

$(document).ready(function() {

  $('a, li, tr').hover(function() {
    $(this).toggleClass("active");
  });

  // intro images preload
  var bcg = [
    'http://new.apartment-galeon.com/images/tor1.jpg',
    'http://new.apartment-galeon.com/images/tor2.jpg',
    'http://new.apartment-galeon.com/images/tor3.jpg',
    'http://new.apartment-galeon.com/images/tor4.jpg',
  ];

  $(bcg).preload();

  //change background every 10 seconds
  var i = 1;
  
  setInterval(function() {
      if (i < 4) {
        i++;
      } else {
        i = 1;
      }
      $('.js-background').removeClass('img1 img2 img3 img4');
      $('.js-background').addClass('img' + i);
  }, 5000);
  
  //form function
  function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test($email)) {
      return false;
    } else {
      if ($email.length == 0) {
        return false;
      }
      return true;
    }
  }

  //form
  $('.js-info').css("display", "none");

  $('.js-send').submit(function(e) {

    //sending
    e.preventDefault();

    $('.js-hint').removeClass("wrong");

    var status = true;
    //validation
    if ($('.js-form-name').val().length < 3) {
      status = false;
      $('.js-hint-name').addClass("wrong");
    }
    if ($('.js-form-phone').val().length < 9) {
      status = false;
      $('.js-hint-phone').addClass("wrong");
    }
    if (!validateEmail($('.js-form-email').val())) {
      status = false;
      $('.js-hint-email').addClass("wrong");
    }
    if ($('.js-form-text').val().length < 10) {
      status = false;
      $('.js-hint-text').addClass("wrong");
    }
    if ($('.js-form-check').val() !== "nospam") {
      status = false;
    }

    if (status) {
      var name,
        phone,
        email,
        text;

      $.ajax({
        type: "POST",
        //url: "http://localhost/galeon/pages/function-email.php",
        url: "http://new.apartment-galeon.com/pages/function-email.php",
        data: $(".js-send").serialize(), // serializes the form's elements.
        success: function(data) {
          console.log(data); // show response from the php script.
          if (data === "true") {
            $('.js-send').css("display", "none");
            $('.js-sent').css("display", "block");
          } else {
            $('.js-send').css("display", "none");
            $('.js-error').css("display", "block");
          }
        }
      });

      return false; // avoid to execute the actual submit of the form.   
    }
  });

  $("a.js-onpage").smoothScroll();

});