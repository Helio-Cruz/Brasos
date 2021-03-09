var index = {

    init: function () {

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