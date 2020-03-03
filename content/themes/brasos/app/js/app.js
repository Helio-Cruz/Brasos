
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

var app = {
  init: function () {
    console.log('init');
    // loads the Icon plugin
    UIkit.use(Icons);

    var peopleDiplom = ["Nome Completo", "Nome Completo 2"];
    $('.uk-search').search({
      source: content
    });
  }
};

$(app.init);
