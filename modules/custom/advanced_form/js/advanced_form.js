/**
 * Created by user on 14.03.17.
 */
// (function ($) {
Drupal.behaviors.Advanced_Form = {
  attach: function (context, settings) {
    $('#edit-more-info').change(
      function () {
        $('.form-item-city').fadeToggle(500);
        $('.form-item-address').fadeToggle(500);
      }
    );
  }
}

// })(jQuery);
