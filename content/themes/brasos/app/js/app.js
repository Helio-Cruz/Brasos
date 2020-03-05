
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

var app = {
  init: function () {
    console.log('init');
    // loads the Icon plugin
    UIkit.use(Icons);

    // $('.subnav-events li').click(function () {
    //   $(this).addClass('uk-active').siblings().removeClass('uk-active');
    // });


  }


};

$(app.init);
