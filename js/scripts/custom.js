/**
 * File custom.js.
 *
 * Handles custom JavaScript for the site.
 */

(function ($) {

  $('.song-entry__title').click(function() {
    $(this).parent().find('.song-entry__links').slideToggle();
  });

})(jQuery);
