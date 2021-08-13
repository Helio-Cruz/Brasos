import UIkit from 'uikit';
import 'slick-carousel';
import Icons from 'uikit/dist/js/uikit-icons';


var app = {
  init: function () {
    //   console.log('init');
    // loads the Icon plugin
    UIkit.use(Icons);
    UIkit.responsive(UIkit.util.$('iframe'));


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


    /*
        function clearForm() {
          $('#user').val('');
          $('#pass').val('');
          $("#form_output").hide();
        }
    */
    /* modal become-member template */
    jQuery(function ($) {
      var popup = $('#modal-media-text');
      if (popup) {
        UIkit.modal('#modal-media-text').show();
      } else {
        UIkit.modal('#modal-media-text').hide();
      }
    });



    $("#loginform").on('submit', function (event) {

      var formMessage = $("#form_output");
      var userID = $('#user').val();
      var userPWD = $('#pass').val();
      var remember = $('#rememberme').val();
      var security = $('#security').val();
      var datas = $(this).serialize();

      // if (datas.indexOf('=&') > -1 || datas.substr(datas.length - 1) == '=') {
      //   formMessage.addClass('inputs__output-error').html('Merci de compléter les champs vides');
      // } else {

      $.ajax({
        type: "POST",
        url: ajax_login_object.ajaxurl,
        dataType: 'json',
        data: {
          //datas,
          'log': userID,
          'pwd': userPWD,
          'rememberme': remember,
          'security': security,
          action: 'login_member'
        },

        success: function (data) {

          if (data.loggedin == true) {
            document.location.href = ajax_login_object.redirecturl;
          } else {
            formMessage.addClass('uk-text-danger').html(data.message);
          }

        },
        error: function () {
          formMessage.addClass('uk-text-danger').html('Occoreu um erro, tente de novo mais tarde.');
        }
      });
      event.preventDefault();
      // }
    });



    const checkoutLoginForm = $('.xoo-el-form-inline [data-section="login"]');
    const ResetPwd = `
    <hr class="xoo-aff-group">
    <form class="xoo-aff-group" id="form-password-reset" action="<?php echo wp_lostpassword_url(); ?>" method="post">
      <h3 class="h3" style="text-align: center; line-height: 50px; background: #f2f2f2; font-weight: bold ">Membro Brasos? <br/>Por favor insira seu e-mail e clique abaixo para gerar sua senha.</h3>
      <div>
        <label for="auth-password-reset-email" style="visibility: hidden">Email</label>
        <div class="xoo-aff-input-group">
          <input type="email" class="xoo-aff-text" id="auth-password-reset-email" name="email" placeholder="Email" style="width: 65% !important; margin-right: 20px; height: 45px;">
          <button type="submit" class="button btn xoo-el-action-btn xoo-el-login-btn" style="width: 35% !important; margin: 0 !important; height: 45px;">Gerar Senha</button>
        </div>
      </div>
      <p class="form__error uk-text-danger"></p>
      <p class="form__success uk-text-success"></p>
    </form>
  
    `;

    if (checkoutLoginForm) {
      checkoutLoginForm.append(ResetPwd);
    }

    $('.xoo-el-form-inline #form-password-reset').on('submit', function (event) {
      event.preventDefault(event);
      const email = $(`.xoo-el-form-inline #auth-password-reset-email`).val()
      console.log(email)
      const error = $('.xoo-el-form-inline #form-password-reset .form__error');
      const success = $('.xoo-el-form-inline #form-password-reset .form__success');

      if (email) {
        $.ajax({
          type: 'POST',
          url: ajax_brasos.ajaxurl,
          data: {
            action: 'authResetPassword',
            email: email,
            security: ajax_brasos.security
          },
          success: function (data) {
            console.log(data)
            if (data.status == true) {
              error.text("")
              success.text("")
              success.text(data.data.message)
            }
            if (data.status == false) {
              success.text("")
              error.text("")
              error.text(data.data.message)
            }
          },
          error: function (data) {
            console.log(data)
            success.text("")
            error.text("")
            error.text('Occoreu um erro, tente de novo mais tarde.');
          }
        })
      } else {
        success.text("")
        error.text("")
        error.text("Insira seu email")
        return false;
      }

    })


    // woocommerce
    // PAGE MY ACCOUNT
    if (window.location.pathname == '/Wordpress/Brasos/my-account/') {
      const dashboardNav = document.querySelector('.woocommerce-MyAccount-navigation-link--dashboard');
      const dashboardTitle = document.querySelector('.woocommerce-MyAccount-content p')
      const dashboardLink = document.querySelector('.woocommerce-MyAccount-content p a')
      if (dashboardNav.classList.contains('is-active')) {
        dashboardTitle.style.backgroundColor = '#006e78';
        dashboardTitle.style.color = 'white';
        dashboardTitle.style.borderRadius = '5px';
        dashboardTitle.style.padding = '0.5em';
        dashboardLink.style.color = 'white';
      }
    }
  }
};

$(app.init);
