jQuery(function ($) { 
    if ($('body').hasClass('home')) {
        var popup = $('.modal-image').attr('src');
        if (popup != null) {
            UIkit.modal('#modal-media-image').show();
        } else {
            UIkit.modal('#modal-media-image').hide();
        }
    }
});
