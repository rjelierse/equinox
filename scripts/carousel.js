/**
 * @file carousel.js
 * Frontpage carousel
 *
 * @author Raymond Jelierse
 */

Drupal.behaviors.equinoxCarousel = function() {
    var timer = setInterval('rotate()', Drupal.settings.equinox.carouselTimeout);

    var item_width = $('div.view-frontpage-carousel div.frontpage-banner-item').outerWidth();
    var left_value = item_width * (-1);

    $('div.view-frontpage-carousel div.view-content').css({'left' : left_value});

    $('div.view-frontpage-carousel').hover(
        function() {
            clearInterval(timer);
        },
        function() {
            timer = setInterval('rotate()', Drupal.settings.equinox.carouselTimeout);
        }
    );

}

function rotate() {
    var item_width = $('div.view-frontpage-carousel div.frontpage-banner-item').outerWidth();
    var left_value = item_width * (-1);
    var left_indent = parseInt($('div.view-frontpage-carousel div.view-content').css('left')) - item_width;

    $('div.view-frontpage-carousel div.view-content').animate({'left' : left_indent}, Drupal.settings.equinox.carouselTransitionSpeed, function () {
        $('div.view-frontpage-carousel div.frontpage-banner-item:last').after($('div.view-frontpage-carousel div.frontpage-banner-item:first'));
        $('div.view-frontpage-carousel div.view-content').css({'left' : left_value});
    });
}