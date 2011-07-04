/**
 * @file user-links.js
 * Link toggle for the 'My Account' menu.
 * 
 * @author Raymond Jelierse
 */

Drupal.behaviors.equinoxMyAccount = function() {
    // Set initial state.
    $('#user-links-menu').css({'display': 'none'});
    
    $('#user-links-toggle').click(function() {
        $('#user-links-menu').toggle();
        
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }
        
        return false;
    });
}