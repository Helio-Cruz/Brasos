import UIkit from 'uikit';
import 'slick-carousel';
import Icons from 'uikit/dist/js/uikit-icons';


var app = {
  init: function () {
    //   console.log('init');
    // loads the Icon plugin
    UIkit.use(Icons);
    UIkit.responsive(UIkit.util.$('iframe'));

    if ($('body').hasClass('home')) {
      var popup = $('.modal-image').attr('src');
      if (popup != '') {
        UIkit.modal('#modal-media-image').show();
      } else {
        UIkit.modal('#modal-media-image').hide();
      }
    }

    // NAVBAR AND SIDEBAR 
    $('body').css('visibility', 'visible');
    $('.uk-navbar-container .uk-navbar-nav:nth-of-type(2) > li:nth-of-type(2) > a').removeAttr("href").css("cursor", "default");
    $('.uk-navbar-container .uk-navbar-nav:nth-of-type(2) > li:nth-of-type(3) > a').removeAttr("href").css("cursor", "default");
    $('.uk-navbar-container .uk-navbar-nav:nth-of-type(2) > li:nth-of-type(4) > a').removeAttr("href").css("cursor", "default");
    $('.uk-navbar-container .uk-navbar-nav:nth-of-type(2) > li:nth-of-type(5) > a').removeAttr("href").css("cursor", "default");
    $('.uk-navbar-container .uk-navbar-nav:nth-of-type(2) > li:nth-of-type(6) > a').removeAttr("href").css("cursor", "default");
    $('.uk-navbar-container .uk-navbar-nav:nth-of-type(2) > li:nth-of-type(8) > a').removeAttr("href").css("cursor", "default");
    $('.uk-navbar-container .sub-menu').addClass('uk-nav uk-navbar-dropdown-nav');
    $('.uk-navbar-container .sub-menu').wrap('<div class="uk-navbar-dropdown uk-navbar-dropdown-dropbar">');

    // sidebar dropdown
    $('#menu-item-1002 > a').attr("uk-icon", "icon: triangle-down");
    $('#menu-item-695 > a').attr("uk-icon", "icon: triangle-down");
    $('#menu-item-949 > a').attr("uk-icon", "icon: triangle-down");
    $('#menu-item-969 > a').attr("uk-icon", "icon: triangle-down");
    $('#menu-item-693 > a').attr("uk-icon", "icon: triangle-down");
    $('#menu-item-1182 > a').attr("uk-icon", "icon: triangle-down");
    // $('#menu-item-699 > a').attr( "uk-icon", "icon: triangle-down" ); //local
    // $('#menu-item-695 > a').attr( "uk-icon", "icon: triangle-down" ); //local

    $(".white-block .menu-item-has-children").each(function () {
      $(this).click(function () {
        var dropdownContent = $(this).find('.sub-menu');
        dropdownContent.toggleClass('sub-menu-show');
      });
    });


    $(".slick-carousel-small").slick({
      autoplay: true,
      // dots: true,
      arrows: false,
      autoplaySpeed: 6000
    });

    $('.fade').slick({
      autoplay: true,
      arrows: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });


    var ctlrManyElementsManyTimes = new ScrollMagic.Controller();
    $("div").each(function () {
      var fadeTop = $(this).find(".fadeTop");
      var fadeLeft = $(this).find(".fadeLeft");
      var fadeRight = $(this).find(".fadeRight");
      var fadeBottom = $(this).find(".fadeBottom");
      var tl = new TimelineMax();
      tl.fromTo(fadeTop, 0.3,
        { opacity: 0, y: -50, x: 0, ease: 'ease-out' },
        { opacity: 1, y: 0 }
      )
        .fromTo(fadeLeft, 0.3,
          { opacity: 0, x: -50, y: 0, ease: 'ease-out' },
          { opacity: 1, x: 0 }
        )
        .fromTo(fadeRight, 0.3,
          { opacity: 0, x: 50, y: 0, ease: 'ease-out' },
          { opacity: 1, x: 0 }
        )
        .fromTo(fadeBottom, 0.3,
          { opacity: 0, y: 50, x: 0, ease: 'ease-out' },
          { opacity: 1, y: 0 }
        );
      new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.9, // or onEnter
        offset: 45,
        reverse: false
      })
        .setTween(tl)
        .addTo(ctlrManyElementsManyTimes);
    });

    // SCROLL BUTTON
    $(document).on('click', '#indiceBtn', function (event) {
      $('html,body').animate({
        scrollTop: "0"
      }, 1000);
    });


    $('#person').val('');
    var diplomDIV = $('.diplom__show');
    var diplomErrorMsg = $('.diplom-error-message');

    if (diplomDIV.children().length > 0) {
      diplomErrorMsg.hide();
    } else {
      diplomErrorMsg.show();
    }
    // var diplomsInput = $("#person");
    // var diplomsDatalist = $("datalist");

    // diplomsInput.addEventListener("keyup", (e) => {
    //   // enter at least 3 letters to show name
    //   if (e.target.value.length >= 3) {
    //     diplomsDatalist.setAttribute("id", "people");
    //   } else {
    //     diplomsDatalist.setAttribute("id", "");
    //   }
    // });

    $('#user').attr('placeholder', 'User Name');
    $('#pass').attr('placeholder', 'Password');


    /*
        function clearForm() {
          $('#user').val('');
          $('#pass').val('');
          $("#form_output").hide();
        }
    */
    $("#wp-submit").on('click', function (event) {

      event.preventDefault();
      var formMessage = $("#form_output");
      var log = $('#user').val();
      var pwd = $('#pass').val();
      formMessage.show();
      var serialized = $(this).serialize();

      // var input_data = $('#wp_login_form').serialize();

      if (serialized.indexOf('=&') > -1 || serialized.substr(serialized.length - 1) == '=') {
        formMessage.addClass('inputs__output-error').html('Merci de compléter les champs vides');
        console.log('empty');
      } else {
        $.ajax({
          type: "POST",
          //	url:  '<//?php  (wp_redirect('membros')) ?>',
          url: ajaxurl,
          dataType: 'json',
          data: {
            log: log,
            pwd: pwd,
            action: 'ajax_login'
          },
          success: function (response, data) {
            console.log('ok');
            console.log(response);
            console.log(data);
            // window.location = ' ';
          },
          error: function (errorThrown) {
            formMessage.addClass('login-error').html('Une erreur s\'est produite. Veuillez réessayer.');
            console.log('not ok');
            console.log(errorThrown);
          }
        });
      }
    });
  }
};

$(app.init);
