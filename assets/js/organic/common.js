$(document).ready(function () {
        $('input,textarea').focus(function () {
            $(this).data('placeholder', $(this).attr('placeholder')).attr('placeholder', '');
        }).blur(function () {
            $(this).attr('placeholder', $(this).data('placeholder'));
        });
        $('[data-popup-open]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
            $('body').css('overflow', 'hidden');
            e.preventDefault();
        });
        $('[data-popup-open-1]').on('click', function (e) {
            var targeted_popup_class_1 = jQuery(this).attr('data-popup-open-1');
            $('[data-popup="' + targeted_popup_class_1 + '"]').fadeIn(350);
            $('body').css('overflow', 'hidden');
            e.preventDefault();
        });
        $('[data-popup-close]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
            var targeted_popup_class_1 = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class_1 + '"]').fadeOut(350);
            $('body').css('overflow', 'inherit');
            e.preventDefault();
        });
        
        $(window).on("load", function () {
            $(".popup-content").mCustomScrollbar({
                axis: "y"
            });
        });
    });