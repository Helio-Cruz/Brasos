import UIkit from 'uikit';
 import Icons from 'uikit/dist/js/uikit-icons';
var app = {
  init: function() {
    console.log('init');
    // loads the Icon plugin
         UIkit.use(Icons);
    // components can be called from the imported UIkit reference
       UIkit.notification('Hello world.');
  }
};

$(app.init);
