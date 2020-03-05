
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

var app = {
  init: function () {
    console.log('init');
    // loads the Icon plugin
    UIkit.use(Icons);

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

  }


};

$(app.init);
