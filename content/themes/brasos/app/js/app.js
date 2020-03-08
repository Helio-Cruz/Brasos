
import 'slick-carousel';
import ScrollMagic from 'scrollmagic';
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';
import { gsap } from "gsap";

var app = {
  init: function () {
    console.log('init');
    // loads the Icon plugin
    UIkit.use(Icons);

    $(".slick-carousel").slick({
      autoplay: true,
      // dots: true,
      arrows: false
    });

    // $('.navbar-events > li').click(function () {
    //   $(this).addClass('uk-active').siblings().removeclass('uk-active');
    //   console.log(this);
    // });

    // UIkit.scrollspy(
    //   '.brasos', {
    //   cls: uk - animation - slide - right,
    //   target: '.brasos-fade',
    //   delay: 300,
    //   repeat: true
    // },
    //   'blog-cards', {
    //   cls: uk - animation - slide - left,
    //   target: '.blog',
    //   delay: 300,
    //   repeat: true
    // }
    // );

    
      // window.onscroll = function () { scrollFunction() };
      // gsap.timeline()
      var ctlrManyElementsManyTimes = new ScrollMagic.Controller();
      $("div").each(function () {
        var fadeTop = $(this).find(".fadeTop");
        var fadeLeft = $(this).find(".fadeTop");
        var fadeRight = $(this).find(".fadeRight");
        var fadeBottom = $(this).find(".fadeBottom");
        var tl = new TimelineMax();
        tl.fromTo(fadeTop, 0.6,
          { opacity: 0, y:-100, x:0, ease: 'ease' },
          { opacity: 1, y:0 }
        )
          .fromTo(fadeLeft, 0.6,
            { opacity: 0, x:-100, y:0, ease: 'ease' },
            { opacity: 1, x:0 }
          )
          .fromTo(fadeRight, 0.6,
            { opacity: 0, x:100, y:0, ease: 'ease' },
            { opacity: 1, x:0 }
          )
          .fromTo(fadeBottom, 0.6,
            { opacity: 0, y:100, x:0, ease: 'ease' },
            { opacity: 1, y:0 }
          );
        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: "onEnter",
          reverse: false
        })
          .setTween(tl)
          .addTo(ctlrManyElementsManyTimes);
      });


  }
};

$(app.init);
