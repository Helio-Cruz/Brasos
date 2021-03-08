
const script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.5.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

 import UIkit from 'uikit';

var index = {

    init: function () {
       
        console.log('OI');

        if ($('body').hasClass('home')) {
            
            var popup = $('.modal-image').attr('src');
            if (popup != '') {
                UIkit.modal('#modal-media-image').show();
            } else {
                UIkit.modal('#modal-media-image').hide();
            }
        }
    }
};

$(index.init);